miniShop2.plugin.avail = {
	getFields: function(config) {
		return {
			avail: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_avail_help')}
		}
	}
	,getColumns: function() {
		return {
			avail: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};