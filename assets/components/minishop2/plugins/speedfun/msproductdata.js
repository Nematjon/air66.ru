miniShop2.plugin.speedfun = {
	getFields: function(config) {
		return {
			speedfun: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_speedfun_help')}
		}
	}
	,getColumns: function() {
		return {
			speedfun: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};