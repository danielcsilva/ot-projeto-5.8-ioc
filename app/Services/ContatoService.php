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

    public function salvarContato($cotato):array;

    public function listarContato():any;

    public function updateContato($contato):array;

    public function editContato($id):integer;

}