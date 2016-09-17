<?php

class StomaItemDisableProcessor extends modObjectProcessor
{
    public $objectType = 'StomaItem';
    public $classKey = 'StomaItem';
    public $languageTopics = array('stoma');
    //public $permission = 'save';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('stoma_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var StomaItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('stoma_item_err_nf'));
            }

            $object->set('active', false);
            $object->save();
        }

        return $this->success();
    }

}

return 'StomaItemDisableProcessor';
