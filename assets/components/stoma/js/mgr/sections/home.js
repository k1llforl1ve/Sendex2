Stoma.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'stoma-panel-home',
            renderTo: 'stoma-panel-home-div'
        }]
    });
    Stoma.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(Stoma.page.Home, MODx.Component);
Ext.reg('stoma-page-home', Stoma.page.Home);