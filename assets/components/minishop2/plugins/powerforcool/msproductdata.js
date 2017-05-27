miniShop2.plugin.powerforcool = {
	getFields: function(config) {
		return {
			powerforcool: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_powerforcool_help')}
		}
	}
	,getColumns: function() {
		return {
			powerforcool: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};