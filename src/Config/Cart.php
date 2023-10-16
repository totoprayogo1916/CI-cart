<?php

namespace Totoprayogo1916\CodeIgniter\Config;

use CodeIgniter\Config\BaseConfig;

class Cart extends BaseConfig
{
    /**
     * These are the regular expression rules that we use to validate the product ID and product name
     * alpha-numeric, dashes, underscores, or periods
     *
     * @var string
     */
    public $product_id_rules = '\.a-z0-9_-';

    /**
     * These are the regular expression rules that we use to validate the product ID and product name
     * alpha-numeric, dashes, underscores, colons or periods
     *
     * @var string
     */
    public $product_name_rules = '\w \-\.\:';

    /**
     * only allow safe product names
     *
     * @var bool
     */
    public $product_name_safe = true;
}
