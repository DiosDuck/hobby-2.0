<?php

namespace SqlQuery\Property;

use SqlQuery\Property\Constraint;

class ForeignKeyConstraint extends Constraint {
    private string $column;
    private string $table;
    private string $key;

    public function __construct(string $column, string $table, string $key) {
        $this->column = $column;
        $this->table = $table;
        $this->key = $key;
    }

    public function getConstraint() : string {
        return 'FOREIGN KEY(' . $this->column . ') REFERENCES ' . $this->table . '(' . $this->key . ')'; 
    }
}