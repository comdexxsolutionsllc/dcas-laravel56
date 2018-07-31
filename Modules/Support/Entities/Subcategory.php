<?php

namespace Modules\Support\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Support\Entities\Subcategory
 *
 * @property int                 $id
 * @property string              $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Subcategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Subcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Subcategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Subcategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
