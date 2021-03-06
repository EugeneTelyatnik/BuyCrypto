<?php namespace Laradev\Crypto\Models;

use Model;

/**
 * Way Model
 */
class Way extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'laradev_crypto_ways';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['hash', 'currency_from', 'currency_to'];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'steps' => Step::class,
        'offers' => Offer::class,
    ];
}
