<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Chore model.
 *
 * @property int    $id
 * @property string $name
 * @property string $description
 */

class Chore extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Indicates the fields.
     */
    protected $fillable = [
        'name', 'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_chore','chores_id', 'users_id')
            ->withPivot('day');
    }

}
