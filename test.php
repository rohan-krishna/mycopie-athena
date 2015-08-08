<?php

function validate_setting($plugin_options) { 

	$keys = array_keys($_FILES); 
	$i = 0; 
	foreach ( $_FILES as $image ) {   
	// if a files was upload   
		if ($image['size']) {     
		// if it is an image     
		if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {       
		$override = array('test_form' => false);       // save the file, and store an array, containing its location in $file       
		$file = wp_handle_upload( $image, $override );       
		$plugin_options[$keys[$i]] = $file['url'];     } else {       
		// Not an image.        
		$options = get_option('plugin_options');       
		$plugin_options[$keys[$i]] = $options[$logo];       
		// Die and let the user know that they made a mistake.       
		wp_die('No image was uploaded.');     
		}   
	}   
	// Else, the user didn't upload a file.   
	// Retain the image that's already on file.  
 	else 
 	{     
 		$options = get_option('plugin_options');     
 		$plugin_options[$keys[$i]] = $options[$keys[$i]];  
  	}   
  	$i++; 
  } 
  return $plugin_options;
}