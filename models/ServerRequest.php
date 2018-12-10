<?php namespace Viamage\DlaRafala\Models;

use Model;

/**
 * ServerRequest Model
 */
class ServerRequest extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'viamage_dlarafala_server_requests';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'email',
        'ram_amount',
        'cpu_amount',
        'vlan',
        'ip_config',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getRamAmountOptions(): array
    {
        return [
            '0.5' => '0.5 GB',
            '1'   => '1 GB',
            '2'   => '2 GB',
            '4'   => '4 GB',
            '8'   => '8 GB',
            '16'  => '16 GB',
        ];
    }
}
