<?php 
function halimye_import_files() {
	return array(
		array(
			'import_file_name'             => __('Halimye Demo Import 1', 'halimye'),
			// 'categories'                   => array( 'Category 1', 'Category 2' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo-data/halimye-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo-data/halimye-widgets.wie',
			// 'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
			// 'local_import_redux'           => array(
			// 	array(
			// 		'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
			// 		'option_name' => 'redux_option_name',
			// 	),
			// ),
			'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
			'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
		),
		
	);
}
add_filter( 'ocdi/import_files', 'halimye_import_files' );