<?php

class DbTable_DistanceMatrix extends Zend_Db_Table_Abstract {

    protected $_name = 'distance_matrix';

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

    public function create($duration, $distance) {

        $id = $this->insert(array(
            'addresses' => $addresses,
        ));

    }

}
