<?php
declare(strict_types=1);

namespace TBolier\RethinkQL\Query;

interface DatabaseInterface
{
    /**
     * @param string $name
     * @return DatabaseInterface
     */
    public function dbCreate(string $name): DatabaseInterface;

    /**
     * @param string $name
     * @return DatabaseInterface
     */
    public function dbDrop(string $name): DatabaseInterface;

    /**
     * @return DatabaseInterface
     */
    public function dbList(): DatabaseInterface;

    /**
     * @return DatabaseInterface
     */
    public function tableList(): DatabaseInterface;

    /**
     * @param string $name
     * @return DatabaseInterface
     */
    public function tableCreate(string $name): DatabaseInterface;

    /**
     * @param string $name
     * @return DatabaseInterface
     */
    public function tableDrop(string $name): DatabaseInterface;

    /**
     * @return array
     */
    public function run(): array;
}