<?php
namespace Credevlab\CommerceConnector;

use GuzzleHttp\Client;

class Connector implements ConnectorInterface
{
    protected $base_url = NULL;

    protected $connection;

    protected $token;

    protected $_catalogRepository;

    public function __construct($params)
    {
        $this->init($params, []);
    }

    public function init($params = [], $additional = [])
    {

        $this->setBaseUrl($params['base_url']);
        $this->setToken($params['token']);
        $this->createConnection();
        return $this;
    }

    public function getCatalog($connection = NULL){
        if($connection === NULL){
            $connection = $this->getConnection();
        }
        //return new

    }

    public function createConnection(){
        $client = new Client([
            'base_uri' => $this->getBaseUrl(),
            'headers' => [
                'cache-control' => 'no-cache',
                'authorization' => 'Bearer '.$this->getToken(),
                'content-type' => 'application/json'
            ]]);
        $this->setConnection($client);
    }

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param mixed $connection
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * @param mixed $base_url
     */
    public function setBaseUrl($base_url)
    {
        if($this->getBaseUrl() === NULL){
            //TODO Throw base_url required exception;
        }
        $this->base_url = $base_url;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

}