miniShop2.plugin.dopinfo = {
	getFields: function(config) {
		return {
			dopinfo: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_dopinfo_help')}
		}
	}
	,getColumns: function() {
		return {
			dopinfo: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};