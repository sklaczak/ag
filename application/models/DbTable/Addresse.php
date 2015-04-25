<?php

class DbTable_Addresse extends Zend_Db_Table_Abstract {

    protected $_name = 'addresses';

    public function getListForSessionQuery() {
        $query = $this->select();
        $query->setIntegrityCheck(false);
        $query->from(array("order" => "order"));
        $query->where("order.session_id = ?", Zend_Session::getId());
        $query->order('order.id');
        return $query;
    }

    public function getListForSession() {
        return $this->fetchAll($this->getListForSessionQuery())->toArray();
    }

    public function create($addresses) {

        $orderId = $this->insert(array(
            'addresses' => $addresses,
        ));

    }

}
