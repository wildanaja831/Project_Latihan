<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller
{
    public function index()
    {
        $data = Peserta::all();
        return view('peserta.index', compact('data'));
    }

    public function indexStore()
    {
        return view('peserta.create');
    }

    public function indexUpdate($id)
    {
        $data = Peserta::find($id);
        return view('peserta.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        Peserta::create([
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'tgl_lahir' => $request['tgl_lahir'],
            'no_hp' => $request['no_hp'],
        ]);

        return redirect()->route('peserta.index');
    }

    public function update(Request $request, $id)
    {
        $data = Peserta::find($id);
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $data->update([
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'tgl_lahir' => $request['tgl_lahir'],
            'no_hp' => $request['no_hp'],
        ]);

        return redirect()->route('peserta.index');
    }

    public function detail($id)
    {
        $data = Peserta::find($id);
        return view('peserta.detail', compact('data'));
    }

    public function destroye($id)
    {
        $data = Peserta::find($id);
        $data->delete();
        return redirect()->route('peserta.index');
    }
}
