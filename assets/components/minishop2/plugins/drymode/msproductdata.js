miniShop2.plugin.drymode = {
	getFields: function(config) {
		return {
			drymode: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_drymode_help')}
		}
	}
	,getColumns: function() {
		return {
			drymode: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};