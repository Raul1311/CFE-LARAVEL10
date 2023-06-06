<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $lista_id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Listum $listum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    static $rules = [
		'lista_id' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lista_id','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function listum()
    {
        return $this->hasOne('App\Models\Listum', 'id', 'lista_id');
    }
    

}
