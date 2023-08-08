<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class folioCon extends Controller
{
    public function index(){
        $home = DB::table('folio1')->get();
        return view('home',['home'=>$home]);
    }
    public function store(Request $request)
{

DB::table('folio1')->insert([
'no' => $request->no,
'nama' => $request->nama,
'email' => $request->email,
'pesan' => $request->pesan
]);

return redirect('/home');
}
public function hapus($id)
{
DB::table('folio1')->where('no',$id)->delete();
return redirect('/home');
}
}
