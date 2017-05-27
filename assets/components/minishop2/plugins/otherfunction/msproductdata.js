miniShop2.plugin.otherfunction = {
	getFields: function(config) {
		return {
			otherfunction: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_otherfunction_help')}
		}
	}
	,getColumns: function() {
		return {
			otherfunction: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};