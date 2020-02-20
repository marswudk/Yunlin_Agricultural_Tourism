<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $note
 * @property string $content
 * @property int $price
 * @property int $stack
 * @property int $sales
 * @property string $expected_date
 * @property int $days
 * @property string $created_at
 * @property string $updated_at
 * @property OrderItem[] $orderItems
 */
class Product extends Model
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
    protected $fillable = ['title', 'note', 'content', 'price', 'stack', 'sales', 'expected_date', 'days', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }
}
