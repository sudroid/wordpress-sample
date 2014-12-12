<?php
/*
Plugin Name: Search Query Logging
Author: Shue Chan, 000277970

*/

register_activation_hook(__FILE__,'searchQL_install');
function searchQL_install() {

    //Create new database table.
    $sql = 'drop table if exists `wp_searchQueryLog`';
    $result = mysql_query($sql) or die('Drop table failed');
   
    $sql = "CREATE TABLE IF NOT EXISTS `wp_searchQueryLog` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `searchWord` varchar(20) NOT NULL,
			  PRIMARY KEY (`id`)
			)";

    /* Creates new option  in the wp_options table*/
    add_option("searchLog", array('topValue' => 5), '', 'yes');

}