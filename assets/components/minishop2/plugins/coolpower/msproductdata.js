miniShop2.plugin.coolpower = {
	getFields: function(config) {
		return {
			coolpower: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_coolpower_help')}
		}
	}
	,getColumns: function() {
		return {
			coolpower: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};