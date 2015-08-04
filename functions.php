<?php
/**
 * @package WordPress
 * @subpackage Greg_Foot
 *
 * SOURCE: http://wordpress.stackexchange.com/questions/1403/organizing-code-in-your-wordpress-themes-functions-php-file
 *
 * USEFUL LOCATIONS:
 * home_url()
 * plugin_dir_url()
 * plugin_dir_path()
 * admin_url()
 * get_template_directory()
 * get_template_directory_uri()
 * get_stylesheet_directory()
 * get_stylesheet_directory_uri()
 *
**/


// PHP 5.3+
$files = new \FilesystemIterator( __DIR__.'/functions', \FilesystemIterator::SKIP_DOTS );
foreach ( $files as $file ) {
    /** @noinspection PhpIncludeInspection */
    if ($file->getFilename() == '.DS_Store') {
        continue;
    }
    
    ! $files->isDir() and include $files->getRealPath();
}
