miniShop2.plugin.dopfunction = {
	getFields: function(config) {
		return {
			dopfunction: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_dopfunction_help')}
		}
	}
	,getColumns: function() {
		return {
			dopfunction: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};