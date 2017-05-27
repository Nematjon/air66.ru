miniShop2.plugin.typetov = {
	getFields: function(config) {
		return {
			typetov: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_typetov_help')}
		}
	}
	,getColumns: function() {
		return {
			typetov: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};