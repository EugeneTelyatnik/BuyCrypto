<?php namespace Laradev\Crypto\Models;

use Model;

/**
 * Step Model
 */
class Step extends Model
{
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'laradev_crypto_steps';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['pair_id', 'order'];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'way' => Way::class,
        'pair' => Pair::class,
    ];

}
