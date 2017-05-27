miniShop2.plugin.dimensioninner = {
	getFields: function(config) {
		return {
			dimensioninner: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_dimensioninner_help')}
		}
	}
	,getColumns: function() {
		return {
			dimensioninner: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};