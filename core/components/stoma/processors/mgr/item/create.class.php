<?php

class StomaItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'StomaItem';
    public $classKey = 'StomaItem';
    public $languageTopics = array('stoma');
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('stoma_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->modx->error->addField('name', $this->modx->lexicon('stoma_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'StomaItemCreateProcessor';