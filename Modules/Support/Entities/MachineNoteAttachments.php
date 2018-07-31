<?php

namespace Modules\Support\Entities;

use App\BaseModel;

/**
 * Modules\Support\Entities\MachineNoteAttachments
 *
 * @mixin \Eloquent
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
}
