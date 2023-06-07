<?php
function wpb_follow_us() {

// Only do this when a single post is displayed

// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles

    echo '<p style="text-align: right" class="follow-us">Jeśli lubisz Ferrari, proszę polub nas na <a href="https://twitter.com/ScuderiaFerrari?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" title="Scuderia Ferrari on Twitter" target="_blank" rel="nofollow">Twitterze</a> i <a href="https://www.facebook.com/ScuderiaFerrari/" title="Scuderia Ferrari on Facebook" target="_blank" rel="nofollow">Facebooku</a>.</p>';

    echo "<script>console.log('Scuderia Ferrari')</script>";

}
// Hook our function to WordPress the_content filter
add_filter('wp_footer', 'wpb_follow_us');