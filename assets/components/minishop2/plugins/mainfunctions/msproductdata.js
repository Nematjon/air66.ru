miniShop2.plugin.mainfunctions = {
	getFields: function(config) {
		return {
			mainfunctions: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_mainfunctions_help')}
		}
	}
	,getColumns: function() {
		return {
			mainfunctions: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};