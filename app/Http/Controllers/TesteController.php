<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request\TesteRequest;

use App\Models\User;
use App\Models\Teste;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $variavel = 'teste variavel';

        $array = [
            'reg 1',
            'reg 2',
            'reg 3',
            'reg 4',
            'reg 5',
            'reg 5',
            'reg 5',
            'reg 5',
            'reg 5',
            'reg 5',
        ];


        return view('teste.index')
                ->with('users', User::all())
                ->with('minhaVar', $variavel)
                ->with('regs', $array);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
    public function show(Teste $teste)
    {
        dd($teste);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            return view('teste.form')
                ->with('teste', Teste::findOrFail($id));

        try {
        } catch (\Exception $e) {
            return redirect()->route('teste.index');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TesteRequest $request, string $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
