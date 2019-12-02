<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Telefone.
 *
 * @package namespace App\Entities;
 */
class Telefone extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tb_telefones';

    protected $primaryKey = 'tel_in_id';

    protected $fillable = ['tel_in_ddd','tel_in_telefone','con_in_id'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];


    public function contato()
    {
        return $this->hasOne('App\Entities\Contato', 'con_in_id');
    }

}
