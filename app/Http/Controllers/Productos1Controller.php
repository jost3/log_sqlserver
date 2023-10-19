<?php

namespace App\Http\Controllers;

use App\Models\Productos1;
use Illuminate\Http\Request;

/**
 * Class Productos1Controller
 * @package App\Http\Controllers
 */
class Productos1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos1s = Productos1::paginate();

        return view('productos1.index', compact('productos1s'))
            ->with('i', (request()->input('page', 1) - 1) * $productos1s->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos1 = new Productos1();
        return view('productos1.create', compact('productos1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Productos1::$rules);

        $productos1 = Productos1::create($request->all());

        return redirect()->route('productos1s.index')
            ->with('success', 'Productos1 created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos1 = Productos1::find($id);

        return view('productos1.show', compact('productos1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos1 = Productos1::find($id);

        return view('productos1.edit', compact('productos1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Productos1 $productos1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos1 $productos1)
    {
        request()->validate(Productos1::$rules);

        $productos1->update($request->all());

        return redirect()->route('productos1s.index')
            ->with('success', 'Productos1 updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productos1 = Productos1::find($id)->delete();

        return redirect()->route('productos1s.index')
            ->with('success', 'Productos1 deleted successfully');
    }
}
