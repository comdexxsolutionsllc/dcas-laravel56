<?php

namespace App;

/**
 * App\Department
 *
 * @property int                 $id
 * @property string              $name
 * @property string|null         $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Department extends BaseModel
{

    /**
     * @var array
     */
    public $seedData = [
        ['name' => 'Abuse', 'description' => '',],
        ['name' => 'Accounting', 'description' => '',],
        ['name' => 'Billing', 'description' => '',],
        ['name' => 'Collections', 'description' => '',],
        ['name' => 'Development', 'description' => '',],
        ['name' => 'Hardware', 'description' => '',],
        ['name' => 'Human Resources', 'description' => '',],
        ['name' => 'Infrastructure', 'description' => '',],
        ['name' => 'Investor Relations', 'description' => '',],
        ['name' => 'Legal', 'description' => '',],
        ['name' => 'Managers', 'description' => '',],
        ['name' => 'Marketing', 'description' => '',],
        ['name' => 'Networking', 'description' => '',],
        ['name' => 'Operations', 'description' => '',],
        ['name' => 'Peering Coordination', 'description' => '',],
        ['name' => 'Provisioning', 'description' => '',],
        ['name' => 'Quality Control', 'description' => '',],
        ['name' => 'Sales', 'description' => '',],
        ['name' => 'Security', 'description' => '',],
        ['name' => 'Support Level 1', 'description' => '',],
        ['name' => 'Support Level 2', 'description' => '',],
        ['name' => 'Systems Administration', 'description' => '',],
        ['name' => 'Vendor Relations', 'description' => '',],
        ['name' => 'Webmaster', 'description' => '',],
        ['name' => 'White Gloves', 'description' => '',],
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
