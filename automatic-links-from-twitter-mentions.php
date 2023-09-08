<?php
/*
* Plugin Name: Automatic Twitter Links
* Description: Automatically converts all @ mentions and Twitter usernames on your site into direct links to their respective Twitter profiles.
*/




defined('ABSPATH') or die("Access denied.");


function content_twitter_mention($content)
{
    return preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/', "$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>", $content);
}
add_filter('the_content', 'content_twitter_mention');
add_filter('comment_text', 'content_twitter_mention');
