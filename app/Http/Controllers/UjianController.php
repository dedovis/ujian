<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ujian::all();

        return view('welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $ujian = ujian::create($req->all());

        // comment this code if foto not used
        // $ujian_id = $ujian->id;
        // $setuuid = ujian::findOrFail($ujian_id);
        // if($req->foto != null)
        // {
        //     $img = $req->file('foto');
        //     $FotoExt  = $img->getClientOriginalExtension();
        //     $FotoName = $ujian_id;
        //     $foto   = $FotoName.'.'.$FotoExt;
        //     $img->move('img/ujian', $foto);
        //     $setuuid->foto       = $foto;
        // }else{
        //     $setuuid->foto       = $setuuid->foto;
        // }
        // $setuuid->update();

        return redirect(route('ujian_index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ujian = ujian::findOrFail($id);
        return view('edit', compact('ujian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        $ujian = ujian::findOrFail($id);

        $ujian->fill($req->all())->save();

        // comment this code if foto not used
        // if($req->foto != null){
        //         $FotoExt  = $req->foto->getClientOriginalExtension();
        //         $FotoName = $req->ujian_id;
        //         $foto   = $FotoName.'.'.$FotoExt;
        //         $req->foto->move('img/ujian', $foto);
        //         $ujian->foto       = $foto;
        //         }else {
        //             $ujian->foto  = $ujian->foto;
        //         }

        // $ujian->update();

        return redirect(route('ujian_index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $req)
    {
        $ujian = ujian::findOrFail($id);

        $ujian->fill($req->all())->save();

        // comment this code if foto not used
        // if($req->foto != null){
        //         $FotoExt  = $req->foto->getClientOriginalExtension();
        //         $FotoName = $req->ujian_id;
        //         $foto   = $FotoName.'.'.$FotoExt;
        //         $req->foto->move('img/ujian', $foto);
        //         $ujian->foto       = $foto;
        //         }else {
        //             $ujian->foto  = $ujian->foto;
        //         }

        // $ujian->update();

        return redirect(route('ujian_index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $ujian = ujian::findOrFail($id);

        // Need to check realational
        // If there relation to other data, return error with message, this data has relation to other table(s)
        $image_path = "img/ujian/" . $ujian->foto; // Value is not URL but directory file path
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $delete = $ujian->delete();

        return redirect(route('ujian_index'));
    }

    public function cetak()
    {
        $ujian = ujian::all();
        $pdf = PDF::loadView('cetak', ['ujian' => $ujian]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Data ujian.pdf');
    }
}
