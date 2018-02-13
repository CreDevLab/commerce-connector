<?php

namespace Credevlab\CommerceConnector\Catalog\Api;


interface CatalogRepositoryInterface
{

    public function getCategoryRepository();

    public function getProductRepository();

}