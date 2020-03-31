<?php
function add_css(){
    //cdn.jsdelivr.net/gh/Virace/jsDelivr-CDN/public
    $url = '//cdn.jsdelivr.net/gh/Virace/jsDelivr-CDN/public';
    if(!is_admin()){
        wp_enqueue_style('animate',$url.'/css/animate.css-3.7.2/animate.min.css',array(),'3.7.2');
    }
}
add_action('wp_enqueue_scripts','add_css');