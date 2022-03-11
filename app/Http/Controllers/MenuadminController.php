<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use Illuminate\Support\Facades\DB;

class MenuadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = menu::all();
        return view('admin.menu.index',['menu'=>$menu]);
    }
    public function status($id){
        $menu = DB::table('menu')->where('id',$id)->first();

        $status_sekarang = $menu->status;

        if($status_sekarang == 1){
            DB::table('menu')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            DB::table('menu')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('/adminmenu')->with('status','Anda Berhasil Mengubah!!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = menu::all();
        return view('admin.menu.create',['menu'=>$menu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        menu::create($request->all());
        return redirect('/adminmenu')->with('status','Anda berhasil menambahkan Menu!!');
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
        $menu = menu::find($id);
        $menu->delete();

        if($menu){
            return redirect('/adminmenu')->with('status','Data Berhasil Di hapus!!');
        }
    }
}
