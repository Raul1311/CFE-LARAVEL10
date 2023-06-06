<?php

namespace App\Http\Controllers;

use App\Models\Listum;
use Illuminate\Http\Request;

/**
 * Class ListumController
 * @package App\Http\Controllers
 */
class ListumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Listum::paginate();

        return view('listum.index', compact('lista'))
            ->with('i', (request()->input('page', 1) - 1) * $lista->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listum = new Listum();
        return view('listum.create', compact('listum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Listum::$rules);

        $listum = Listum::create($request->all());

        return redirect()->route('lista.index')
            ->with('success', 'Listum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listum = Listum::find($id);

        return view('listum.show', compact('listum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listum = Listum::find($id);

        return view('listum.edit', compact('listum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Listum $listum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listum $listum)
    {
        request()->validate(Listum::$rules);

        $listum->update($request->all());

        return redirect()->route('lista.index')
            ->with('success', 'Listum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listum = Listum::find($id)->delete();

        return redirect()->route('lista.index')
            ->with('success', 'Listum deleted successfully');
    }
}
