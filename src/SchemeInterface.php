<?php
declare(strict_types = 1);

namespace SimpleCrud;

interface SchemeInterface
{
    /**
     * Return the names of all tables
     */
    public function getTables(): array;

    /**
     * Return the field info of a table using an array with the following keys:
     * - name
     * - type
     * - null
     * - default
     * - unsigned
     * - length
     * - values
     */
    public function getTableFields(string $table): array;
}
