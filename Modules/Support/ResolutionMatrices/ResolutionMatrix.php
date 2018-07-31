<?php

namespace Modules\Support\Classes;

use Illuminate\Support\Collection;

/**
 * Class ResolutionMatrix
 *
 * @package Modules\Support\Classes
 */
class ResolutionMatrix extends Collection
{

    /**
     * @var \App\Department
     */
    protected $department;

    /**
     * @var int
     */
    protected $firstResponse;

    /**
     * @var int
     */
    protected $resolve;

    /**
     * @var int
     */
    protected $close;

    /**
     * ResolutionMatrix constructor.
     *
     * @param \App\Department $department
     * @param int             $firstResponse
     * @param int             $resolve
     * @param int             $close
     */
    public function __construct(Department $department, int $firstResponse, int $resolve, int $close)
    {
        $this->department = $department;

        $this->firstResponse = $firstResponse;

        $this->resolve = $resolve;

        $this->close = $close;
    }
}
