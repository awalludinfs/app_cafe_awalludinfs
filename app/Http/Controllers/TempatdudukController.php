<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\pesanan;
use App\Models\nomermeja;
use Illuminate\Support\Facades\DB;

class TempatdudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pesanan = pesanan::all();
        // return view('admin.tempatduduk.index',['pesanan'=>$pesanan]);
        // $result = DB::table('nomermeja')
        // ->join('pesanan','pesanan_id', "=", 'nomer','meja_id')
        // ->where('pesanan_id',"=",'meja_id')
        // ->get();
        // return view('admin.tempatduduk.index',['result'=>$result]);
        $nomermeja = nomermeja::all();
        return view('admin.tempatduduk.index',['nomermeja'=>$nomermeja]);
    }
    public function nomer(){
        $nomermeja = nomermeja::all();
        return view('user.tempatduduk.index',['nomermeja'=>$nomermeja]);
    }
    public function dashboard(){
        $nomermeja = nomermeja::all();
        return view('admin.dashboard.index',['nomermeja'=>$nomermeja]);
    }
    public function kasir(){
        return view('user.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tempatduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        nomermeja::create($request->all());
        return redirect('/admintempatduduk')->with('status','Anda berhasil memanambahkan Meja!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
