<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\MachineNotes
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\MachineNoteAttachments[]
 *                $attachments
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineNotes onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineNotes withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineNotes withoutTrashed()
 * @mixin \Eloquent
 * @property int                                                                                 $id
 * @property int                                                                                 $machine_id
 * @property string                                                                              $note_content
 * @property \Carbon\Carbon|null                                                                 $deleted_at
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNotes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNotes whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNotes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNotes whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNotes whereNoteContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNotes whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 */
class MachineNotes extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'machine_notes';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'machine_id',
        'note_content',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(MachineNoteAttachments::class, 'note_id');
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
