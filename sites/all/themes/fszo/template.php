<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 
 
function fszo_preprocess_html(&$vars, $hook) {
    // drupal_add_css("http://fast.fonts.com/cssapi/d98cf283-4c0a-4f08-b6e1-e96140ac6440.css",'external');
    drupal_add_css("http://fnt.webink.com/wfs/webink.css/?project=EA9F156B-506D-4CEB-A200-5F2F1095C74A&fonts=29D460F1-1191-FF98-4C4D-BB44D43D08D0:f=KippCleOneD", 'external');
}

function fszo_preprocess_node(&$vars, $hook) {
    if($vars['is_front'] && $vars['type'] == 'homepage') {
        
        // dsm($vars);
        
        $bgurl = file_create_url($vars['field_background_image']['und'][0]['uri']);
        $txturl = file_create_url($vars['field_textoverlay_image']['und'][0]['uri']);
        $animurl = base_path() . drupal_get_path('theme', 'fszo') .  "/images/walkcycle_01b-h400.gif";
        
        $linkto = base_path() . "stuecke";
        
        drupal_add_js( array('homePage' => array('linkto' => $linkto, 'bgurl' => $bgurl,'txturl' => $txturl, 'animurl' => $animurl)), 'setting' );
        
        drupal_add_js(drupal_get_path('theme', 'fszo') .'/js/jquery.backstretch.js', 
            array('type' => 'file', 'scope' => 'footer', 'weight' => 80) 
        );
        drupal_add_js(drupal_get_path('theme', 'fszo') .'/js/home.js', 
            array('type' => 'file', 'scope' => 'footer', 'weight' => 81) 
        );
    } elseif( $vars['type'] == 'page' ) {
        $bgurl = file_create_url($vars['field_background_image']['und'][0]['uri']);
        drupal_add_js( array('stueckPage' => array('bgurl' => $bgurl)), 'setting' );
        
        drupal_add_js(drupal_get_path('theme', 'fszo') .'/js/jquery.backstretch.js', 
            array('type' => 'file', 'scope' => 'footer', 'weight' => 80) 
        );
        drupal_add_js(drupal_get_path('theme', 'fszo') .'/js/stueck.js', 
            array('type' => 'file', 'scope' => 'footer', 'weight' => 81) 
        );
    }
}

function fszo_preprocess_views_view(&$vars) {

  if( $vars['view']->name == 'personen'){
    drupal_add_js(drupal_get_path('theme', 'fszo') .'/js/jquery.masonry.min.js', 
        array('type' => 'file', 'scope' => 'footer', 'weight' => 80) 
    );
    drupal_add_js(drupal_get_path('theme', 'fszo') .'/js/personen.js', 
        array('type' => 'file', 'scope' => 'footer', 'weight' => 81) 
    );
  } 

}



// function fszo_page_alter(&$page) {
//     $page['content']['content']['sidebar_first'] = array_merge(array('branding'=> $page['header']['branding']),$page['content']['content']['sidebar_first']);
//     unset($page['header']['branding']);
//     $page['content']['content']['sidebar_first']['branding']['#grid_container'] = 3;
//     $page['content']['content']['sidebar_first']['branding']['branding']['#grid_container'] = 3;
//     $page['content']['content']['sidebar_first']['branding']['branding']['#grid']['columns'] = 3;
// }


