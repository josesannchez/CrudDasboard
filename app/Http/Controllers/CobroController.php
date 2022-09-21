<?php

namespace App\Http\Controllers;

use App\Models\Cobro;
use Illuminate\Http\Request;











use App\Models\Paciente;
use App\Models\Servicio;
use App\Models\Cita;

/**
 * Class CobroController
 * @package App\Http\Controllers
 */
class CobroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cobros = Cobro::paginate();

        return view('cobro.index', compact('cobros'))
            ->with('i', (request()->input('page', 1) - 1) * $cobros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cobro = new Cobro();
        
        $paciente =Paciente::pluck('nombre','id');
        $cita =Cita::pluck('fecha_inicio','id');
        $servicio =Servicio::pluck('nombre','id');

        return view('cobro.create', compact('cobro','paciente','cita','servicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cobro::$rules);

        $cobro = Cobro::create($request->all());

        return redirect()->route('cobros.index')
            ->with('success', 'Cobro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cobro = Cobro::find($id);

        return view('cobro.show', compact('cobro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cobro = Cobro::find($id);

       
        $paciente =Paciente::pluck('nombre','id');
        $cita =Cita::pluck('fecha_inicio','id');
        $servicio =Servicio::pluck('nombre','id');

        return view('cobro.edit', compact('cobro','paciente','cita','servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cobro $cobro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cobro $cobro)
    {
        request()->validate(Cobro::$rules);

        $cobro->update($request->all());

        return redirect()->route('cobros.index')
            ->with('success', 'Cobro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cobro = Cobro::find($id)->delete();

        return redirect()->route('cobros.index')
            ->with('success', 'Cobro deleted successfully');
    }
}
