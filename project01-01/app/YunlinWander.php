<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 */
class YunlinWander extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'yunlin_wander';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['title', 'content', 'img', 'created_at', 'updated_at'];

}
