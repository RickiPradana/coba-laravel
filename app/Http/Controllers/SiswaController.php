<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DataTables;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use Symfony\Component\HttpFoundation\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        // $siswa = Siswa::all();
        $siswa = Siswa::with('guru')->orderBy('nama');
        

        return view('siswa.index', compact('guru', 'siswa'));
    }
    
    public function siswaList()
    {   
        $siswasQuery = Siswa::query();
    
        $start_date = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
        $end_date = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');

        if($start_date && $end_date){

        $start_date = date('Y-m-d', strtotime($start_date));
        $end_date = date('Y-m-d', strtotime($end_date));

        $siswasQuery->whereRaw("date(siswas.tgl_lahir) >= '" . $start_date . "' AND date(siswas.tgl_lahir) <= '" . $end_date . "'");
        }
        $siswas = $siswasQuery->select('*')->limit(10);
        return DataTables()->of($siswas)
            ->make(true);
    }
    // public function siswaList(Request $request)
    // {   
        // Cara 2 DataTable
        // $query = Siswa::query();
    
        // if(request('start_date') && request('end_date') && request('nama_siswa')){
        //     $query->whereBetween('tgl_lahir', [request('start_date'), request('end_date')])
        //         ->orWhere('nama',[request('nama_siswa')]);
        // }
            
        // return Datatables::of($query)->make(true);

        // $query = Siswa::query();
    
        // if(request('nama_siswa')){
        //     $query->where('nama', [request('nama_siswa')]);
        // }

        // Cara Filter by Nama
		// $cari_nama = $request->nama_siswa;

        // $siswa = DB::table('siswas')
        // ->where('nama','like',"%".$cari_nama."%")
        // ->get();
                
        // return Datatables::of($siswa)->make(true);

        // Cara Filter 1
        // $siswasQuery = Siswa::query();
    
        // $start_date = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
        // $end_date = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');

        // if($start_date && $end_date){

        // $start_date = date('Y-m-d', strtotime($start_date));
        // $end_date = date('Y-m-d', strtotime($end_date));

        // $siswasQuery->whereRaw("date(siswas.tgl_lahir) >= '" . $start_date . "' AND date(siswas.tgl_lahir) <= '" . $end_date . "'");
        // }
        // $siswas = $siswasQuery->select('*');
        // return datatables()->of($siswas)
        //     ->make(true);
    //     $siswasQuery = Siswa::query();
    
    //     $start_date = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
    //     $end_date = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');

    //     if($start_date && $end_date){

    //     $start_date = date('Y-m-d', strtotime($start_date));
    //     $end_date = date('Y-m-d', strtotime($end_date));

    //     $siswasQuery->whereRaw("date(siswas.tgl_lahir) >= '" . $start_date . "' AND date(siswas.tgl_lahir) <= '" . $end_date . "'");
    //     }
    //     $siswas = $siswasQuery->select('*');
    //     return datatables()->of($siswas)
    //         ->make(true);
    // }

    // public function index(Request $request){
    //     // Cara 1
        // $siswa = DB::table('siswas')->get();
        // dd($siswa);
        // return view('home.siswa.index', ['siswa' => $siswa]);
        // return view('home.siswa.index', compact('siswa'));
        // return view('home.siswa.index')->with('siswa', $siswa);

        // Cara 2
        // $siswa = Siswa::all();
        // $guru = Guru::all();
        // $siswa = Siswa::with('guru')->orderBy('nama')->paginate(5);
        // dd($siswa);
        // return view('home.siswa.index', ['siswa' => $siswa]);
        // return view('siswa.index', compact('siswa','guru'));
        // return view('home.siswa.index')->with('siswa', $siswa);

        // Cara 1 DataTable
        // if ($request->ajax()) {
        //     $data = Siswa::latest()->get();
        //     return DataTables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $btn = '<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
        //                     data-bs-target="#ModalEdit-{{ $row->id }}"><i class="bi bi-pencil-square">
        //                     </i></button>
        //                     <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
        //                     data-bs-target="#ModalHapus-{{ $row->id }}"><i class="bi bi-trash"></i>
        //                     </button>';
        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
    
    //     return view('siswa.index', compact('siswa', 'guru'));
    // }

    public function tambah(Request $request){
        // return $request;
        // $request->validate([
        //     'nama' => 'required|min:2',
        //     'ttl' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'alamat' => 'required',
        //     'agama' => 'required',
        // ]);

        DB::table('siswas')->insert([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'guru_id' => $request->guru_id,
        ]);
        return redirect('/siswa')->with('success','Data berhasil ditambah!');
    }

    public function update(Request $request, $id){
        // return $request;
        DB::table('siswas')
        ->where('id', $id)
        ->update([
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'guru_id' => $request->guru_id,
        ]);
        return redirect('/siswa')->with('success','Data berhasil diupdate!');
    }

    public function hapus($id){
        // return $id;
        DB::table('siswas')
        ->where('id', $id)
        ->delete();
        return redirect('/siswa')->with('success','Data berhasil dihapus!');
    }
}
