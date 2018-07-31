<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Tags\HasTags;

/**
 * Modules\Support\Entities\Category
 *
 * @property int                                                                                 $id
 * @property string                                                                              $name
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Ticket[]    $tickets
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[]                         $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Category withAnyTags($tags, $type = null)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 */
class Category extends BaseModel
{

    use HasTags;

    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
