<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\buku;  


class BukuController extends Controller
{
    public function index()
    {
        $databuku=buku::all();
        $no=0;
        $jumlahbuku=$databuku->count();
        $totalharga=DB::table('buku')->sum('harga');
        // dd($databuku);
        return view('buku.index',compact('databuku','totalharga','no','jumlahbuku'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->tglterbit = $request->tglterbit;
        $buku->harga = $request->harga;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    //edit
    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    //update
    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tglterbit'=>$request->tglterbit,
            'harga'=>$request->harga
        ]);
        return redirect('/buku');
    }
}
