<?php

namespace Modules\Support\Classes;

/**
 * Class ServiceLevelAgreement
 *
 * @package Modules\Support\Classes
 */
class ServiceLevelAgreement
{

    /**
     * @var array
     */
    protected $matrix = [// Department, firstResponse, resolve, close, exceptions.
    ];

    /**
     * @param $matrix
     */
    public function search($matrix)
    {
        //return $matrix->search($this->department) ? $matrix : null;
    }
}
