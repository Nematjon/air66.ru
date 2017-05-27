miniShop2.plugin.typecond = {
	getFields: function(config) {
		return {
			typecond: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_typecond_help')}
		}
	}
	,getColumns: function() {
		return {
			typecond: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};