<?php
$manifest = array(
  'acceptable_sugar_flavors' => array(
    'CE',
    'PRO',
	'ENT',
  ),
  'acceptable_sugar_versions' => array(
    '5.2.0',
  ),
  'is_uninstallable' => true,
  'name' => 'Google News Connector',
  'description' => 'Connector to Google News',
  'author' => 'John Mertic',
  'published_date' => '2010/06/30',
  'version' => '1.0',
  'type' => 'module',
  'icon' => '',
);

$installdefs = array (
  'id' => 'ext_rest_googlenews',
  'connectors' => array (
    array (
      'connector' => '<basepath>/googlenews/source',
	  'formatter' => '<basepath>/googlenews/formatter',
      'name' => 'ext_rest_googlenews',
    ),
  ),
);

?>
