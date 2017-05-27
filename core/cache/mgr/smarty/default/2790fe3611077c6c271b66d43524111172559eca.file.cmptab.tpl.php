<?php /* Smarty version Smarty-3.0.4, created on 2015-07-06 14:10:19
         compiled from "/home/u40275/air66ru/www/core/components/migx/templates/mgr/cmptab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1844506422559a621b0bdcd6-19006049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2790fe3611077c6c271b66d43524111172559eca' => 
    array (
      0 => '/home/u40275/air66ru/www/core/components/migx/templates/mgr/cmptab.tpl',
      1 => 1435241873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844506422559a621b0bdcd6-19006049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

{
    title: '<?php echo $_smarty_tpl->getVariable('cmptabcaption')->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->getVariable('cmptabdescription')->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
',
        preventRender: true,
        id: 'modx-grid-multitvdbgrid-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
',
        configs: '<?php echo $_smarty_tpl->getVariable('configs')->value;?>
',
        columns: Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('columns')->value;?>
'),
        pathconfigs: Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('pathconfigs')->value;?>
'),
        fields: Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('fields')->value;?>
'),
        wctx: '<?php echo $_smarty_tpl->getVariable('myctx')->value;?>
',
        url: Migx.config.connectorUrl,
        auth: '<?php echo $_smarty_tpl->getVariable('auth')->value;?>
',
        resource_id: '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
',
        co_id: '<?php echo $_smarty_tpl->getVariable('connected_object_id')->value;?>
',
        pageSize: 10,
        object_id: '<?php echo $_smarty_tpl->getVariable('object_id')->value;?>
',
        bwrapCfg: {
            cls: 'main-wrapper'
        }       
    }]
}
