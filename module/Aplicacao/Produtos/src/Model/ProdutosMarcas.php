<?php

namespace Aplicacao\Produtos\Model;

use ZeDb\Model;

class ProdutosMarcas extends Model {
    
    public function __construct($options = null) {
        $this->tableName = __CLASS__;
        parent::__construct('id', $options);
    }
}