<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $town_id
 * @property string $spot_name
 * @property string $spot_img
 * @property string $spot_url
 * @property string $created_at
 * @property string $updated_at
 * @property Town $town
 */
class TownScenicSpot extends Model
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
    protected $fillable = ['town_id', 'spot_name', 'spot_img', 'spot_url', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function town()
    {
        return $this->belongsTo('App\Town');
    }
}
