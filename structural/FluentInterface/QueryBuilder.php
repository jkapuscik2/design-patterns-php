<?php

namespace Structural\FluentInterface;

class QueryBuilder
{

    private string $query = "";

    public function select(array $fields = []): QueryBuilder
    {
        $this->query .= sprintf("SELECT %s ", sizeof($fields) ? implode(", ", $fields) : "*");

        return $this;
    }

    public function from(string $tableName): QueryBuilder
    {
        $this->query .= " FROM {$tableName} ";

        return $this;
    }

    public function where(array $conditions): QueryBuilder
    {
        $this->query .= sprintf("WHERE %s ", implode(" AND ", $conditions));

        return $this;
    }

    public function offset(int $offset): QueryBuilder
    {
        $this->query .= "OFFSET {$offset} ";

        return $this;
    }

    public function limit(int $limit): QueryBuilder
    {
        $this->query .= "LIMIT {$limit} ";

        return $this;
    }

    public function orderBy(string $orderRule): QueryBuilder
    {
        $this->query .= "ORDER BY {$orderRule} ";

        return $this;
    }

    public function getQuery() : string
    {
        return $this->query;
    }
}