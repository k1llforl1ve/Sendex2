Ext.onReady(function () {
    Stoma.config.connector_url = OfficeConfig.actionUrl;

    var grid = new Stoma.panel.Home();
    grid.render('office-stoma-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});