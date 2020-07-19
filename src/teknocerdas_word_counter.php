<?php
/**
 * @package TeknoCerdas_Word_Counter
 * @version 1.0.0
 */
/*
Plugin Name: TeknoCerdas Word Counter
Plugin URI: https://teknocerdas.com
Description: A plugin to count number of words in a post.
Author: Rio Astamal
Version: 1.0.0
Author URI: https://rioastamal.net
*/

add_action( 'the_post', 'teknocerdas_word_counter', 1 );

function teknocerdas_word_counter( $post ) {
    $no_html_content = strip_tags($post->post_content);

    $post->post_content = $post->post_content . sprintf(
                          '<div class="teknocerdas-word-counter">Number of words: <strong>%s</strong></div>',
                          str_word_count($no_html_content));
}