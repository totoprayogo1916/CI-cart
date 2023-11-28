<?php

if (! function_exists('cart')) {
    /**
     * Provides a convenience interface to the Cart service.
     *
     * @return void|object|array
     */
    function cart()
    {
        return service('cart');
    }
}
