<?php

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