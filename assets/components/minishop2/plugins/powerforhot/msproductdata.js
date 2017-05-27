miniShop2.plugin.powerforhot = {
	getFields: function(config) {
		return {
			powerforhot: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_powerforhot_help')}
		}
	}
	,getColumns: function() {
		return {
			powerforhot: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};