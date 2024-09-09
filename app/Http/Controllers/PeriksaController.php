<?php

namespace App\Http\Controllers;

use App\Models\Kehamilan;
use App\Models\User;
use App\Models\Periksa;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PeriksaController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Periksa',
            'periksa' => Periksa::orderBy('created_at', 'desc')->get()
        ];

        return view('admin.periksa.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Periksa',
            'puskesmas' => Puskesmas::orderBy('nama', 'asc')->get(),
            'kehamilan' => Kehamilan::orderBy('noreg', 'asc')->get(),
        ];

        return view('admin.periksa.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kehamilan_id' => 'required',
            'tgl' => 'required',
            'periksa_ke' => 'required',
            'bb' => 'required',
            'tfu' => 'required',
            'td_a' => 'required',
            'td_b' => 'required',
            'imunisasi' => 'required',
            'denyut' => 'required',
            'hb' => 'required',
            'puskesmas_id' => 'required',
        ]);

        Periksa::create([
            'kehamilan_id' => $request->kehamilan_id,
            'periksa_ke' => $request->periksa_ke,
            'tgl' => $request->tgl,
            'bb' => $request->bb,
            'tfu' => $request->tfu,
            'td_a' => $request->td_a,
            'td_b' => $request->td_b,
            'imunisasi' => $request->imunisasi,
            'denyut' => $request->denyut,
            'hb' => $request->hb,
            'puskesmas_id' => $request->puskesmas_id,
        ]);
        Session::flash('hijau', 'Berhasil menambah data');

        return redirect('/periksa');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Lihat Data Periksa',
            'periksa' => Periksa::findOrFail($id),
        ];

        return view('admin.periksa.view', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Periksa',
            'periksa' => Periksa::findOrFail($id),
            'puskesmas' => Puskesmas::orderBy('nama', 'asc')->get(),
        ];
        return view('admin.periksa.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->update([
            'periksa_ke' => $request->periksa_ke,
            'kehamilan_id' => $request->kehamilan_id,
            'tgl' => $request->tgl,
            'bb' => $request->bb,
            'tfu' => $request->tfu,
            'td_a' => $request->td_a,
            'td_b' => $request->td_b,
            'imunisasi' => $request->imunisasi,
            'denyut' => $request->denyut,
            'hb' => $request->hb,
            'kehamilan_id' => $request->kehamilan_id,
        ]);

        Session::flash('hijau', 'Anda berhasil mengubah data!');

        return redirect('/periksa');
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Hapus Data Periksa',
            'periksa' => Periksa::findOrFail($id),
        ];

        return view('admin.periksa.delete', $data);
    }

    public function destroy($id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();

        Session::flash('merah', 'data berhasil dihapus');

        return redirect('/periksa');
    }
}
