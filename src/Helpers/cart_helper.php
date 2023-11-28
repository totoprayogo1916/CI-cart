<?php

if (! function_exists('cart')) {
    /**
     * Provides a convenience interface to the Cart service.
     *
     * @return array|object|void
     */
    function cart()
    {
        return service('cart');
    }
}
