<?php
namespace Credevlab\CommerceConnector\Catalog\Api\Data;


interface CategoryInterface
{
    const ID = "id";
    const STATUS = "status";
    const NAME = "name";
    const parent_id = "parent_id";

    public function getId();

    public function setId($id);

    public function getname();

    public function setName($name);

}