<?php
/**
 * Created by PhpStorm.
 * User: aman.srivastava
 * Date: 08/02/18
 * Time: 3:04 PM
 */

namespace Credevlab\CommerceConnector\Catalog\Api;


interface CategoryRepositoryInterface
{
    public function get($categoryId);

    public function getTree();

}