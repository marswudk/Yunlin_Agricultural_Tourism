<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $img
 * @property string $date_start
 * @property string $date_end
 * @property string $location
 * @property string $address
 * @property string $host
 * @property string $co_organiser
 * @property string $tel
 * @property string $coordinate
 * @property int $sort
 * @property string $created_at
 * @property string $updated_at
 */
class News extends Model
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
    protected $fillable = ['title', 'content', 'img', 'date_start', 'date_end', 'location', 'address', 'host', 'co_organiser', 'tel', 'coordinate', 'sort', 'created_at', 'updated_at'];

}
