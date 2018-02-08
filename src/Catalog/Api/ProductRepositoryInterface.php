<?php

namespace Credevlab\CommerceConnector\Catalog\Api;

interface ProductRepositoryInterface{

    /**
     * Get info about product by product SKU
     *
     * @param string $sku
     * @param bool $editMode
     * @param bool $forceReload
     * @return \Credevlab\CommerceConnector\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($sku, $editMode = false, $forceReload = false);

    /**
     * Get product list
     *
     * @param \Credevlab\CommerceConnector\Catalog\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Catalog\Api\Data\ProductSearchResultsInterface
     */
    public function getList(\Credevlab\CommerceConnector\Catalog\Api\SearchCriteriaInterface $searchCriteria);

}