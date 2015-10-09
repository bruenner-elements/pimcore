<?php
/**
 * Pimcore
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2009-2015 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GNU General Public License version 3 (GPLv3)
 */


interface OnlineShop_Framework_Pricing_Condition_ICatalogProduct extends OnlineShop_Framework_Pricing_ICondition
{
    /**
     * @param OnlineShop_Framework_AbstractProduct[] $products
     *
     * @return OnlineShop_Framework_Impl_Pricing_Condition_CatalogProduct
     */
    public function setProducts(array $products);

    /**
     * @return OnlineShop_Framework_AbstractProduct[]
     */
    public function getProducts();
}