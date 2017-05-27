<?php  return array (
  'area_office_main' => 'Main',
  'area_office_auth' => 'Authorization',
  'area_office_profile' => 'Profile',
  'area_office_ms2' => 'miniShop2',
  'setting_office_frontend_css' => 'Office main styles',
  'setting_office_frontend_css_desc' => 'Path to file with the main styles of the office. If you want to use your own styles - specify them here, or clean this parameter and load them in site template.',
  'setting_office_extjs_css' => 'ExtJS custom css',
  'setting_office_extjs_css_desc' => 'You can specify path to custom css for styling office when ExtJS used in the controller.',
  'setting_office_frontend_js' => 'Office main script',
  'setting_office_frontend_js_desc' => 'Path to file with the main javascript of the office. If you want to use your own sscripts - specify them here, or clean this parameter and load them in site template.',
  'setting_office_auth_frontend_css' => 'Styles of controller Auth',
  'setting_office_auth_frontend_css_desc' => 'Path to file with Auth styles. If you want to use your own styles - specify them here, or clean this parameter and load them in site template.',
  'setting_office_auth_frontend_js' => 'Script of controller Auth',
  'setting_office_auth_frontend_js_desc' => 'Path to file with the Auth javascript. If you want to use your own sscripts - specify them here, or clean this parameter and load them in site template.',
  'setting_office_profile_frontend_css' => 'Styles of controller Profile',
  'setting_office_profile_frontend_css_desc' => 'Path to file with Profile styles. If you want to use your own styles - specify them here, or clean this parameter and load them in site template.',
  'setting_office_profile_frontend_js' => 'Script of controller Profile',
  'setting_office_profile_frontend_js_desc' => 'Path to file with the Profile javascript. If you want to use your own sscripts - specify them here, or clean this parameter and load them in site template.',
  'setting_office_profile_force_email_as_username' => 'Email as username',
  'setting_office_profile_force_email_as_username_desc' => 'This option will copy the email address of the user in the username each time the page is loaded, so they were always the same.',
  'setting_office_ms2_frontend_css' => 'Styles of controller miniShop2',
  'setting_office_ms2_frontend_css_desc' => 'Path to file with miniShop2 styles. If you want to use your own styles - specify them here, or clean this parameter and load them in site template.',
  'setting_office_ms2_frontend_js' => 'Script of controller miniShop2',
  'setting_office_ms2_frontend_js_desc' => 'Path to file with the miniShop2 javascript. If you want to use your own sscripts - specify them here, or clean this parameter and load them in site template.',
  'setting_office_auth_page_id' => 'Profile page id',
  'setting_office_auth_page_id_desc' => 'Id of the site page, where controller Profile is called. This setting is automatically filled in when you call the controller first time.',
  'setting_office_profile_required_fields' => 'Required fields of profile',
  'setting_office_profile_required_fields_desc' => 'Specify required user profile fields. The user will constantly go to edit profile, while not fill in these fields.',
  'setting_office_zp_interface' => 'Interface identity',
  'setting_office_zp_interface_desc' => 'Integer representing the payment interface, which you gave when registering in the Z-Payment.',
  'setting_office_zp_api_url' => 'Address for sending queries',
  'setting_office_zp_api_url_desc' => 'Address of the public API billing Z-Payment in the Internet.',
  'setting_office_zp_account' => 'ZP purse of interface owner',
  'setting_office_zp_account_desc' => 'Полный номер кошелька, который владеет этим интерфейсом в формате ZPxxxxxxxx.',
  'setting_office_zp_password' => 'Password to the interface',
  'setting_office_zp_password_desc' => 'This password will also have to issue upon registration in the Z-Payment.',
  'setting_office_zp_money_format' => 'Money format',
  'setting_office_zp_money_format_desc' => 'You can specify, how to format money by function number_format(). For this used JSON string with array of 3 values: number of decimals, decimals separator and thousands separator. By default format is [2,"."," "], that transforms "15336.6" into "15 336.60"',
  'setting_office_zp_activation_type' => 'The type of purses activation',
  'setting_office_zp_activation_type_desc' => 'Depending on the settings of your billing, you must specify one of two possible types of purses activation: PHONE_CODE or MAIL_CODE.',
  'setting_office_ms2_date_format' => 'date Format',
  'setting_office_ms2_date_format_desc' => 'Specify the format of date, using the syntax of php function strftime(). For example, "%d.%m.%y %H:%M".',
  'setting_office_ms2_order_grid_fields' => 'Fields of the orders table',
  'setting_office_ms2_order_grid_fields_desc' => 'Comma separated list of fields in the table of orders. Available: "createdon,updatedon,num,cost,cart_cost,delivery_cost,weight,status,delivery,payment,customer,receiver".',
  'setting_office_ms2_order_form_fields' => 'Main fields of order form',
  'setting_office_ms2_order_form_fields_desc' => 'Comma separated list of the main fields in the order, which will be shown at the first tab. Available: "weight,createdon,updatedon,cart_cost,delivery_cost,status,delivery,payment".',
  'setting_office_ms2_order_address_fields' => 'Fields of order address',
  'setting_office_ms2_order_address_fields_desc' => 'Comma separated list of address of order, which will be shown on the third tab. Available: "receiver,phone,index,country,region,metro,building,city,street,room". If empty, this tab will be hidden.',
  'setting_office_ms2_order_product_fields' => 'Field of the purchased products',
  'setting_office_ms2_order_product_fields_desc' => 'which will be shown list of ordered products. Available: "count,price,weight,cost,options". Product fields specified with the prefix "product_", for example "product_pagetitle,product_article". Additionaly, you can specify a values from the options field with the prefix "option_", for example: "option_color,option_size".',
  'office' => 'Office',
  'office_message_close_all' => 'close all',
  'office_err_action_nf' => 'Could not find specified action',
  'office_err_auth' => 'Authorization required',
  'office_err_mgr_auth' => 'You are logged into themanager, but not in the current context. Please log out of the manager or login in the current context.',
);