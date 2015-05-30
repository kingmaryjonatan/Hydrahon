<?php namespace ClanCats\Hydrahon;

/**
 * SQL query object
 ** 
 * @package         Hydrahon
 * @copyright       2015 Mario Döring
 */

use ClanCats\Hydrahon\BaseQuery;

class Sql extends BaseQuery
{
    /**
     * Create a new select sql query
     *
     * @param string|array                              $fields
     * @return ClanCats\Hydrahon\Query\Sql\Select
     */
    public function select($fields = null)
    {
        return $this->createSubQuery('ClanCats\\Hydrahon\\Query\\Sql\\Select')->select($fields);
    }
}