<?php
/**
 * Created by PhpStorm.
 * User: danielcosta
 * Date: 02/12/19
 * Time: 05:35
 */

namespace App\Services;


interface ContatoService
{

    public function salvarContato($contato);

    public function listarContato();

    public function updateContato($contato,$id);

    public function deleteContato($id);

}