<?php

namespace Credevlab\CommerceConnector\Catalog\Api\Data;


interface ProductInterface
{
    /**
     * Constants defined for keys of  data array
     */
    const SKU = 'sku';
    const NAME = 'name';
    const PRICE = 'price';
    const STATUS = 'status';
    const TYPE = 'product_type';

    /**
     * Product id
     *
     * @return int|null
     */
    public function getId();
    /**
     * Set product id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Product sku
     *
     * @return string
     */
    public function getSku();

    /**
     * Set product sku
     *
     * @param string $sku
     * @return $this
     */
    public function setSku($sku);

    /**
     * Product name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set product name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);


}