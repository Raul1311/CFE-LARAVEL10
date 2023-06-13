<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Poso
 *
 * @property $id
 * @property $lista_id
 * @property $user_id
 * @property $presion
 * @property $gas
 * @property $conbustible
 * @property $carbono
 * @property $created_at
 * @property $updated_at
 *
 * @property Listum $listum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Poso extends Model
{
    
    static $rules = [
		'lista_id' => 'required',
    'user_id' => 'required',
		'presion' => 'required',
		'gas' => 'required',
		'conbustible' => 'required',
		'carbono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lista_id','user_id','presion','gas','conbustible','carbono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function listum()
    {
        return $this->hasOne('App\Models\Listum', 'id', 'lista_id');
        return $this->hasOne('App\Models\User', 'name', 'user_id');
        

    }
    

}
