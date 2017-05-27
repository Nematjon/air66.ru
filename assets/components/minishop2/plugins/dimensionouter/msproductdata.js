miniShop2.plugin.dimensionouter = {
	getFields: function(config) {
		return {
			dimensionouter: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_dimensionouter_help')}
		}
	}
	,getColumns: function() {
		return {
			dimensionouter: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};