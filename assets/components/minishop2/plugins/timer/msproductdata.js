miniShop2.plugin.timer = {
	getFields: function(config) {
		return {
			timer: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_timer_help')}
		}
	}
	,getColumns: function() {
		return {
			timer: {width:50, sortable:true, editor: {xtype:'textfield'}}
		}
	}
};