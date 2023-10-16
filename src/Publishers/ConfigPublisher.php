<?php

namespace Totoprayogo1916\CodeIgniter\Publishers;

use CodeIgniter\Publisher\Publisher;

class ConfigPublisher extends Publisher
{
    /**
     * Tell Publisher where to get the files.
     * Since we will use Composer to download
     * them we point to the "vendor" directory.
     *
     * @var string
     */
    protected $source = VENDORPATH . 'totoprayogo1916/codeigniter4-cart/src/Config/';

    /**
     * Target to save
     *
     * @var string
     */
    protected $destination = APPPATH . 'Config';

    /**
     * Use the "publish" method to indicate that this
     * class is ready to be discovered and automated.
     */
    public function publish(): bool
    {
        return $this
            ->addPath('Cart.php')
            ->copy(false);
    }
}
