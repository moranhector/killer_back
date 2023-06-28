<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Album
 * @package App\Models
 * @version June 24, 2023, 3:23 pm UTC
 *
 * @property string $name
 * @property string $spotify_id
 * @property string $release_date
 * @property string $tipo
 * @property string $market
 * @property string $images
 * @property string $total_tracks
 * @property string $uri
 * @property string $genres
 * @property string $label
 * @property integer $popularity
 * @property integer $productor_id
 * @property integer $cant_disc
 */
class Album extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'albums';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'spotify_id',
        'release_date',
        'tipo',
        'market',
        'images',
        'total_tracks',
        'uri',
        'genres',
        'label',
        'popularity',
        'productor_id',
        'cant_disc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'spotify_id' => 'string',
        'release_date' => 'string',
        'tipo' => 'string',
        'market' => 'string',
        'images' => 'string',
        'total_tracks' => 'string',
        'uri' => 'string',
        'genres' => 'string',
        'label' => 'string',
        'popularity' => 'integer',
        'productor_id' => 'integer',
        'cant_disc' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'spotify_id' => 'required',
        'release_date' => 'required',
        'tipo' => 'required',
        'market' => 'required',
        'images' => 'required',
        'total_tracks' => 'required',
        'uri' => 'required',
        'genres' => 'required',
        'label' => 'required',
        'popularity' => 'required',
        'productor_id' => 'required',
        'cant_disc' => 'required'
    ];

    
}
