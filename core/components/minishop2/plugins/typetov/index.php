<?php
// /core/components/minishop2/plugins/typetov/
return array(
	'xpdo_meta_map' => array(
		'msProductData' => require_once dirname(__FILE__) .'/model/msproductdata.map.inc.php'
	)
	,'manager' => array(
		'msProductData' => MODX_ASSETS_URL . 'components/minishop2/plugins/typetov/msproductdata.js'
	)
);