<?php

namespace Modules\Support\Entities;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
