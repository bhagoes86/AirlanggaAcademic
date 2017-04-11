<?php 

namespace App\Http\Controllers\PengelolaanKegiatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\RincianDana;


class RincianDanaController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar rincian_dana
            'page' => 'rincian_dana',
            // Memanggil semua isi dari tabel rincian_dana
            'rincian_dana' => RincianDana::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/rincian_dana dan juga menambahkan $data tadi di view
        return view('pengelolaan-kegiatan.rincian_dana.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar rincian_dana
            'page' => 'rincian_dana',
        ];

        // Memanggil tampilan form create
    	return view('pengelolaan-kegiatan.rincian_dana.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel rincian_dana
        RincianDana::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Rincian Dana berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/rincian_dana
        return Redirect::to('pengelolaan-kegiatan/rincian_dana');
    }

    public function delete($id)
    {
        // Mencari rincian_dana berdasarkan id dan memasukkannya ke dalam variabel $rincian_dana
        $rincian_dana = RincianDana::find($id);

        // Menghapus rincian_dana yang dicari tadi
        $rincian_dana->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Rincian Dana berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar rincian_dana
            'page' => 'rincian_dana',
            // Mencari rincian_dana berdasarkan id
            'rincian_dana' => RincianDana::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pengelolaan-kegiatan.rincian_dana.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari rincian_dana yang akan di update dan menaruhnya di variabel $rincian_dana
        $rincian_dana = RincianDana::find($id);

        // Mengupdate $rincian_dana tadi dengan isi dari form edit tadi
        $rincian_dana->kode_rincian = $request->input('kode_rincian');
        $rincian_dana->nama_barang = $request->input('nama_barang');
        $rincian_dana->quantity = $request->input('quantity');        
        $rincian_dana->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Rincian Dana berhasil diedit');

        // Kembali ke halaman mahasiswa/rincian_dana
        return Redirect::to('pengelolaan-kegiatan/rincian_dana');
    }

}