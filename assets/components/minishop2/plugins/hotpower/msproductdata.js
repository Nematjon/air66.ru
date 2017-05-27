miniShop2.plugin.hotpower = {
	getFields: function(config) {
		return {
			hotpower: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_hotpower_help')}
		}
	}
	,getColumns: function() {
		return {
			hotpower: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};