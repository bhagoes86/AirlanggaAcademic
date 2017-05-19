<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers\Mahasiswa\KrsKhs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use App\Models\KrsKhs\Histori;
// /**
//  * Class HomeController
//  * @package App\Http\Controllers
//  */
class HistoriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $data = [
        'page' => 'histori',
        'histori' => Histori::all()
        ];
        return view('mahasiswa.krs-khs.histori.index',$data);
    }

    public function input(Request $request)
    {
        $data = $request->input('cek');
        return view('.inventarisasset.input');
    }

     public function create(Request $request)
    {
        Ruang::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Ruang berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('ruang');
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel ruang
        Ruang::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Jam berhasil ditambahkan');

        // Kembali ke halaman krs-khs/ruang
        return Redirect::to('krs-khs/input-ruang');
    }



}