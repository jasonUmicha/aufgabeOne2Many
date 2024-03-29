<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Fahrer;
use App\Models\Fahrten;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use JetBrains\PhpStorm\NoReturn;

class FahrtenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        $fahrer=Fahrer::all();
        $alleFahrten = Fahrten::all();
//        dd($alleFahrten);
        return view('fahrten.index',[
            'alleFahrten'=>$alleFahrten
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $fahrer = Fahrer::all();

//        dd($id);
        return view('fahrten.create')->with('fahrer' ,$fahrer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        $fahrten = Fahrten::create(
            [
                'fahrer_id' => $request->get('fahrer_id'),
                'von' => $request->input('von'),
                'nach' => $request->input('nach'),
                'startTagZeit' => $request->input('startTagZeit'),
                'km' => $request->input('km')
            ]
        );
        $fahrer=Fahrer::find($fahrten->fahrer_id);
////        $str="/fahrer/".str($fahrer->id)."/fahrten";
//
//        $str="/fahrer/".str($fahrer->id);
////        dd($str);
        return redirect('/fahrten')->with('fahrer',$fahrer);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id): View|Factory|Application
    {
        $fahrten = Fahrten::find($id);
        $fahrer = Fahrer::all();
//        dd($fahrten);
        return view('fahrten.edit')->with('fahrer', $fahrer)->with('fahrten',$fahrten);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $fahrten = Fahrten::where('id',$id)
            ->update([
                'fahrer_id' => $request->get('fahrer_id'),
                'von' => $request->input('von'),
                'nach' => $request->input('nach'),
                'startTagZeit' => $request->input('startTagZeit'),
                'km' => $request->input('km')
            ]
        );
//        $fahrer=Fahrer::find(Fahrten::find($id)->fahrer_id);
////        $str="/fahrer/".str($fahrer->id)."/fahrten";
////        dd($str);
//        $str="/fahrer/".str($fahrer->id);
        return redirect("/fahrten");//->with('fahrer',$fahrer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Fahrten $fahrten
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Fahrten $fahrten): Redirector|RedirectResponse|Application
    {
        $fahrer=Fahrer::find(Fahrten::find($fahrten->id)->fahrer_id);
//        $str="/fahrer/".str($fahrer->id);
//dd($str);
        $fahrten->delete();
        return redirect('/fahrten')->with('fahrer',$fahrer);
    }
}
