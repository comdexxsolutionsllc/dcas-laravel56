<?php

/**
 * @param       $class
 * @param array $attributes
 * @param null  $times
 *
 * @return mixed
 */
function create($class, $attributes = [], $times = null)
{
    return factory($class, $times)->create($attributes);
}

/**
 * @param       $class
 * @param array $attributes
 * @param null  $times
 *
 * @return mixed
 */
function make($class, $attributes = [], $times = null)
{
    return factory($class, $times)->make($attributes);
}

/**
 * @param int $length
 *
 * @return bool|string
 */
function generateApiKey($length = 32)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $multiplier = ceil($length / strlen($chars));

    return substr(str_shuffle(str_repeat($chars, $multiplier)), 1, $length);
}
