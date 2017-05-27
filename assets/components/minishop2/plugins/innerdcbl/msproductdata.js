miniShop2.plugin.innerdcbl = {
	getFields: function(config) {
		return {
			innerdcbl: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_innerdcbl_help')}
		}
	}
	,getColumns: function() {
		return {
			innerdcbl: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};