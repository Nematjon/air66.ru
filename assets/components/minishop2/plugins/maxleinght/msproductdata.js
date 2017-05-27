miniShop2.plugin.maxleinght = {
	getFields: function(config) {
		return {
			maxleinght: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_maxleinght_help')}
		}
	}
	,getColumns: function() {
		return {
			maxleinght: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};