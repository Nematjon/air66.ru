miniShop2.plugin.faza = {
	getFields: function(config) {
		return {
			faza: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_faza_help')}
		}
	}
	,getColumns: function() {
		return {
			faza: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};