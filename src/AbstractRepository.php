<?php
/**
 * Created by PhpStorm.
 * User: aman.srivastava
 * Date: 08/02/18
 * Time: 4:07 PM
 */

namespace Credevlab\CommerceConnector;


class AbstractRepository
{
    protected $_connection;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->setConnection($client);
    }

    /**
     * @param mixed $connection
     */
    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->_connection;
    }

}