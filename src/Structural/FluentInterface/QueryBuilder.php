<?php
declare(strict_types=1);

namespace App\Structural\FluentInterface;

class QueryBuilder
{
    private string $query = "";

    public function select(array $fields = []): static
    {
        $this->query .= sprintf("SELECT %s ", sizeof($fields) ? implode(", ", $fields) : "*");

        return $this;
    }

    public function from(string $tableName): static
    {
        $this->query .= " FROM {$tableName} ";

        return $this;
    }

    public function where(array $conditions): static
    {
        $this->query .= sprintf("WHERE %s ", implode(" AND ", $conditions));

        return $this;
    }

    public function offset(int $offset): static
    {
        $this->query .= "OFFSET {$offset} ";

        return $this;
    }

    public function limit(int $limit): static
    {
        $this->query .= "LIMIT {$limit} ";

        return $this;
    }

    public function orderBy(string $orderRule): static
    {
        $this->query .= "ORDER BY {$orderRule} ";

        return $this;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
