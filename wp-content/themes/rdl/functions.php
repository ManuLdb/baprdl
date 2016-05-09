<?php

/*Register custom navigation walker*/
require_once('wp_bootstrap_navwalker.php');
register_nav_menus(
    array(
        'title_header'=>__('Menu du haut'),
        'title_li'=>__('Menu principal')    )
);
// WALKER END
function custom_theme_setup(){
    add_theme_support($feature, $arguments);
}
add_action('after_setup_theme', 'custom_theme_setup');




//Ajouter une image à la Une sur les articles
add_theme_support('post-thumbnails');

// Créer Custom Post Type
//add_action( 'init', 'create_post_type' );
//function create_post_type() {
//    register_post_type('produit',
//    array(
//        'labels' => array(
//            'name' => 'produit',
//            'singular_name' => 'produit'
//        ),
//        'public' => true,
//        'supports' => array('thumbnail','editor', 'title')
//    )
//);
//}

// DISQUS
function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}