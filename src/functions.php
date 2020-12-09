<?php

if (!function_exists('p')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function p()
    {
        array_map(function ($x) {
            dump($x);
        }, func_get_args());
        die;
    }
}
