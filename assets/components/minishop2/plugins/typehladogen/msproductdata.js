miniShop2.plugin.typehladogen = {
	getFields: function(config) {
		return {
			typehladogen: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_typehladogen_help')}
		}
	}
	,getColumns: function() {
		return {
			typehladogen: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};