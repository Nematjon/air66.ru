<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'msOnChangeOrderStatus' => 
    array (
      9 => '9',
    ),
    'msOnCreateOrder' => 
    array (
      18 => '18',
    ),
    'OnBeforeDocFormSave' => 
    array (
      10 => '10',
    ),
    'OnChunkFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnCommentDelete' => 
    array (
      4 => '4',
    ),
    'OnCommentRemove' => 
    array (
      4 => '4',
    ),
    'OnCommentSave' => 
    array (
      4 => '4',
    ),
    'OnDocFormPrerender' => 
    array (
      10 => '10',
      14 => '14',
      1 => '1',
    ),
    'OnDocFormRender' => 
    array (
      11 => '11',
    ),
    'OnDocFormSave' => 
    array (
      11 => '11',
      16 => '16',
      4 => '4',
    ),
    'OnEmptyTrash' => 
    array (
      16 => '16',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileEditFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnHandleRequest' => 
    array (
      3 => '3',
      9 => '9',
      7 => '7',
      6 => '6',
      13 => '13',
    ),
    'OnLoadWebDocument' => 
    array (
      5 => '5',
      9 => '9',
      10 => '10',
      16 => '16',
      2 => '2',
      11 => '11',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      9 => '9',
      12 => '12',
      1 => '1',
    ),
    'OnPageNotFound' => 
    array (
      10 => '10',
      16 => '16',
    ),
    'OnPluginFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnResourceDelete' => 
    array (
      4 => '4',
    ),
    'OnResourceDuplicate' => 
    array (
      10 => '10',
      11 => '11',
    ),
    'OnResourceUndelete' => 
    array (
      4 => '4',
    ),
    'OnRichTextBrowserInit' => 
    array (
      17 => '17',
      12 => '12',
    ),
    'OnRichTextEditorInit' => 
    array (
      17 => '17',
      12 => '12',
    ),
    'OnRichTextEditorRegister' => 
    array (
      17 => '17',
      12 => '12',
      1 => '1',
    ),
    'OnSiteRefresh' => 
    array (
      16 => '16',
      8 => '8',
    ),
    'OnSnipFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTempFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTVInputPropertiesList' => 
    array (
      14 => '14',
    ),
    'OnTVInputRenderList' => 
    array (
      14 => '14',
    ),
    'OnUserFormPrerender' => 
    array (
      7 => '7',
    ),
    'OnUserSave' => 
    array (
      16 => '16',
      6 => '6',
    ),
    'OnWebPageComplete' => 
    array (
      16 => '16',
    ),
    'OnWebPageInit' => 
    array (
      9 => '9',
    ),
    'OnWebPagePrerender' => 
    array (
      16 => '16',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'AjaxSnippet',
      'description' => '',
      'editor_type' => '0',
      'category' => '2',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnLoadWebDocument\':
		if (empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) || $_SERVER[\'HTTP_X_REQUESTED_WITH\'] != \'XMLHttpRequest\') {
			return;
		}
		/** @var xPDOFileCache $cache */
		$cache = $modx->cacheManager;
		$cache_key = \'/ajaxsnippet/\';

		if (!empty($_REQUEST[\'as_action\']) && $scriptProperties = $cache->get($cache_key . $_REQUEST[\'as_action\'])) {
			$output = \'\';
			/** @var modSnippet $object */
			if ($object = $modx->getObject(\'modSnippet\', array(\'name\' => $scriptProperties[\'snippet\']))) {
				$properties = $object->getProperties();
				if (!empty($scriptProperties[\'propertySet\'])) {
					$properties = array_merge($properties, $object->getPropertySet($scriptProperties[\'propertySet\']));
				}
				$scriptProperties = array_merge($properties, $scriptProperties);

				$output = $object->process($scriptProperties);
				if (strpos($output, \'[[\') !== false) {
					$maxIterations = intval($modx->getOption(\'parser_max_iterations\', $options, 10));
					$modx->parser->processElementTags(\'\', $output, true, false, \'[[\', \']]\', array(), $maxIterations);
					$modx->parser->processElementTags(\'\', $output, true, true, \'[[\', \']]\', array(), $maxIterations);
				}
			}

			$response = array(
				\'output\' => $output,
				\'key\' => $_REQUEST[\'as_action\'],
				\'snippet\' => $scriptProperties[\'snippet\'],
			);
			if (!empty($scriptProperties[\'totalVar\'])) {
				$response[\'total\'] = $modx->getPlaceholder($scriptProperties[\'totalVar\']);
			}
			if (!empty($scriptProperties[\'pageNavVar\'])) {
				$response[\'pagination\'] = $modx->getPlaceholder($scriptProperties[\'pageNavVar\']);
			}

			echo $modx->toJSON($response);
			@session_write_close();
			exit;
		}
		break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/ajaxsnippet/elements/plugins/plugin.ajaxsnippet.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'ClientConfig',
      'description' => 'Sets system settings from the Client Config CMP.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * ClientConfig
 *
 * Copyright 2011 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnHandleRequest\':
        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $settings = $clientConfig->getSettings();

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
        break;
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'mSearch2',
      'description' => '',
      'editor_type' => '0',
      'category' => '4',
      'cache_type' => '0',
      'plugincode' => '$id = 0;

switch ($modx->event->name) {

	case \'OnDocFormSave\':
	case \'OnResourceDelete\':
	case \'OnResourceUndelete\':
		/* @var modResource $modResource */
		if (!empty($resource) && $resource instanceof modResource) {
			$id = $resource->get(\'id\');
		}
	break;

	case \'OnCommentSave\':
	case \'OnCommentRemove\':
	case \'OnCommentDelete\':
		/* @var TicketComment $TicketComment */
		if (!empty($TicketComment) && $TicketComment instanceof TicketComment) {
			$id = $TicketComment->getOne(\'Thread\')->get(\'resource\');
		}
	break;

}


if (!empty($id)) {
	/* @var modProcessorResponse $response */
	$response = $modx->runProcessor(\'mgr/index/update\', array(\'id\' => $id), array(\'processors_path\' => MODX_CORE_PATH . \'components/msearch2/processors/\'));

	if ($response->isError()) {
		$modx->log(modX::LOG_LEVEL_ERROR, print_r($response->getAllErrors(), true));
	}
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'core/components/msearch2/elements/plugins/plugin.msearch2.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'officeProfile',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnLoadWebDocument\':
		if ($modx->user->isAuthenticated($modx->context->key)) {
			if (!$modx->user->active || $modx->user->Profile->blocked) {
				$modx->runProcessor(\'security/logout\');
				$modx->sendRedirect($modx->makeUrl($modx->getOption(\'site_start\'),\'\',\'\',\'full\'));
			}
			elseif ($page_id = $modx->getOption(\'office_profile_page_id\', null, false, true)) {
				if ($modx->resource->id != $page_id && $modx->resource->parent != $page_id && @urldecode($_REQUEST[\'action\']) != \'auth/logout\') {
					$required = array_map(\'trim\', explode(\',\', $modx->getOption(\'office_profile_required_fields\', null)));
					if (!in_array(\'email\', $required)) {$required[] = \'email\';}
					$user = array_merge($modx->user->Profile->toArray(), $modx->user->toArray());
					$need = array();
					foreach ($required as $field) {
						if (isset($user[$field]) && trim($user[$field]) == \'\') {
							$need[] = $field;
						}
						elseif (preg_match(\'/(.*?)\\[(.*?)\\]/\', $field, $matches)) {
							if (empty($user[$matches[1]][$matches[2]])) {
								$need[$matches[1].\'.\'.$matches[2]] = $field;
							}
						}
					}
					if (!empty($need)) {
						$modx->sendRedirect($modx->makeUrl($page_id,\'\',array(\'off_req\' => implode(\'-\',$need)),\'full\'));
						@session_write_close();
						die;
					}
				}
			}
			if ($modx->getOption(\'office_profile_force_email_as_username\', null, false)) {
				if (!empty($modx->user->Profile->email) && $modx->user->username != $modx->user->Profile->email) {
					$modx->user->set(\'username\', $modx->user->Profile->email);
					$modx->user->save();
				}
			}
		};
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/office/elements/plugins/plugin.office.profile.php',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'officeAuth',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnHandleRequest\':
		$actions = array(\'auth/login\', \'auth/logout\', \'remote/login\', \'remote/logout\');

		if (!empty($_REQUEST[\'action\']) && in_array(urldecode($_REQUEST[\'action\']), $actions)) {
			$params = array();
			foreach ($_REQUEST as $k => $v) {
				$params[$k] = urldecode($v);
			}
			if (!$modx->loadClass(\'office\', MODX_CORE_PATH . \'components/office/model/office/\', false, true)) {return;}

			list($controller, $action) = explode(\'/\', $params[\'action\']);
			$config = !empty($_SESSION[\'Office\'][ucfirst($controller)][$modx->context->key])
				? $_SESSION[\'Office\'][ucfirst($controller)][$modx->context->key]
				: array();

			$Office = new Office($modx, $config);
			$Office->loadAction($params[\'action\'], array_merge($params, $config));
		}
		elseif ($modx->context->key != \'web\' && !$modx->user->id) {
			if ($user = $modx->getAuthenticatedUser($modx->context->key)) {
				$modx->user = $user;
				$modx->getUser($modx->context->key);
			}
		}

		if (!empty($_SESSION[\'Office\'][\'ReturnTo\'][$modx->context->key]) && $modx->user->isAuthenticated($modx->context->key)) {
			$return = $_SESSION[\'Office\'][\'ReturnTo\'][$modx->context->key];
			unset($_SESSION[\'Office\'][\'ReturnTo\'][$modx->context->key]);
			$modx->sendRedirect($return);
		}

		break;

	case \'OnWebAuthentication\':
		$modx->event->_output = !empty($_SESSION[\'Office\'][\'Auth\'][\'verified\']);
		break;

	case \'OnUserSave\':
		if (!empty($user) && !empty($mode) && $mode == \'new\') {
			if (!$user->get(\'remote_key\')) {
				$user->set(\'remote_key\', $user->get(\'id\'));
				$user->save();
			}
		}
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/office/elements/plugins/plugin.office.auth.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'HybridAuth',
      'description' => '',
      'editor_type' => '0',
      'category' => '6',
      'cache_type' => '0',
      'plugincode' => 'if (!$modx->loadClass(\'hybridauth\', $modx->getOption(\'hybridauth.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/hybridauth/\') . \'model/hybridauth/\', false, true)) {
	return;
}

switch ($modx->event->name) {

	case \'OnHandleRequest\':
		if ($modx->context->key != \'web\' && !$modx->user->id) {
			if ($user = $modx->getAuthenticatedUser($modx->context->key)) {
				$modx->user = $user;
				$modx->getUser($modx->context->key);
			}
		}

		if ($modx->user->isAuthenticated($modx->context->key)) {
			if (!$modx->user->active || $modx->user->Profile->blocked) {
				$modx->runProcessor(\'security/logout\');
				$modx->sendRedirect($modx->makeUrl($modx->getOption(\'site_start\'), \'\', \'\', \'full\'));
			}
		}

		if (!empty($_REQUEST[\'hauth_action\']) || !empty($_REQUEST[\'hauth_start\']) || !empty($_REQUEST[\'hauth_done\'])) {
			$config = !empty($_SESSION[\'HybridAuth\'][$modx->context->key])
				? $_SESSION[\'HybridAuth\'][$modx->context->key]
				: array();
			$HybridAuth = new HybridAuth($modx, $config);

			if (!empty($_REQUEST[\'hauth_action\'])) {
				switch ($_REQUEST[\'hauth_action\']) {
					case \'login\':
						$HybridAuth->Login(@$_REQUEST[\'provider\']);
						break;
					case \'logout\':
						$HybridAuth->Logout();
						break;
				}
			}
			else {
				$HybridAuth->processAuth();
			}
		}
		break;

	case \'OnWebAuthentication\':
		$modx->event->_output = !empty($_SESSION[\'HybridAuth\'][\'verified\']);
		unset($_SESSION[\'HybridAuth\'][\'verified\']);
		break;

	case \'OnUserFormPrerender\':
		/** @var modUser $user */
		if (!isset($user) || $user->get(\'id\') < 1) {
			return;
		}
		$HybridAuth = new HybridAuth($modx);
		$modx->controller->addJavascript($HybridAuth->config[\'jsUrl\'] . \'mgr/hybridauth.js\');
		$modx->controller->addJavascript($HybridAuth->config[\'jsUrl\'] . \'mgr/service/grids.js\');
		$modx->controller->addLexiconTopic(\'hybridauth:default\');

		if ($modx->getCount(\'modPlugin\', array(\'name\' => \'AjaxManager\', \'disabled\' => false))) {
			$modx->controller->addHtml(\'
			<script type="text/javascript">
				HybridAuth.config = \' . $modx->toJSON($HybridAuth->config) . \';
				Ext.onReady(function() {
					window.setTimeout(function() {
						var tab = Ext.getCmp("modx-user-tabs");
						if (!tab) {return;}
						tab.add({
							title: _("ha.services"),
							border: false,
							items: [{
								layout: "anchor",
								border: false,
								items: [{
									html: _("ha.services_tip"),
									border: false,
									bodyCssClass: "panel-desc"
								}, {
									xtype: "hybridauth-grid-services",
									anchor: "100%",
									cls: "main-wrapper",
									userId: \' . intval($user->get(\'id\')) . \'
								}]
							}]
						});
					}, 10);
				});
			</script>\'
			);
		}
		else {
			$modx->controller->addHtml(\'
			<script type="text/javascript">
				HybridAuth.config = \' . $modx->toJSON($HybridAuth->config) . \';
				Ext.ComponentMgr.onAvailable("modx-user-tabs", function() {
					this.on("beforerender", function() {
						this.add({
							title: _("ha.services"),
							border: false,
							items: [{
								layout: "anchor",
								border: false,
								items: [{
									html: _("ha.services_tip"),
									border: false,
									bodyCssClass: "panel-desc"
								}, {
									xtype: "hybridauth-grid-services",
									anchor: "100%",
									cls: "main-wrapper",
									userId: \' . intval($user->get(\'id\')) . \'
								}]
							}]
						});
					});
				});
			</script>\'
			);
		}
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/hybridauth/elements/plugins/plugin.hybridauth.php',
    ),
    8 => 
    array (
      'id' => '8',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * phpThumbOf
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package phpthumbof
 */
/**
 * Handles cache management for phpthumbof filter
 *
 * @var \\modX $modx
 * @var array $scriptProperties
 *
 * @package phpthumbof
 */
if (empty($results)) $results = array();

switch ($modx->event->name) {
    case \'OnSiteRefresh\':
        if (!$modx->loadClass(\'modPhpThumb\',$modx->getOption(\'core_path\').\'model/phpthumb/\',true,true)) {
            $modx->log(modX::LOG_LEVEL_ERROR,\'[phpThumbOf] Could not load modPhpThumb class in plugin.\');
            return;
        }
        $assetsPath = $modx->getOption(\'phpthumbof.assets_path\',$scriptProperties,$modx->getOption(\'assets_path\').\'components/phpthumbof/\');
        $phpThumb = new modPhpThumb($modx);
        $cacheDir = $assetsPath.\'cache/\';

        /* clear local cache */
        if (!empty($cacheDir)) {
            /** @var DirectoryIterator $file */
            foreach (new DirectoryIterator($cacheDir) as $file) {
                if (!$file->isFile()) continue;
                @unlink($file->getPathname());
            }
        }

        /* if using amazon s3, clear our cache there */
        $useS3 = $modx->getOption(\'phpthumbof.use_s3\',$scriptProperties,false);
        if ($useS3) {
            $modelPath = $modx->getOption(\'phpthumbof.core_path\',null,$modx->getOption(\'core_path\').\'components/phpthumbof/\').\'model/\';
            /** @var modAws $modaws */
            $modaws = $modx->getService(\'modaws\',\'modAws\',$modelPath.\'aws/\',$scriptProperties);
            $s3path = $modx->getOption(\'phpthumbof.s3_path\',null,\'phpthumbof/\');
            
            $list = $modaws->getObjectList($s3path);
            if (!empty($list) && is_array($list)) {
                foreach ($list as $obj) {
                    if (empty($obj->Key)) continue;

                    $results[] = $modaws->deleteObject($obj->Key);
                }
            }
        }

        break;
}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    9 => 
    array (
      'id' => '9',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'miniShop2',
      'description' => '',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnManagerPageBeforeRender\':
		$modx23 = !empty($modx->version) && version_compare($modx->version[\'full_version\'], \'2.3.0\', \'>=\');
		$modx->controller->addHtml(\'<script type="text/javascript">
			Ext.onReady(function() {
				MODx.modx23 = \'.(int)$modx23.\';
			});
		</script>\');
		if (!$modx23) {
			$modx->controller->addCss(MODX_ASSETS_URL . \'components/minishop2/css/mgr/bootstrap.min.css\');
		}
		$modx->controller->addCss(MODX_ASSETS_URL . \'components/minishop2/css/mgr/main.css\');
		break;

	case \'OnHandleRequest\':
	case \'OnLoadWebDocument\':
		$isAjax = !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';

		if (empty($_REQUEST[\'ms2_action\']) || ($isAjax && $modx->event->name != \'OnHandleRequest\') || (!$isAjax && $modx->event->name != \'OnLoadWebDocument\')) {return;}
		$action = trim($_REQUEST[\'ms2_action\']);
		$ctx = !empty($_REQUEST[\'ctx\']) ? (string) $_REQUEST[\'ctx\'] : \'web\';
		if ($ctx != \'web\') {$modx->switchContext($ctx);}

		/* @var miniShop2 $miniShop2 */
		$miniShop2 = $modx->getService(\'minishop2\');
		$miniShop2->initialize($ctx, array(\'json_response\' => $isAjax));
		if (!($miniShop2 instanceof miniShop2)) {
			@session_write_close();
			exit(\'Could not initialize miniShop2\');
		}

		switch ($action) {
			case \'cart/add\': $response = $miniShop2->cart->add(@$_POST[\'id\'], @$_POST[\'count\'], @$_POST[\'options\']); break;
			case \'cart/change\': $response = $miniShop2->cart->change(@$_POST[\'key\'], @$_POST[\'count\']); break;
			case \'cart/remove\': $response = $miniShop2->cart->remove(@$_POST[\'key\']); break;
			case \'cart/clean\': $response = $miniShop2->cart->clean(); break;
			case \'cart/get\': $response = $miniShop2->cart->get(); break;
			case \'order/add\': $response = $miniShop2->order->add(@$_POST[\'key\'], @$_POST[\'value\']); break;
			case \'order/submit\': $response = $miniShop2->order->submit($_POST); break;
			case \'order/getcost\': $response = $miniShop2->order->getcost(); break;
			case \'order/getrequired\': $response = $miniShop2->order->getDeliveryRequiresFields(@$_POST[\'id\']); break;
			case \'order/clean\': $response = $miniShop2->order->clean(); break;
			case \'order/get\': $response = $miniShop2->order->get(); break;
			default:
				$message = ($_REQUEST[\'ms2_action\'] != $action)
					? \'ms2_err_register_globals\'
					: \'ms2_err_unknown\';
				$response = $miniShop2->error($message);
		}

		if ($isAjax) {
			@session_write_close();
			exit($response);
		}
		break;

	case \'OnWebPageInit\':
		/* @var msCustomerProfile $profile */
		$referrerVar = $modx->getOption(\'ms2_referrer_code_var\', null, \'msfrom\', true);
		$cookieVar = $modx->getOption(\'ms2_referrer_cookie_var\', null, \'msreferrer\', true);
		$cookieTime = $modx->getOption(\'ms2_referrer_time\', null, 86400 * 365, true);

		if (!$modx->user->isAuthenticated() && !empty($_REQUEST[$referrerVar])) {
			$code = trim($_REQUEST[$referrerVar]);
			if ($profile = $modx->getObject(\'msCustomerProfile\', array(\'referrer_code\' => $code))) {
				$referrer = $profile->id;
				setcookie($cookieVar, $referrer, time() + $cookieTime);
			}
		}
		elseif ($modx->user->isAuthenticated() && !empty($_COOKIE[$cookieVar])) {
			if ($profile = $modx->getObject(\'msCustomerProfile\', $modx->user->id)) {
				if (!$profile->get(\'referrer_id\') && $_COOKIE[$cookieVar] != $modx->user->id) {
					$profile->set(\'referrer_id\', $_COOKIE[$cookieVar]);
					$profile->save();
				}
			}
			setcookie($cookieVar, \'\', time() - $cookieTime);
		}
		break;

	case \'msOnChangeOrderStatus\':
		if (empty($status) || $status != 2) {return;}

		/** @var modUser $user */
		if ($user = $order->getOne(\'User\')) {
			$q = $modx->newQuery(\'msOrder\', array(\'type\' => 0));
			$q->innerJoin(\'modUser\', \'modUser\', array(\'`modUser`.`id` = `msOrder`.`user_id`\'));
			$q->innerJoin(\'msOrderLog\', \'msOrderLog\', array(
				\'`msOrderLog`.`order_id` = `msOrder`.`id`\',
				\'msOrderLog.action\' => \'status\',
				\'msOrderLog.entry\' => $status,
			));
			$q->where(array(\'msOrder.user_id\' => $user->id));
			$q->groupby(\'msOrder.user_id\');
			$q->select(\'SUM(`msOrder`.`cost`)\');
			if ($q->prepare() && $q->stmt->execute()) {
				$spent = $q->stmt->fetch(PDO::FETCH_COLUMN);
				/** @var msCustomerProfile $profile */
				if ($profile = $modx->getObject(\'msCustomerProfile\', $user->id)) {
					$profile->set(\'spent\', $spent);
					$profile->save();
				}
			}
		}
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/minishop2/elements/plugins/plugin.minishop2.php',
    ),
    10 => 
    array (
      'id' => '10',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'StercSEO',
      'description' => 'Plugin to render the seo tab and save all the data',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * StercSEO
 *
 * Copyright 2013 by Wieger Sloot, Sterc internet & marketing <modx@sterc.nl>
 *
 * This file is part of StercSEO.
 *
 * StercSEO is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * StercSEO is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * StercSEO; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package stercseo
 */
/**
 * StercSEO Plugin
 *
 *
 * Events:
 * OnDocFormPrerender,OnDocFormSave,OnHandleRequest,OnPageNotFound
 *
 * @author Wieger Sloot, Sterc internet & marketing <modx@sterc.nl>
 *
 * @package stercseo
 *
 */
$stercseo = $modx->getService(\'stercseo\',\'StercSEO\',$modx->getOption(\'stercseo.core_path\',null,$modx->getOption(\'core_path\').\'components/stercseo/\').\'model/stercseo/\',array());

if (!($stercseo instanceof StercSEO)) return;

switch ($modx->event->name) {
	case \'OnDocFormPrerender\':
		$resource =& $modx->event->params[\'resource\'];
		if($resource){
			$properties = $resource->getProperties(\'stercseo\');
		}
		if(empty($properties)){
			$properties = array(
				\'index\' => $modx->getOption(\'stercseo.index\', null, \'1\'),
				\'follow\' => $modx->getOption(\'stercseo.follow\', null, \'1\'),
				\'sitemap\' => $modx->getOption(\'stercseo.sitemap\', null, \'1\'),
				\'priority\' => $modx->getOption(\'stercseo.priority\', null, \'0.5\'),
				\'changefreq\' => $modx->getOption(\'stercseo.changefreq\', null, \'weekly\'),
				//\'urls\' => $modx->fromJSON($_POST[\'urls\'])
			);
		}
		//$output .= \'<div id="stercseo-box">\'.$errorMessage.$outputLanguageItems.\'</div>\';
		//$modx->event->output($output);
		$modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            StercSEO.config = \'.$modx->toJSON($stercseo->config).\';
            StercSEO.config.connector_url = "\'.$stercseo->config[\'connectorUrl\'].\'";
            StercSEO.record = \'.$modx->toJSON($properties).\';
        });
        </script>\');
	    $version = $modx->getVersionData();

		/* include CSS and JS*/
		if($version[\'version\'] == 2 && $version[\'major_version\'] == 3){
			$modx->regClientCSS($stercseo->config[\'cssUrl\'].\'stercseo23.css\');
	    }else{
	    	$modx->regClientCSS($stercseo->config[\'cssUrl\'].\'stercseo.css\');
	    }
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/stercseo.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/sections/resource.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.grid.js\');
		$modx->regClientStartupScript($stercseo->config[\'jsUrl\'].\'mgr/widgets/resource.vtabs.js\');

		//add lexicon
		$modx->controller->addLexiconTopic(\'stercseo:default\');

		break;

	case \'OnBeforeDocFormSave\':
	        $oldResource = ($mode == \'upd\') ? $modx->getObject(\'modResource\',$resource->get(\'id\')) : $resource;
			$properties = $oldResource->getProperties(\'stercseo\');
			if($_POST[\'urls\'] != \'false\' && isset($_POST[\'urls\'])){
				if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $modx->fromJSON($_POST[\'urls\'])
					);
				}
			}else{
			   	if($mode == \'upd\'){
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $properties[\'index\']),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $properties[\'follow\']),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $properties[\'sitemap\']),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $properties[\'priority\']),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $properties[\'changefreq\']),
						\'urls\' => $properties[\'urls\']
					);
				}else{
					$newProperties = array(
						\'index\' => (isset($_POST[\'index\']) ? $_POST[\'index\'] : $modx->getOption(\'stercseo.index\', null, \'1\')),
						\'follow\' => (isset($_POST[\'follow\']) ? $_POST[\'follow\'] : $modx->getOption(\'stercseo.follow\', null, \'1\')),
						\'sitemap\' => (isset($_POST[\'sitemap\']) ? $_POST[\'sitemap\'] : $modx->getOption(\'stercseo.sitemap\', null, \'1\')),
						\'priority\' => (isset($_POST[\'priority\']) ? $_POST[\'priority\'] : $modx->getOption(\'stercseo.priority\', null, \'0.5\')),
						\'changefreq\' => (isset($_POST[\'changefreq\']) ? $_POST[\'changefreq\'] : $modx->getOption(\'stercseo.changefreq\', null, \'weekly\')),
						\'urls\' => $properties[\'urls\']
					);
				}
			}
			if($oldResource->get(\'uri\') != $resource->get(\'uri\') && $oldResource->get(\'uri\') != \'\'){
//$modx->log(modX::LOG_LEVEL_ERROR, \'OLD: \'.$oldResource->get(\'uri\').\' - NEW: \'. $resource->get(\'uri\'));
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
			}

        	$resource->setProperties($newProperties,\'stercseo\');
		break;
	case \'OnLoadWebDocument\':
		if($modx->resource){
			$properties = $modx->resource->getProperties(\'stercseo\');
			$metaContent = array(\'noopd\', \'noydir\');
			if(!$properties[\'index\']) $metaContent[] = \'noindex\';
			if(!$properties[\'follow\']) $metaContent[] = \'nofollow\';
			$modx->setPlaceholder(\'seoTab.robotsTag\',implode(\',\', $metaContent));
		}
		break;

	case \'OnPageNotFound\':
		$url = $_REQUEST[$modx->getOption(\'request_param_alias\', null, \'q\')];
		$convertedUrl = str_replace(\'/\', \'_/\', ltrim($url, \'/\'));
		$w = array(
			\'properties:LIKE\' => \'%"\'.$convertedUrl.\'"%\'
		);
		if($modx->getOption(\'stercseo.context-aware-alias\', null, \'0\')){
			$w[\'context_key\'] = $modx->context->key;
		}
		$alreadyExists = $modx->getObject(\'modResource\', $w);
		if($alreadyExists){
			$id = $modx->makeUrl($alreadyExists->get(\'id\'));
			$modx->sendRedirect($id, 0, \'REDIRECT_HEADER\', \'HTTP/1.1 301 Moved Permanently\');
		}
		break;
	case \'OnResourceBeforeSort\':
		foreach($nodes as $node) {
			$oldResource = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource 	 = $modx->getObject(\'modResource\',$node[\'id\']);
			$resource->set(\'parent\', $node[\'parent\']);

			if($oldResource->get(\'uri\') != $resource->getAliasPath($resource->get(\'alias\')) && $oldResource->get(\'uri\') != \'\'){
				$newProperties = $oldResource->getProperties(\'stercseo\');
				$newProperties[\'urls\'][] = array(\'url\' => $oldResource->get(\'uri\'));
				$oldResource->setProperties($newProperties,\'stercseo\');
				$oldResource->save();
			}
		}
		break;
	case \'OnResourceDuplicate\':
		$props = $newResource->getProperties(\'stercseo\');
		$props[\'urls\'] = array();
		$newResource->setProperties($props,\'stercseo\');
		$newResource->save();
		break;

}
return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    11 => 
    array (
      'id' => '11',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'seoPro',
      'description' => 'seoPro 1.0.3-pl . SEO optimizing plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro))
  return \'\';

switch ($modx->event->name) {
  case \'OnDocFormRender\':
    $currClassKey = $resource->get(\'class_key\');
    $strFields = $modx->getOption(\'seopro.fields\', null, \'pagetitle:70,longtitle:70,description:155,alias:2023,menutitle:2023\');
    $arrFields = array();
    if (is_array(explode(\',\', $strFields))) {
      foreach (explode(\',\', $strFields) as $field) {
        list($fieldName, $fieldCount) = explode(\':\', $field);
        $arrFields[$fieldName] = $fieldCount;
      }
    } else {
      return \'\';
    }

    $keywords = \'\';
    $modx->controller->addLexiconTopic(\'seopro:default\');
    if ($mode == \'upd\') {
      $url = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', \'full\');
      $url = str_replace($resource->get(\'alias\'), \'<span id=\\"seopro-replace-alias\\">\' . $resource->get(\'alias\') . \'</span>\', $url);
      $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
      if ($seoKeywords) {
        $keywords = $seoKeywords->get(\'keywords\');
      }
    } else {
      if ($_REQUEST[\'id\']) {
        $url = $modx->makeUrl($_REQUEST[\'id\'], \'\', \'\', \'full\');
        $url .= \'/<span id=\\"seopro-replace-alias\\"></span>\';
      } else {
        $url = $modx->getOption(\'site_url\') . \'<span id=\\"seopro-replace-alias\\"></span>\';
      }
    }

    if ($_REQUEST[\'id\'] == $modx->getOption(\'site_start\')) {
      unset($arrFields[\'alias\']);
      unset($arrFields[\'menutitle\']);
    }


    $config = $seoPro->config;
    unset($config[\'resource\']);
    $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
		Ext.onReady(function() {
			seoPro.config = \' . $modx->toJSON($config) . \';
			seoPro.config.record = "\' . $keywords . \'";
			seoPro.config.values = {};
			seoPro.config.fields = "\' . implode(",", array_keys($arrFields)) . \'";
			seoPro.config.chars = \' . $modx->toJSON($arrFields) . \'
			seoPro.config.url = "\' . $url . \'";
		});
	</script>\');

    /* include CSS and JS*/
    $version = $modx->getVersionData();
    if($version[\'version\'] == 2 && $version[\'major_version\'] == 3){
     $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr23.css\');
    }else{
     $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr.css\');
    }
    $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/seopro.js??v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));
    $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/resource.js?v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));

    break;

  case \'OnDocFormSave\':
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $_POST[\'id\']));
    if (!$seoKeywords && isset($_POST[\'id\'])) {
      $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $_POST[\'id\']));
    }
    if($seoKeywords){
      $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
      $seoKeywords->save();
    }
    break;

  case \'onResourceDuplicate\':
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    if (!$seoKeywords) {
      $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
    }
    $newSeoKeywords = $modx->newObject(\'seoKeywords\');
    $newSeoKeywords->fromArray($seoKeywords->toArray());
    $newSeoKeywords->set(\'resource\', $newResource->get(\'id\'));
    $newSeoKeywords->save();
    break;

  case \'OnLoadWebDocument\':
    if ($modx->context->get(\'key\') == "mgr") {
      break;
    }
    $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $modx->resource->get(\'id\')));
    if ($seoKeywords) {
      $keyWords = $seoKeywords->get(\'keywords\');
      $modx->setPlaceholder(\'seoPro.keywords\', $keyWords);
    }
    $siteBranding = (boolean) $modx->getOption(\'seopro.allowbranding\', null, true);
    $siteDelimiter = $modx->getOption(\'seopro.delimiter\', null, \'/\');
    $siteUseSitename = (boolean) $modx->getOption(\'seopro.usesitename\', null, true);
    $siteID = $modx->resource->get(\'id\');
    $siteName = $modx->getOption(\'site_name\');
    $longtitle = $modx->resource->get(\'longtitle\');
    $pagetitle = $modx->resource->get(\'pagetitle\');
    $seoProTitle = array();
    if ($siteID == $modx->getOption(\'site_start\')) {
      $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $siteName;
    } else {
      $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $pagetitle;
      if ($siteUseSitename) {
        $seoProTitle[\'delimiter\'] = $siteDelimiter;
        $seoProTitle[\'sitename\'] = $siteName;
      }
    }
    $modx->setPlaceholder(\'seoPro.title\', implode(" ", $seoProTitle));
    if ($siteBranding) {
      $modx->regClientStartupHTMLBlock(\'<!-- This site is optimized with the Sterc seoPro plugin \' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\') . \' - http://www.sterc.nl/modx/seopro -->\');
    }
    break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    12 => 
    array (
      'id' => '12',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CKEditor',
      'description' => 'CKEditor WYSIWYG editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ckeditor/elements/plugins/ckeditor.plugin.php',
    ),
    13 => 
    array (
      'id' => '13',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'Comparison',
      'description' => '',
      'editor_type' => '0',
      'category' => '12',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnHandleRequest\':
		if (empty($_REQUEST[\'cmp_action\']) || empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) || $_SERVER[\'HTTP_X_REQUESTED_WITH\'] != \'XMLHttpRequest\') {
			return;
		}

		$modx->lexicon->load(\'comparison:default\');
		$response = array(\'success\' => true, \'message\' => \'\', \'data\' => array());

		$action = trim(strtolower($_REQUEST[\'cmp_action\']));
		switch ($action) {
			case \'add\':
			case \'remove\':
				$list = !empty($_REQUEST[\'list\'])
					? (string) $_REQUEST[\'list\']
					: \'default\';

				if ($list != \'default\' && !isset($_SESSION[\'Comparison\'][$modx->context->key][$list])) {
					$response[\'success\'] = false;
					$response[\'message\'] = $modx->lexicon(\'comparison_err_add_name\');
				}
				elseif (empty($_REQUEST[\'resource\']) || !$modx->getCount(\'modResource\', array(\'id\' => $_REQUEST[\'resource\'], \'published\' => 1, \'deleted\' => 0))) {
					$response[\'success\'] = false;
					$response[\'message\'] = $modx->lexicon(\'comparison_err_add_resource\');
				}
				else {
					$params = & $_SESSION[\'Comparison\'][$modx->context->key][$list];
					$id = $_REQUEST[\'resource\'];
					if ($action == \'add\') {
						if ((count($params[\'ids\']) + 1) > $params[\'maxItems\']) {
							$response[\'success\'] = false;
							$response[\'message\'] = $modx->lexicon(\'comparison_err_max_resource\');
						}
						else {
							$params[\'ids\'][$id] = true;
						}
					}
					else {
						unset($params[\'ids\'][$id]);
					}
					$response[\'data\'] = array(
						\'total\' => count($params[\'ids\']),
					);

					$link_params = array();
					if ($list != \'default\') {
						$link_params[\'list\'] = $list;
					}
					if (!empty($params[\'ids\'])) {
						$link_params[\'cmp_ids\'] = implode(\',\', array_keys($params[\'ids\']));
					}
					$response[\'data\'][\'link\'] = !empty($link_params[\'cmp_ids\'])
						? urldecode($modx->context->makeUrl($params[\'list_id\'], $link_params, $modx->getOption(\'link_tag_scheme\')))
						: \'#\';
				}
				break;
		}

		@session_write_close();
		exit($modx->toJSON($response));
		break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/comparison/elements/plugins/plugin.comparison.php',
    ),
    14 => 
    array (
      'id' => '14',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'MIGX',
      'description' => '',
      'editor_type' => '0',
      'category' => '13',
      'cache_type' => '0',
      'plugincode' => '$corePath = $modx->getOption(\'migx.core_path\',null,$modx->getOption(\'core_path\').\'components/migx/\');
$assetsUrl = $modx->getOption(\'migx.assets_url\', null, $modx->getOption(\'assets_url\') . \'components/migx/\');
switch ($modx->event->name) {
    case \'OnTVInputRenderList\':
        $modx->event->output($corePath.\'elements/tv/input/\');
        break;
    case \'OnTVInputPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/inputoptions/\');
        break;

        case \'OnDocFormPrerender\':
        $modx->controller->addCss($assetsUrl.\'css/mgr.css\');
        break; 
 
    /*          
    case \'OnTVOutputRenderList\':
        $modx->event->output($corePath.\'elements/tv/output/\');
        break;
    case \'OnTVOutputRenderPropertiesList\':
        $modx->event->output($corePath.\'elements/tv/properties/\');
        break;
    
    case \'OnDocFormPrerender\':
        $assetsUrl = $modx->getOption(\'colorpicker.assets_url\',null,$modx->getOption(\'assets_url\').\'components/colorpicker/\'); 
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            
        });
        </script>\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPicker.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorMenu.js\');
        $modx->regClientStartupScript($assetsUrl.\'sources/ColorPickerField.js\');		
        $modx->regClientCSS($assetsUrl.\'resources/css/colorpicker.css\');
        break;
     */
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    16 => 
    array (
      'id' => '16',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => '0',
      'category' => '14',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnSiteRefresh\':
		if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
			$modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
		}
		break;


	case \'OnDocFormSave\':
		/* @var Ticket $resource */
		if ($mode == \'new\' && $resource->class_key == "Ticket") {
			$modx->cacheManager->delete(\'tickets/latest.tickets\');
		}
		/* @var TicketsSection $resource */
		if ($mode == \'upd\' && $resource->class_key == \'TicketsSection\') {
			if (method_exists($resource, \'clearCache\')) {
				$resource->clearCache();
			}
		}
		break;


	case \'OnWebPagePrerender\':
		$output = &$modx->resource->_output;
		$output = str_replace(array(\'*{*{*{*{*{*\', \'*}*}*}*}*}*\'), array(\'[\', \']\'), $output);
		break;


	case \'OnPageNotFound\':
		// It is working only with friendly urls enabled
		$q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
		$matches = explode(\'/\', rtrim($q, \'/\'));
		if (count($matches) < 2) {
			return;
		}

		$ticket_uri = array_pop($matches);
		$section_uri = implode(\'/\', $matches) . \'/\';

		if ($section_id = $modx->findResource($section_uri)) {
			/** @var TicketsSection $section */
			if ($section = $modx->getObject(\'TicketsSection\', $section_id)) {
				if (is_numeric($ticket_uri)) {
					$ticket_id = $ticket_uri;
				}
				elseif (preg_match(\'/^\\d+/\', $ticket_uri, $tmp)) {
					$ticket_id = $tmp[0];
				}
				else {
					$properties = $section->getProperties(\'tickets\');
					if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
						$pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
						$pcre = preg_replace(\'/(\\%[a-z]+)/\', \'(?:.*?)\', $pcre);
						if (preg_match(\'/\' . $pcre . \'/\', $ticket_uri, $matches)) {
							$ticket_id = $matches[1];
						}
					}
				}
				if (!empty($ticket_id)) {
					if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
						if ($ticket->published) {
							$modx->sendRedirect($modx->makeUrl($ticket_id), array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
						}
						elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
							$modx->sendForward($unp_id);
						}
					}
				}
			}
		}
		break;


	case \'OnLoadWebDocument\':
		$authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
		$key = \'Tickets_User\';

		if (!$authenticated && !$modx->getOption(\'tickets.count_guests\', false)) {
			return;
		}

		if (empty($_COOKIE[$key])) {
			if (!empty($_SESSION[$key])) {
				$guest_key = $_SESSION[$key];
			}
			else {
				$guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
			}
			setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
		}
		else {
			$guest_key = $_COOKIE[$key];
		}

		if (empty($_SESSION[$key])) {
			$_SESSION[$key] = $guest_key;
		}

		if ($authenticated) {
			/** @var TicketAuthor $profile */
			if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
				$profile = $modx->newObject(\'TicketAuthor\');
				$modx->user->addOne($profile);
			}
			$profile->set(\'visitedon\', time());
			$profile->save();
		}
		break;


	case \'OnWebPageComplete\':
		/** @var Tickets $Tickets */
		$Tickets = $modx->getService(\'tickets\');
		$Tickets->logView($modx->resource->get(\'id\'));
		break;


	case \'OnUserSave\':
		/** @var modUser $user */
		if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
			$profile = $modx->newObject(\'TicketAuthor\');
			$user->addOne($profile);
			$profile->save();
		}
		break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
    ),
    17 => 
    array (
      'id' => '17',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'TinyMCE',
      'description' => 'TinyMCE 4.3.3-pl plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * TinyMCE RichText Editor Plugin
 *
 * Events: OnRichTextEditorInit, OnRichTextEditorRegister,
 * OnBeforeManagerPageInit, OnRichTextBrowserInit
 *
 * @author Jeff Whitfield <jeff@collabpad.com>
 * @author Shaun McCormick <shaun@collabpad.com>
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package tinymce
 * @subpackage build
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'TinyMCE\');
    return;
}
require_once $modx->getOption(\'tiny.core_path\',null,$modx->getOption(\'core_path\').\'components/tinymce/\').\'tinymce.class.php\';
$tiny = new TinyMCE($modx,$scriptProperties);

$useEditor = $tiny->context->getOption(\'use_editor\',false);
$whichEditor = $tiny->context->getOption(\'which_editor\',\'\');

/* Handle event */
switch ($modx->event->name) {
    case \'OnRichTextEditorInit\':
        if ($useEditor && $whichEditor == \'TinyMCE\') {
            unset($scriptProperties[\'chunk\']);
            if (isset($forfrontend) || $modx->context->get(\'key\') != \'mgr\') {
                $def = $tiny->context->getOption(\'cultureKey\',$tiny->context->getOption(\'manager_language\',\'en\'));
                $tiny->properties[\'language\'] = $modx->getOption(\'fe_editor_lang\',array(),$def);
                $tiny->properties[\'frontend\'] = true;
                unset($def);
            }
            /* commenting these out as it causes problems with richtext tvs */
            //if (isset($scriptProperties[\'resource\']) && !$resource->get(\'richtext\')) return;
            //if (!isset($scriptProperties[\'resource\']) && !$modx->getOption(\'richtext_default\',null,false)) return;
            $tiny->setProperties($scriptProperties);
            $html = $tiny->initialize();
            $modx->event->output($html);
            unset($html);
        }
        break;
    case \'OnRichTextBrowserInit\':
        if ($useEditor && $whichEditor == \'TinyMCE\') {
            $inRevo20 = (boolean)version_compare($modx->version[\'full_version\'],\'2.1.0-rc1\',\'<\');
            $modx->getVersionData();
            $source = $tiny->context->getOption(\'default_media_source\',null,1);
            
            $modx->controller->addHtml(\'<script type="text/javascript">var inRevo20 = \'.($inRevo20 ? 1 : 0).\';MODx.source = "\'.$source.\'";</script>\');
            
            $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/tiny_mce_popup.js\');
            if (file_exists($tiny->config[\'assetsPath\'].\'jscripts/tiny_mce/langs/\'.$tiny->properties[\'language\'].\'.js\')) {
                $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/langs/\'.$tiny->properties[\'language\'].\'.js\');
            } else {
                $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'jscripts/tiny_mce/langs/en.js\');
            }
            $modx->controller->addJavascript($tiny->config[\'assetsUrl\'].\'tiny.browser.js\');
            $modx->event->output(\'Tiny.browserCallback\');
        }
        return \'\';
        break;

   default: break;
}
return;',
      'locked' => '0',
      'properties' => 'a:39:{s:22:"accessibility_warnings";a:7:{s:4:"name";s:22:"accessibility_warnings";s:4:"desc";s:315:"If this option is set to true some accessibility warnings will be presented to the user if they miss specifying that information. This option is set to true by default, since we should all try to make this world a better place for disabled people. But if you are annoyed with the warnings, set this option to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"apply_source_formatting";a:7:{s:4:"name";s:23:"apply_source_formatting";s:4:"desc";s:229:"This option enables you to tell TinyMCE to apply some source formatting to the output HTML code. With source formatting, the output HTML code is indented and formatted. Without source formatting, the output HTML is more compact. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"button_tile_map";a:7:{s:4:"name";s:15:"button_tile_map";s:4:"desc";s:338:"If this option is set to true TinyMCE will use tiled images instead of individual images for most of the editor controls. This produces faster loading time since only one GIF image needs to be loaded instead of a GIF for each individual button. This option is set to false by default since it doesn\'t work with some DOCTYPE declarations. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:7:"cleanup";a:7:{s:4:"name";s:7:"cleanup";s:4:"desc";s:331:"This option enables or disables the built-in clean up functionality. TinyMCE is equipped with powerful clean up functionality that enables you to specify what elements and attributes are allowed and how HTML contents should be generated. This option is set to true by default, but if you want to disable it you may set it to false.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"cleanup_on_startup";a:7:{s:4:"name";s:18:"cleanup_on_startup";s:4:"desc";s:135:"If you set this option to true, TinyMCE will perform a HTML cleanup call when the editor loads. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"convert_fonts_to_spans";a:7:{s:4:"name";s:22:"convert_fonts_to_spans";s:4:"desc";s:348:"If you set this option to true, TinyMCE will convert all font elements to span elements and generate span elements instead of font elements. This option should be used in order to get more W3C compatible code, since font elements are deprecated. How sizes get converted can be controlled by the font_size_classes and font_size_style_values options.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"convert_newlines_to_brs";a:7:{s:4:"name";s:23:"convert_newlines_to_brs";s:4:"desc";s:128:"If you set this option to true, newline characters codes get converted into br elements. This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"convert_urls";a:7:{s:4:"name";s:12:"convert_urls";s:4:"desc";s:495:"This option enables you to control whether TinyMCE is to be clever and restore URLs to their original values. URLs are automatically converted (messed up) by default because the built-in browser logic works this way. There is no way to get the real URL unless you store it away. If you set this option to false it will try to keep these URLs intact. This option is set to true by default, which means URLs will be forced to be either absolute or relative depending on the state of relative_urls.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"dialog_type";a:7:{s:4:"name";s:11:"dialog_type";s:4:"desc";s:246:"This option enables you to specify how dialogs/popups should be opened. Possible values are "window" and "modal", where the window option opens a normal window and the dialog option opens a modal dialog. This option is set to "window" by default.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{i:0;s:6:"window";s:4:"text";s:6:"Window";}i:1;a:2:{i:0;s:5:"modal";s:4:"text";s:5:"Modal";}}s:5:"value";s:6:"window";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"directionality";a:7:{s:4:"name";s:14:"directionality";s:4:"desc";s:261:"This option specifies the default writing direction. Some languages (Like Hebrew, Arabic, Urdu...) write from right to left instead of left to right. The default value of this option is "ltr" but if you want to use from right to left mode specify "rtl" instead.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"ltr";s:4:"text";s:13:"Left to Right";}i:1;a:2:{s:5:"value";s:3:"rtl";s:4:"text";s:13:"Right to Left";}}s:5:"value";s:3:"ltr";s:7:"lexicon";N;s:4:"area";s:0:"";}s:14:"element_format";a:7:{s:4:"name";s:14:"element_format";s:4:"desc";s:210:"This option enables control if elements should be in html or xhtml mode. xhtml is the default state for this option. This means that for example &lt;br /&gt; will be &lt;br&gt; if you set this option to "html".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:5:"xhtml";s:4:"text";s:5:"XHTML";}i:1;a:2:{s:5:"value";s:4:"html";s:4:"text";s:4:"HTML";}}s:5:"value";s:5:"xhtml";s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"entity_encoding";a:7:{s:4:"name";s:15:"entity_encoding";s:4:"desc";s:70:"This option controls how entities/characters get processed by TinyMCE.";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:0:"";s:4:"text";s:4:"None";}i:1;a:2:{s:5:"value";s:5:"named";s:4:"text";s:5:"Named";}i:2;a:2:{s:5:"value";s:7:"numeric";s:4:"text";s:7:"Numeric";}i:3;a:2:{s:5:"value";s:3:"raw";s:4:"text";s:3:"Raw";}}s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"force_p_newlines";a:7:{s:4:"name";s:16:"force_p_newlines";s:4:"desc";s:147:"This option enables you to disable/enable the creation of paragraphs on return/enter in Mozilla/Firefox. The default value of this option is true. ";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"force_hex_style_colors";a:7:{s:4:"name";s:22:"force_hex_style_colors";s:4:"desc";s:277:"This option enables you to control TinyMCE to force the color format to use hexadecimal instead of rgb strings. It converts for example "color: rgb(255, 255, 0)" to "#FFFF00". This option is set to true by default since otherwice MSIE and Firefox would differ in this behavior.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"height";a:7:{s:4:"name";s:6:"height";s:4:"desc";s:38:"Sets the height of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"400px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:11:"indentation";a:7:{s:4:"name";s:11:"indentation";s:4:"desc";s:139:"This option allows specification of the indentation level for indent/outdent buttons in the UI. This defaults to 30px but can be any value.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"30px";s:7:"lexicon";N;s:4:"area";s:0:"";}s:16:"invalid_elements";a:7:{s:4:"name";s:16:"invalid_elements";s:4:"desc";s:163:"This option should contain a comma separated list of element names to exclude from the content. Elements in this list will removed when TinyMCE executes a cleanup.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:6:"nowrap";a:7:{s:4:"name";s:6:"nowrap";s:4:"desc";s:212:"This nowrap option enables you to control how whitespace is to be wordwrapped within the editor. This option is set to false by default, but if you enable it by setting it to true editor contents will never wrap.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:15:"object_resizing";a:7:{s:4:"name";s:15:"object_resizing";s:4:"desc";s:148:"This option gives you the ability to turn on/off the inline resizing controls of tables and images in Firefox/Mozilla. These are enabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"path_options";a:7:{s:4:"name";s:12:"path_options";s:4:"desc";s:119:"Sets a group of options. Note: This will override the relative_urls, document_base_url and remove_script_host settings.";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:11:"docrelative";s:4:"text";s:17:"Document Relative";}i:1;a:2:{s:5:"value";s:12:"rootrelative";s:4:"text";s:13:"Root Relative";}i:2;a:2:{s:5:"value";s:11:"fullpathurl";s:4:"text";s:13:"Full Path URL";}}s:5:"value";s:11:"docrelative";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_dateFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_dateFormat";s:4:"desc";s:53:"Formatting of dates when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%Y-%m-%d";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"plugin_insertdate_timeFormat";a:7:{s:4:"name";s:28:"plugin_insertdate_timeFormat";s:4:"desc";s:53:"Formatting of times when using the InsertDate plugin.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"%H:%M:%S";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"preformatted";a:7:{s:4:"name";s:12:"preformatted";s:4:"desc";s:231:"If you enable this feature, whitespace such as tabs and spaces will be preserved. Much like the behavior of a &lt;pre&gt; element. This can be handy when integrating TinyMCE with webmail clients. This option is disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:13:"relative_urls";a:7:{s:4:"name";s:13:"relative_urls";s:4:"desc";s:231:"If this option is set to true, all URLs returned from the file manager will be relative from the specified document_base_url. If it is set to false all URLs will be converted to absolute URLs. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:17:"remove_linebreaks";a:7:{s:4:"name";s:17:"remove_linebreaks";s:4:"desc";s:531:"This option controls whether line break characters should be removed from output HTML. This option is enabled by default because there are differences between browser implementations regarding what to do with white space in the DOM. Gecko and Safari place white space in text nodes in the DOM. IE and Opera remove them from the DOM and therefore the line breaks will automatically be removed in those. This option will normalize this behavior when enabled (true) and all browsers will have a white-space-stripped DOM serialization.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:18:"remove_script_host";a:7:{s:4:"name";s:18:"remove_script_host";s:4:"desc";s:221:"If this option is enabled the protocol and host part of the URLs returned from the file manager will be removed. This option is only used if the relative_urls option is set to false. This option is set to true by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"remove_trailing_nbsp";a:7:{s:4:"name";s:20:"remove_trailing_nbsp";s:4:"desc";s:392:"This option enables you to specify that TinyMCE should remove any traling &nbsp; characters in block elements if you start to write inside them. Paragraphs are default padded with a &nbsp; and if you write text into such paragraphs the space will remain. Setting this option to true will remove the space. This option is set to false by default since the cursor jumps a bit in Gecko browsers.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:4:"skin";a:7:{s:4:"name";s:4:"skin";s:4:"desc";s:330:"This option enables you to specify what skin you want to use with your theme. A skin is basically a CSS file that gets loaded from the skins directory inside the theme. The advanced theme that TinyMCE comes with has two skins, these are called "default" and "o2k7". We added another skin named "cirkuit" that is chosen by default.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"cirkuit";s:7:"lexicon";N;s:4:"area";s:0:"";}s:12:"skin_variant";a:7:{s:4:"name";s:12:"skin_variant";s:4:"desc";s:403:"This option enables you to specify a variant for the skin, for example "silver" or "black". "default" skin does not offer any variant, whereas "o2k7" default offers "silver" or "black" variants to the default one. For the "cirkuit" skin there\'s one variant named "silver". When creating a skin, additional variants may also be created, by adding ui_[variant_name].css files alongside the default ui.css.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:20:"table_inline_editing";a:7:{s:4:"name";s:20:"table_inline_editing";s:4:"desc";s:231:"This option gives you the ability to turn on/off the inline table editing controls in Firefox/Mozilla. According to the TinyMCE documentation, these controls are somewhat buggy and not redesignable, so they are disabled by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:22:"theme_advanced_disable";a:7:{s:4:"name";s:22:"theme_advanced_disable";s:4:"desc";s:111:"This option should contain a comma separated list of controls to disable from any toolbar row/panel in TinyMCE.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}s:19:"theme_advanced_path";a:7:{s:4:"name";s:19:"theme_advanced_path";s:4:"desc";s:331:"This option gives you the ability to enable/disable the element path. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to "true" by default. Setting this option to "false" will effectively hide the path tool, though it still takes up room in the Status Bar.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:32:"theme_advanced_resize_horizontal";a:7:{s:4:"name";s:32:"theme_advanced_resize_horizontal";s:4:"desc";s:319:"This option gives you the ability to enable/disable the horizontal resizing. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom" and when the theme_advanced_resizing is set to true. This option is set to true by default, allowing both resizing horizontal and vertical.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:23:"theme_advanced_resizing";a:7:{s:4:"name";s:23:"theme_advanced_resizing";s:4:"desc";s:216:"This option gives you the ability to enable/disable the resizing button. This option is only useful if the theme_advanced_statusbar_location option is set to "top" or "bottom". This option is set to false by default.";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"theme_advanced_statusbar_location";a:7:{s:4:"name";s:33:"theme_advanced_statusbar_location";s:4:"desc";s:257:"This option enables you to specify where the element statusbar with the path and resize tool should be located. This option can be set to "top" or "bottom". The default value is set to "top". This option can only be used when the theme is set to "advanced".";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:6:"bottom";s:7:"lexicon";N;s:4:"area";s:0:"";}s:28:"theme_advanced_toolbar_align";a:7:{s:4:"name";s:28:"theme_advanced_toolbar_align";s:4:"desc";s:187:"This option enables you to specify the alignment of the toolbar, this value can be "left", "right" or "center" (the default). This option can only be used when theme is set to "advanced".";s:4:"type";s:9:"textfield";s:7:"options";a:3:{i:0;a:2:{s:5:"value";s:6:"center";s:4:"text";s:6:"Center";}i:1;a:2:{s:5:"value";s:4:"left";s:4:"text";s:4:"Left";}i:2;a:2:{s:5:"value";s:5:"right";s:4:"text";s:5:"Right";}}s:5:"value";s:4:"left";s:7:"lexicon";N;s:4:"area";s:0:"";}s:31:"theme_advanced_toolbar_location";a:7:{s:4:"name";s:31:"theme_advanced_toolbar_location";s:4:"desc";s:191:"
This option enables you to specify where the toolbar should be located. This option can be set to "top" or "bottom" (the defualt). This option can only be used when theme is set to advanced.";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:5:"value";s:3:"top";s:4:"text";s:3:"Top";}i:1;a:2:{s:5:"value";s:6:"bottom";s:4:"text";s:6:"Bottom";}}s:5:"value";s:3:"top";s:7:"lexicon";N;s:4:"area";s:0:"";}s:5:"width";a:7:{s:4:"name";s:5:"width";s:4:"desc";s:32:"The width of the TinyMCE editor.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"95%";s:7:"lexicon";N;s:4:"area";s:0:"";}s:33:"template_selected_content_classes";a:7:{s:4:"name";s:33:"template_selected_content_classes";s:4:"desc";s:234:"Specify a list of CSS class names for the template plugin. They must be separated by spaces. Any template element with one of the specified CSS classes will have its content replaced by the selected editor content when first inserted.";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";N;s:4:"area";s:0:"";}}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    18 => 
    array (
      'id' => '18',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'OrderProperties',
      'description' => '',
      'editor_type' => '0',
      'category' => '8',
      'cache_type' => '0',
      'plugincode' => 'switch($modx->event->name) {
case \'msOnCreateOrder\':
$id = $msOrder->get(\'id\');
$address = $modx->getObject(\'msOrderAddress\', $id);
$json = json_encode($_POST);
$address->set(\'properties\', $json);
$address->save();
break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 9999,
          'policy' => 
          array (
            'mscategory_save' => true,
            'msproduct_save' => true,
            'msorder_save' => true,
            'msorder_view' => true,
            'msorder_list' => true,
            'mssetting_save' => true,
            'mssetting_view' => true,
            'mssetting_list' => true,
            'msproductfile_save' => true,
            'msproductfile_generate' => true,
            'msproductfile_list' => true,
          ),
        ),
        2 => 
        array (
          'principal' => 3,
          'authority' => 9999,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => false,
            'actions' => false,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => false,
            'content_types' => false,
            'countries' => true,
            'create' => false,
            'credits' => false,
            'customize_forms' => false,
            'dashboards' => false,
            'database' => false,
            'database_truncate' => false,
            'delete_category' => false,
            'delete_chunk' => false,
            'delete_context' => false,
            'delete_document' => false,
            'delete_eventlog' => false,
            'delete_plugin' => false,
            'delete_propertyset' => false,
            'delete_role' => false,
            'delete_snippet' => false,
            'delete_template' => false,
            'delete_tv' => false,
            'delete_user' => false,
            'directory_chmod' => false,
            'directory_create' => false,
            'directory_list' => false,
            'directory_remove' => false,
            'directory_update' => false,
            'edit_category' => false,
            'edit_chunk' => false,
            'edit_context' => false,
            'edit_document' => true,
            'edit_locked' => false,
            'edit_plugin' => false,
            'edit_propertyset' => false,
            'edit_role' => false,
            'edit_snippet' => false,
            'edit_template' => false,
            'edit_tv' => false,
            'edit_user' => false,
            'element_tree' => false,
            'empty_cache' => true,
            'error_log_erase' => false,
            'error_log_view' => false,
            'export_static' => false,
            'file_create' => false,
            'file_list' => false,
            'file_manager' => false,
            'file_remove' => false,
            'file_tree' => false,
            'file_update' => false,
            'file_upload' => false,
            'file_view' => false,
            'flush_sessions' => false,
            'frames' => false,
            'help' => false,
            'home' => false,
            'import_static' => false,
            'languages' => true,
            'lexicons' => false,
            'list' => false,
            'load' => false,
            'logout' => true,
            'logs' => false,
            'menus' => false,
            'menu_reports' => false,
            'menu_security' => false,
            'menu_site' => false,
            'menu_support' => false,
            'menu_system' => false,
            'menu_tools' => false,
            'menu_user' => false,
            'messages' => false,
            'namespaces' => false,
            'new_category' => false,
            'new_chunk' => false,
            'new_context' => false,
            'new_document' => true,
            'new_document_in_root' => false,
            'new_plugin' => false,
            'new_propertyset' => false,
            'new_role' => false,
            'new_snippet' => false,
            'new_static_resource' => true,
            'new_symlink' => false,
            'new_template' => false,
            'new_tv' => false,
            'new_user' => false,
            'new_weblink' => false,
            'packages' => false,
            'policy_delete' => false,
            'policy_edit' => false,
            'policy_new' => false,
            'policy_save' => false,
            'policy_template_delete' => false,
            'policy_template_edit' => false,
            'policy_template_new' => false,
            'policy_template_save' => false,
            'policy_template_view' => false,
            'policy_view' => false,
            'property_sets' => false,
            'providers' => false,
            'publish_document' => false,
            'purge_deleted' => true,
            'remove' => false,
            'remove_locks' => false,
            'resourcegroup_delete' => false,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => false,
            'resourcegroup_resource_edit' => false,
            'resourcegroup_resource_list' => false,
            'resourcegroup_save' => false,
            'resourcegroup_view' => false,
            'resource_duplicate' => false,
            'resource_quick_create' => false,
            'resource_quick_update' => false,
            'resource_tree' => false,
            'save' => false,
            'save_category' => false,
            'save_chunk' => false,
            'save_context' => false,
            'save_document' => true,
            'save_plugin' => false,
            'save_propertyset' => false,
            'save_role' => false,
            'save_snippet' => false,
            'save_template' => false,
            'save_tv' => false,
            'save_user' => false,
            'search' => true,
            'settings' => false,
            'sources' => false,
            'source_delete' => false,
            'source_edit' => false,
            'source_save' => false,
            'source_view' => false,
            'steal_locks' => false,
            'tree_show_element_ids' => false,
            'tree_show_resource_ids' => false,
            'undelete_document' => true,
            'unlock_element_properties' => false,
            'unpublish_document' => true,
            'usergroup_delete' => false,
            'usergroup_edit' => false,
            'usergroup_new' => false,
            'usergroup_save' => false,
            'usergroup_user_edit' => false,
            'usergroup_user_list' => false,
            'usergroup_view' => false,
            'view' => false,
            'view_category' => false,
            'view_chunk' => false,
            'view_context' => false,
            'view_document' => true,
            'view_element' => false,
            'view_eventlog' => false,
            'view_offline' => false,
            'view_plugin' => false,
            'view_propertyset' => false,
            'view_role' => false,
            'view_snippet' => false,
            'view_sysinfo' => false,
            'view_template' => false,
            'view_tv' => false,
            'view_unpublished' => false,
            'view_user' => false,
            'workspaces' => false,
          ),
        ),
      ),
    ),
  ),
);