<?php

namespace App\Http\Controllers;

use App\Models\Poso;
use App\Models\Listum;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class PosoController
 * @package App\Http\Controllers
 */
class PosoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posos = Poso::paginate();

        return view('poso.index', compact('posos'))
            ->with('i', (request()->input('page', 1) - 1) * $posos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poso = new Poso();
        $listum = listum::pluck('nombre','id'); 
        $User = user::pluck('name','id');
        return view('poso.create', compact('poso','listum','User'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Poso::$rules);

        $poso = Poso::create($request->all());

        return redirect()->route('posos.index')
            ->with('success', 'Poso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poso = Poso::find($id);

        return view('poso.show', compact('poso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poso = new Poso();
        $listum = listum::pluck('nombre','id'); 
        $User = user::pluck('name','id');
        return view('poso.create', compact('poso','listum','User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Poso $poso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poso $poso)
    {
        request()->validate(Poso::$rules);

        $poso->update($request->all());

        return redirect()->route('poso.index')
            ->with('success', 'Poso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $poso = Poso::find($id)->delete();

        return redirect()->route('poso.index')
            ->with('success', 'Poso deleted successfully');
    }
}
