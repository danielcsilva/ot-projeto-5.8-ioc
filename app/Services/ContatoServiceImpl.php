<?php
/**
 * Created by PhpStorm.
 * User: danielcosta
 * Date: 02/12/19
 * Time: 05:35
 */

namespace App\Services;


use App\Repositories\ContatoRepository;
use Illuminate\Support\Facades\DB;

class ContatoServiceImpl implements ContatoService
{

    private $contatoRepository;


    /**
     * ContatoServiceImpl constructor.
     */
    public function __construct(ContatoRepository $contatoRepository)
    {
        $this->contatoRepository = $contatoRepository;
    }

    public function salvarContato($contato)
    {
        try{

            DB::beginTransaction();

            $id_contato = $this->contatoRepository->create($contato);

            DB::commit();

            return $id_contato;

        }catch (\Exception $e){

            DB::rollBack();

            throw new \Exception("erro ao cadastrar: ".$e->getMessage());
        }

    }

    public function listarContato()
    {
        return $this->contatoRepository->all();
    }

    public function updateContato($contato,$id)
    {
        try{

            DB::beginTransaction();

            $this->contatoRepository->update($contato,$id);

            DB::commit();

            return true;

        }catch (\Exception $e){

            DB::rollBack();

            throw new \Exception("erro ao editar ".$e->getMessage());
        }
    }

    public function deleteContato($id)
    {
        try{

            DB::beginTransaction();

            $this->contatoRepository->delete($id);

            DB::commit();

            return true;

        }catch (\Exception $e){

            DB::rollBack();

            throw new \Exception("erro ao deletar ".$e->getMessage());
        }
    }
}