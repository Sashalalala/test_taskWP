<?php 

add_action('admin_menu', 'add_custom_settings');

function add_custom_settings() {
	add_options_page( 'Lorem Settings', 'Lorem Settings', 'manage_options', 'lorem_settings', 'option_page');  
}

function option_page(){
	?>
	<h1 style="text-align: center;">Lorem Test settings</h1>
	<form method="post" enctype="multipart/form-data" action="options.php">
		<?php 
		settings_fields('lorem_options');
		do_settings_sections('lorem_settings');
		?>
	
		<input type="submit" value="Save Changes" />  
			
	</form>
	<?php
}

function lorem_options_settings() {

	register_setting( 'lorem_options', 'lorem_options' );
 
	
	add_settings_section( 'top_page_options', 'Header options', '', 'lorem_settings' );
 
	
	$params = array(
		'type'      => 'text',
		'id'        => 'logo-slogan',
		'desc'      => 'Logo slogan'
	);
	add_settings_field( 'slogan', 'Logo slogan', 'display_settings', 'lorem_settings', 'top_page_options', $params );

	//поля для вибобора картинок

	$params = array(
		'type'      => 'image',
		'id'        => 'logo_icon',
		'desc'      => 'Load logo'
	);

	add_settings_field('logo_icon',  'select logo', 'display_settings', 'lorem_settings', 'top_page_options', $params );

	$params = array(
		'type'      => 'image',
		'id'        => 'header_bkgr',
		'desc'      => 'Load Header background'
	);

	add_settings_field('bckgr_image',  'select background image', 'display_settings', 'lorem_settings', 'top_page_options', $params);


	//***************

	add_settings_section( 'footer_contact', 'Contacts Link', '', 'lorem_settings' );
 
	$params = array(
		'type'      => 'text',
		'id'        => 'contact_email',
		'desc'      => 'Email'
	);
	add_settings_field( 'email_settings', 'Email', 'display_settings', 'lorem_settings', 'footer_contact', $params );

	$params = array(
		'type'      => 'text',
		'id'        => 'contact_phone',
		'desc'      => 'Phone'
	);
	add_settings_field( 'phone_settings', 'Phone', 'display_settings', 'lorem_settings', 'footer_contact', $params );

	$params = array(
		'type'      => 'text',
		'id'        => 'contact_site',
		'desc'      => 'Site'
	);
	add_settings_field( 'site_settings', 'Site', 'display_settings', 'lorem_settings', 'footer_contact', $params );
 
}
add_action( 'admin_init', 'lorem_options_settings' );


function display_settings($args) {
	
	extract( $args );
 
	$option_name = 'lorem_options';
 
	$o = get_option( $option_name );

	switch ( $type ) {  
		case 'text':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";  
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";   
		break;
		case 'image':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' /> <input id='upload_".$id."_btn' type='button' class='button' value='upload'/> "; 
		break;
	}
}

//add scrints for medialoader

function lorem_admin_scripts() {
    wp_register_script( 'lorem-admin-upload', get_template_directory_uri() .'/js/adminMedialoader.js', array('jquery','media-upload','thickbox') );
     
        wp_enqueue_script('jquery');
 
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
 
        wp_enqueue_script('media-upload');
        wp_enqueue_script('lorem-admin-upload');
 
 
}
add_action('admin_enqueue_scripts', 'lorem_admin_scripts');


