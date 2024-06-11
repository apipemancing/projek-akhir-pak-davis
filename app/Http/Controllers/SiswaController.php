<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswas.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'umur' => 'required|integer',
            'asal' => 'required',
            'tempat_tinggal' => 'required',
            'tanggal_lahir' => 'required|date',
            'nama_orang_tua' => 'required',
            'asal_sekolah' => 'required',
            'alasan' => 'required',
        ]);

        Siswa::create($validatedData);

        return redirect()->route('siswas.index');
    }

    public function show(Siswa $siswa)
    {
        return view('siswas.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        return view('siswas.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'umur' => 'required|integer',
            'asal' => 'required',
            'tempat_tinggal' => 'required',
            'tanggal_lahir' => 'required|date',
            'nama_orang_tua' => 'required',
            'asal_sekolah' => 'required',
            'alasan' => 'required',
        ]);

        $siswa->update($validatedData);

        return redirect()->route('siswas.index');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswas.index');
    }
}
