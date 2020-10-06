<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Empleado::All();
        return view('empleado.index', compact('datos'));
        //$datos['empleado']=Empleado::paginate(5);
        //return view('empleado.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        
        //return $request->all();
        $Empleado = new Empleado;
        
        if ($request->hasFile('foto')) {
            $datosEmpleado['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        $Empleado->nombre = $request->nombre;
        $Empleado->email = $request->email;
        $Empleado->fecha_alta = $request->fecha_alta;
        $Empleado->foto = $request->foto;
        
        $Empleado->save();
        return redirect()->route('empleados.create');
        //return back();//->whith('Mensaje', 'Persona agregada!');
        //$datosEmpleado = request()->exception('_token');
        //$datosEmpleado = request()->all();
         
        //Empleado::insert($datosEmpleado);
        //return response()->json($datosEmpleado);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Aquí valida si existe sino redirije al 404
        // $empleado = Empleado::findOrFile($id);
        // return view('empleados.edit', compact('empleado'));
        $edEmpleado = Empleado::find($id);
        return view('empleado.edit', compact('edEmpleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edEmpleado = Empleado::find($id);

        $edEmpleado->nombre = $request->nombre;
        $edEmpleado->email = $request->email;
        $edEmpleado->fecha_alta = $request->fecha_alta;
        $edEmpleado->foto = $request->foto;

        $edEmpleado->save();

        return redirect()->route('empleados.index');
        //return back()->with('Mensaje', 'Empleado actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elEmpleado = Empleado::find($id);
        $elEmpleado->delete();

        return back()->with('Mensaje', 'Empleado Eliminado');
    }
}
