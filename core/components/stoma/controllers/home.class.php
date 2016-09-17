<?php

/**
 * The home manager controller for Stoma.
 *
 */
class StomaHomeManagerController extends modExtraManagerController
{
    /** @var Stoma $Stoma */
    public $Stoma;


    /**
     *
     */
    public function initialize()
    {
        $path = $this->modx->getOption('stoma_core_path', null,
                $this->modx->getOption('core_path') . 'components/stoma/') . 'model/stoma/';
        $this->Stoma = $this->modx->getService('stoma', 'Stoma', $path);
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return array('stoma:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('stoma');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->Stoma->config['cssUrl'] . 'mgr/main.css');
        $this->addCss($this->Stoma->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
        $this->addJavascript($this->Stoma->config['jsUrl'] . 'mgr/stoma.js');
        $this->addJavascript($this->Stoma->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->Stoma->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->Stoma->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->Stoma->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->Stoma->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->Stoma->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        Stoma.config = ' . json_encode($this->Stoma->config) . ';
        Stoma.config.connector_url = "' . $this->Stoma->config['connectorUrl'] . '";
        Ext.onReady(function() {
            MODx.load({ xtype: "stoma-page-home"});
        });
        </script>
        ');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->Stoma->config['templatesPath'] . 'home.tpl';
    }
}