var Stoma = function (config) {
    config = config || {};
    Stoma.superclass.constructor.call(this, config);
};
Ext.extend(Stoma, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('stoma', Stoma);

Stoma = new Stoma();