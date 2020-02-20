<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $post_code
 * @property string $img
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property TownScenicSpot[] $townScenicSpots
 */
class Town extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'post_code', 'img', 'content', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function townScenicSpots()
    {
        return $this->hasMany('App\TownScenicSpot');
    }
}
