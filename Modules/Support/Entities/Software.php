<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

/**
 * Modules\Support\Entities\Software
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\SoftwareInstalled[]
 *                $installed_software
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Software onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Software withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Software withoutTrashed()
 * @mixin \Eloquent
 * @property int                                                         $id
 * @property string                                                      $software_name
 * @property string                                                      $software_key
 * @property \Carbon\Carbon|null                                         $deleted_at
 * @property \Carbon\Carbon|null                                         $created_at
 * @property \Carbon\Carbon|null                                         $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software whereSoftwareKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software whereSoftwareName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software whereUpdatedAt($value)
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[] $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software withAllTags($tags, $type =
 *         null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Software withAnyTags($tags, $type =
 *         null)
 */
class Software extends BaseModel
{

    use HasTags, SoftDeletes;

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'software_name',
        'software_key',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function installed_software(): HasMany
    {
        return $this->hasMany(SoftwareInstalled::class, 'software_id');
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
