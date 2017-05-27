miniShop2.plugin.maxflow = {
	getFields: function(config) {
		return {
			maxflow: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_maxflow_help')}
		}
	}
	,getColumns: function() {
		return {
			maxflow: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};