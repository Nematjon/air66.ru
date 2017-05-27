miniShop2.plugin.pyltdu = {
	getFields: function(config) {
		return {
			pyltdu: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_pyltdu_help')}
		}
	}
	,getColumns: function() {
		return {
			pyltdu: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};