<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $paises = Comuna::all();
        $paises = DB::table('tb_pais')
            ->join('tb_municipio', 'tb_pais.pais_capi', '=', 'tb_municipio.muni_codi')
            ->select('tb_pais.*', "tb_municipio.muni_nomb")
            ->get();
        return view('pais.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $municipios = DB::table('tb_municipio')
            ->orderBy('muni_nomb')
            ->get();
        return view('pais.create', compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = Pais::create($request->all());

        $paises = DB::table('tb_pais')
            ->join('tb_municipio', 'tb_pais.pais_capi', '=', 'tb_municipio.muni_codi')
            ->select('tb_pais.*', "tb_municipio.muni_nomb")
            ->get();

        return redirect()->route('paises.index',compact('paises'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();

        $paises = DB::table('tb_pais')
            ->join('tb_municipio', 'tb_pais.pais_capi', '=', 'tb_municipio.muni_codi')
            ->select('tb_pais.*', "tb_municipio.muni_nomb")
            ->get();

        return view('pais.index', compact('paises'));
    }
}
