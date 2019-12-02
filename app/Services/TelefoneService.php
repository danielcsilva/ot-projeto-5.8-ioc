<?php
/**
 * Created by PhpStorm.
 * User: danielcosta
 * Date: 02/12/19
 * Time: 05:57
 */

namespace App\Services;


interface TelefoneService
{

    public function listaTelefonesPorIdUsuario($idUsuario):intger;

    public function salvarTelefone($telefoen):array;

    public function editarTelefone($telefone,$idContato):array;

    public function deleteTelefone($id):integer;

}