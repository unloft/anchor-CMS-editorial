<?php
/*
Custom theme functions

Note: we recommend you prefix all your functions to avoid any naming
collisions or wrap your functions with if function_exists braces.
*/
/* Footer Links */
function dribbble_url() {
return 'https://dribbble.com/' . site_meta('acc_dribbble');
}

function twitter_url() {
return 'https://twitter.com/' . site_meta('acc_twitter');
}

function facebook_url() {
return 'https://facebook.com/' . site_meta('acc_facebook');
}

/* Page-Work */
function cat_page() {
	return site_meta('title', 'wert');
}



function custom_posts_page() {
  // only run on the first call
  if( ! Registry::has('rwar_post_archive')) {
    // capture original article if one is set
    if($article = Registry::get('article')) {
      Registry::set('original_article', $article);
    }
  }

  if( ! $posts = Registry::get('rwar_post_archive')) {
    $posts = Post::where('status', '=', 'published')->get();

    Registry::set('rwar_post_archive', $posts = new Items($posts));
  }

  if($result = $posts->valid()) {
    // register single post
    Registry::set('article', $posts->current());

    // move to next
    $posts->next();
  }
  else {
    // back to the start
    $posts->rewind();

    // reset original article
    Registry::set('article', Registry::get('original_article'));

    // remove items
    Registry::set('rwar_post_archive', false);
  }

  return $result;
}

// limit = max words to show; text= text to cut; this function used in footer.php line #47
function cut_text($limit ,$text) 
{ 
	return substr($text,0, $limit);    // returns max 130 characters
}


// change limit number for show more or less "last articles" - I tip 3 limit for best presentation...
function rwar_latest_posts($limit = 3) { 
	
	if( ! Registry::has('rwar_latest_posts')) {
		// capture original article if one is set
		if($article = Registry::get('article')) {
			Registry::set('original_article', $article);
		}
	}

	if( ! $posts = Registry::get('rwar_latest_posts')) {
		$posts = Post::where('status', '=', 'published')->sort('created', 'desc')->take($limit)->get();

		Registry::set('rwar_latest_posts', $posts = new Items($posts));
	}

	if($result = $posts->valid()) {
		// register single post
		Registry::set('article', $posts->current());

		// move to next
		$posts->next();
	}
	else {
		// back to the start
		$posts->rewind();

		// reset original article
		Registry::set('article', Registry::get('original_article'));

		// remove items
		Registry::set('rwar_latest_posts', false);
	}

	return $result;
}

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function relative_time($date) {
	if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
		}
	}
}