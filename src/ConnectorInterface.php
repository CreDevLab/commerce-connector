<?php
/**
 * Created by PhpStorm.
 * User: aman.srivastava
 * Date: 08/02/18
 * Time: 2:10 PM
 */

namespace Credevlab\CommerceConnector;


interface ConnectorInterface
{

    public function init($params = [], $additional = []);
}