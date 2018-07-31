<?php

namespace Modules\Support\Entities;

use App\BaseModel;

/**
 * Modules\Support\Entities\MachineNoteAttachments
 *
 * @mixin \Eloquent
 * @property int                                                                                 $id
 * @property int                                                                                 $note_id
 * @property string                                                                              $file_name
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNoteAttachments
 *         whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNoteAttachments
 *         whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNoteAttachments
 *         whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNoteAttachments
 *         whereNoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineNoteAttachments
 *         whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 */
class MachineNoteAttachments extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'machine_note_attachments';

    /**
     * @var array
     */
    protected $fillable = [
        'note_id',
        'file_name',
    ];

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
