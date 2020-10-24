<?php

class Job_Search_Template_Functions {

	/**
	 * Private static reference to this class
	 * Useful for removing actions declared here.
	 *
	 * @var 	object 		$_this
 	 */
	private static $_this;

	/**
	 * The post meta data
	 *
	 * @since 		1.0.0
	 * @access 		private
	 * @var 		string 			$meta    			The post meta data.
	 */
	private $meta;

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
	 * @param      string    $version 			The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		self::$_this = $this;

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	} // __construct()

	/**
	 * Includes the job-search-job-title template
	 *
	 * @hooked 		job-search-loop-content 		10
	 *
	 * @param 		object 		$item 		A post object
	 * @param 		array 		$meta 		The post metadata
	 */
	public function content_job_title( $item, $meta ) {

		include Job_Search_get_template( 'job-search-job-title' );

	} // content_job_title()

	/**
	 * Includes the employee name template file
	 *
	 * @hooked 		job-search-loop-content 		15
	 *
	 * @param 		object 		$item 		A post object
	 * @param 		array 		$meta 		The post metadata
	 */
	public function content_job_location( $item, $meta ) {

		include Job_Search_get_template( 'job-search-job-location' );

	} // content_job_location()

	/**
	 * Includes the link end template file
	 *
	 * @hooked 		job-search-after-loop-content 		10
	 *
	 * @param 		object 		$item 		A post object
	 * @param 		array 		$meta 		The post metadata
	 */
	public function content_link_end( $item, $meta ) {

		include Job_Search_get_template( 'job-search-content-link-end' );

	} // content_link_end()

	/**
	 * Includes the link start template file
	 *
	 * @hooked 		job-search-before-loop-content 		15
	 *
	 * @param 		object 		$item 		A post object
	 * @param 		array 		$meta 		The post metadata
	 */
	public function content_link_start( $item, $meta ) {

		include Job_Search_get_template( 'job-search-content-link-start' );

	} // content_link_start()

	/**
	 * Includes the content wrap end template file
	 *
	 * @hooked 		job-search-after-loop-content 		90
	 *
	 * @param 		object 		$item 		A post object
	 * @param 		array 		$meta 		The post metadata
	 */
	public function content_wrap_end( $item, $meta ) {

		include Job_Search_get_template( 'job-search-content-wrap-end' );

	} // content_wrap_end()

	/**
	 * Includes the content wrap start template file
	 *
	 * @hooked 		job-search-before-loop-content 		10
	 */
	public function content_wrap_start() {

		include Job_Search_get_template( 'job-search-content-wrap-start' );

	} // content_wrap_start()

	/**
	 * Returns an array of the featured image details
	 *
	 * @param 	int 	$postID 		The post ID
	 * @return 	array 					Array of info about the featured image
	 */
	public function get_featured_images( $postID ) {

		if ( empty( $postID ) ) { return FALSE; }

		$imageID = get_post_thumbnail_id( $postID );

		if ( empty( $imageID ) ) { return FALSE; }

		return wp_prepare_attachment_for_js( $imageID );

	} // get_featured_images()

	/**
	 * Includes the list wrap end template file
	 *
	 * @hooked 		job-search-after-loop 		10
	 */
	public function list_wrap_end() {

		include Job_Search_get_template( 'job-search-list-wrap-end' );

	} // list_wrap_end()

	/**
	 * Includes the list wrap start template file
	 *
	 * @hooked 		job-search-before-loop 		10
	 */
	public function list_wrap_start() {

		include Job_Search_get_template( 'job-search-list-wrap-start' );

	} // list_wrap_start()

	/**
	 * Includes the single job post content
	 *
	 * @hooked 		job-search-single-content 	15
	 */
	public function single_post_content() {

		include Job_Search_get_template( 'single-job-post-content' );

	} // single_post_content()

	/**
	 * Includes the single job post metadata for education
	 *
	 * @hooked 		job-search-single-content 	30
	 *
	 * @param 		array 		$meta 		The post metadata
	 */
	public function single_post_education( $meta ) {

		include Job_Search_get_template( 'single-job-meta-education' );

	} // single_post_education()

	/**
	 * Includes the single job post metadata for experience
	 *
	 * @hooked 		job-search-single-content 	40
	 *
	 * @param 		array 		$meta 		The post metadata
	 */
	public function single_post_experience( $meta ) {

		include Job_Search_get_template( 'single-job-meta-experience' );

	} // single_post_experience()

	/**
	 * Includes the single job post metadata for the file
	 *
	 * @hooked 		job-search-single-content 	50
	 *
	 * @param 		array 		$meta 		The post metadata
	 */
	public function single_post_file( $meta ) {

		include Job_Search_get_template( 'single-job-meta-file' );

	} // single_post_file()

	/**
	 * Includes the single job post metadata for info
	 *
	 * @hooked 		job-search-single-content 	45
	 *
	 * @param 		array 		$meta 		The post metadata
	 */
	public function single_post_info( $meta ) {

		include Job_Search_get_template( 'single-job-meta-info' );

	} // single_post_info()

	/**
	 * Includes the single job post metadata for location
	 *
	 * @hooked 		job-search-single-content 	25
	 *
	 * @param 		array 		$meta 		The post metadata
	 */
	public function single_post_location( $meta ) {

		include Job_Search_get_template( 'single-job-meta-location' );

	} // single_post_location()

	/**
	 * Includes the single job post metadata for responsibilities
	 *
	 * @hooked 		job-search-single-content 	20
	 *
	 * @param 		array 		$meta 		The post metadata
	 */
	public function single_post_responsibilities( $meta ) {

		include Job_Search_get_template( 'single-job-meta-responsibilities' );

	} // single_post_responsibilities()

	/**
	 * Includes the single job post metadata for skills
	 *
	 * @hooked 		job-search-single-content 	35
	 *
	 * @param 		array 		$meta 		The post metadata
	 */
	public function single_post_skills( $meta ) {

		include Job_Search_get_template( 'single-job-meta-skills' );

	} // single_post_skills()

	/**
	 * Includes the single job post title
	 *
	 * @hooked 		job-search-single-content 		10
	 */
	public function single_post_title() {

		include Job_Search_get_template( 'single-job-post-title' );

	} // single_post_title()

	public function single_post_how_to_apply() {

		echo apply_filters( 'nowhiring_howtoapply', '' );

	} // single_post_how_to_apply()

	/**
	 * Returns a reference to this class. Used for removing
	 * actions and/or filters declared using an object of this class.
	 *
	 * @see  	http://hardcorewp.com/2012/enabling-action-and-filter-hook-removal-from-class-based-wordpress-plugins/
	 * @return 	object 		This class
	 */
	static function this() {

		return self::$_this;

	} // this()

} // class