<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\SoftwareCategory
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Software[]  $software
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareCategory onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareCategory withoutTrashed()
 * @mixin \Eloquent
 * @property int                                                                                 $id
 * @property string                                                                              $category_name
 * @property \Carbon\Carbon|null                                                                 $deleted_at
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareCategory
 *         whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareCategory
 *         whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareCategory
 *         whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareCategory
 *         whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 */
class SoftwareCategory extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'software_category';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'category_name',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function software(): HasMany
    {
        return $this->hasMany(Software::class, 'category_id');
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
