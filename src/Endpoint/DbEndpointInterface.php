<?php

namespace Ripoo\Endpoint;

use Ripoo\Client;
use Ripcord\Client\Client as RipcorClient;

/**
 * @author Thomas Bondois
 * @see https://github.com/odoo/odoo/blob/11.0/odoo/service/db.py
 */
interface DbEndpointInterface
{
    /**
     * @return string
     */
    public function server_version() :string;

    /**
     * @param $db_name
     * @return bool
     */
    public function db_exist($db_name) : bool;

    /**
     * @param bool $document
     * @return array
     */
    public function list($document = false) : array;

    /**
     * @return array
     */
    public function list_lang() : array;

    /**
     * @return array
     */
    public function list_countries() : array;

} // end class
