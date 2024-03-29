<?php
namespace Lorenzo\ProductBy\Api;

interface ProductByInterface
{
 /**
  * GET product identified by its URL key
  *
  * @api
  * @param string $urlKey
  * @return \Magento\Catalog\Api\Data\ProductInterface
  * @throws \Magento\Framework\Exception\NoSuchEntityException
  */
 public function getProductByUrl($urlKey);

 /**
  * GET product identified by its id
  *
  * @api
  * @param string $id
  * @return \Magento\Catalog\Api\Data\ProductInterface
  * @throws \Magento\Framework\Exception\NoSuchEntityException
  */
 public function getProductById($id);
 
}
