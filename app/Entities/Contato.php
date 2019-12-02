<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Contato.
 *
 * @package namespace App\Entities;
 */
class Contato extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tb_contatos';

    protected $primaryKey = 'con_in_id';

    protected $fillable = ['con_st_nome','con_st_email'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];
}
