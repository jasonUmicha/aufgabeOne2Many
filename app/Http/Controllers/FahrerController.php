<?php

namespace App\Http\Controllers;

use App\Models\Wohnort;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Fahrer;
use Illuminate\Routing\Redirector;



class FahrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fahrende = Fahrer::all();
//        dd($fahrende);
        return view('fahrer.index',[
            'fahrende'=>$fahrende
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fahrer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {

        $fahrer = Fahrer::create(
            [
                'vorname' => $request->input('vorname'),
                'nachname' => $request->input('nachname')
            ]
        );
        $fahrer->refresh();
        $wohnort = Wohnort::create(
                [
                    'fahrer_id' => $fahrer->id,
                    'ort' => $request->input('ort'),
                    'plz' => $request->input('plz')
                ]
            );

        return redirect('/fahrer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fahrer = Fahrer::find($id);
//        $wohnort = $fahrer->wohnort;
//        dd($wohnort);
        return view('fahrer.show')->with('fahrer',$fahrer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id): View|Factory|Application
    {
        $fahrer = Fahrer::find($id);
//        dd($fahrer);
        return view('fahrer.edit')->with('fahrer',$fahrer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request, $id): Application|RedirectResponse|Redirector
    {
        $fahrer = Fahrer::where('id',$id)
            ->update(
            [
                'vorname' => $request->input('vorname'),
                'nachname' => $request->input('nachname')
            ]
        );
        $wohnort = Wohnort::where('fahrer_id',$id)
            ->update(
                [
                    'ort' => $request->input('ort'),
                    'plz' => $request->input('plz')
                ]
            );
        return  redirect('/fahrer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Fahrer $fahrer
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Fahrer $fahrer): Redirector|RedirectResponse|Application
    {
        $fahrer->delete();
        return redirect('/fahrer');
    }
}
