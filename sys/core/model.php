<?php

namespace sys\core;

use \sys\lib\Provider as Provider;

class Model extends Provider {
    public function test(){
        print_r($this->conn);
    }

    public function execute_dml_query($sql, $params = []){
        if(count($params) === 0){
            $this->conn->query($sql);
        }
        else {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
        }
    }

    public function execute_select_query($sql, $params = []){
        if(count($params) === 0){
            $this->conn->query($sql);
        }
        else {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
        }
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}