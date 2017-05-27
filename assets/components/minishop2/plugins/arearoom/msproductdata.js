miniShop2.plugin.arearoom = {
	getFields: function(config) {
		return {
			arearoom: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_arearoom_help')}
		}
	}
	,getColumns: function() {
		return {
			arearoom: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};