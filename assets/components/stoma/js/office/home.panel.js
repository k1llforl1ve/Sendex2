Stoma.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'stoma-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('stoma_items'),
                layout: 'anchor',
                items: [{
                    html: _('stoma_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'stoma-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    Stoma.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(Stoma.panel.Home, MODx.Panel);
Ext.reg('stoma-panel-home', Stoma.panel.Home);
