<?php

namespace App\Http\Controllers;
use App\Repositories\EixoRepository;

use Illuminate\Http\Request;

class EixoController extends Controller{

    protected $repository;
    
    public function __construct(){
        $this->repository = new EixoRepository();
}

    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data = $this->repository->selectAll();
        return $data;//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $obj = $this->repository->findById($id);
    if(isset($obj)) {
    $obj->nome = mb_strtoupper($request->nome, 'UTF-8');
    $this->repository->save($obj);
    return "<h1>Upate - OK!</h1>";
    }
    return "<h1>Upate - Not found Eixo!</h1>";
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}