<?php

if (! function_exists('cart')) {
    /**
     * Provides a convenience interface to the Cart service.
     *
     * @return void
     */
    function cart()
    {
        return service('cart');
    }
}
