<?php
function add_css(){
    //cdn.jsdelivr.net/gh/Virace/jsDelivr-CDN/public
    $url = '//cdn.jsdelivr.net/gh/Virace/jsDelivr-CDN/public';
    if(!is_admin()){
        wp_enqueue_style('animate',$url.'/css/animate.css-3.7.2/animate.min.css',array(),'3.7.2');
    }
}
add_action('wp_enqueue_scripts','add_css');

add_filter( 'avatar_defaults', 'newgravatar' );  
 
function newgravatar ($avatar_defaults) {  
    $myavatar = 'https://tva1.sinaimg.cn/large/a1e6bd2bly1gdujabs2g5j20hs0hsjrw.jpg';  
    $avatar_defaults[$myavatar] = "默认头像";  
    return $avatar_defaults;  
}

// 删除block_library_css
add_action( 'wp_enqueue_scripts', 'fanly_remove_block_library_css', 100 );
function fanly_remove_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
}
