<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_inventaris;

class ModelInventarisController extends Controller
{
    public function index(){
    	return model_inventaris::all();
    } 

    public function create (request $request){
    	$model_inventaris = new model_inventaris;
    	$model_inventaris->id_barang = $request ->id_barang;
    	$model_inventaris->nama = $request ->nama;
    	$model_inventaris->spesifikasi = $request ->spesifikasi;
    	$model_inventaris->tahun = $request ->tahun;
$model_inventaris->harga = $request ->harga;
$model_inventaris->foto = $request ->foto;
$model_inventaris->jumlah = $request ->jumlah;
$model_inventaris->satuan = $request ->satuan;
$model_inventaris->kondisi = $request ->kondisi;
$model_inventaris->save();

return " Data berhasil disimpan";

    }


public function update( request $request, $id)
{

$id_barang= $request->id_barang;
$nama= $request->nama;
$spesifikasi= $request->spesifikasi;
$tahun= $request->tahun;
$harga= $request->harga;
$foto= $request->foto;
$jumlah= $request->jumlah;
$satuan= $request->satuan;
$kondisi= $request->kondisi;


$model_inventaris = model_inventaris::find ($id_barang);
$model_inventaris->id_barang = $id_barang;
$model_inventaris->nama = $nama;
$model_inventaris->spesifikasi = $spesifikasi;
$model_inventaris->tahun = $tahun;
$model_inventaris->harga = $harga;
$model_inventaris->foto = $foto;
$model_inventaris->jumlah = $jumlah;
$model_inventaris->satuan = $satuan;
$model_inventaris->kondisi = $kondisi;
$model_inventaris->save();

return "data berhasil di update";


}

public function delete($id_barang){

	$model_inventaris= model_inventaris::find($id_barang);

$model_inventaris->delete();
return "data berhasil dihapus";

}
}
