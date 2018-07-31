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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(MachineNoteAttachments::class, 'note_id');
    }
}
