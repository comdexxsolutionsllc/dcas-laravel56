<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Modules\Support\Entities\Category
 *
 * @property int                                                                              $id
 * @property string                                                                           $name
 * @property \Carbon\Carbon|null                                                              $created_at
 * @property \Carbon\Carbon|null                                                              $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Ticket[] $tickets
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
