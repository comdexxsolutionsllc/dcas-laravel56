<?php

namespace App;

class Navlink extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'link',
        'component',
    ];

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return [];
    }
}
