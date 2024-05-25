<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use App\Models\Penduduk;

use Illuminate\View\View;


class PendudukController extends Controller
{
    //
    /**
     * index
     * 
     * @return void
     */
    public function index( Request $request) : View
    {   $search = $request->input('search');

        $penduduk = Penduduk::query()
            ->where('nama', 'like', "%{$search}%")
            ->orWhere('nik', 'like', "%{$search}%")
            ->orWhere('alamat', 'like', "%{$search}%")
            ->orWhere('pekerjaan', 'like', "%{$search}%")
            ->paginate(10);
    
        return view('penduduk.index', compact('penduduk', 'search'));
    }




    /**
     * create
     * 
     * @return View
     */
    public function create() : View
    {
        return view('penduduk.create');
    }

    /**
     * store
     * 
     * @param mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'nik'                   => 'required|max:16',
            'nama'                  => 'required',
            'jk'                    => 'required|in:laki-laki,perempuan',
            'tempatLahir'           => 'required',
            'tanggalLahir'          => 'required|date',
            'alamat'                => 'required',
            'pekerjaan'             => 'required',
            'pt'                    => 'required',
            'agama'                 => 'required',
            'warga'                 => 'required',
            'sp'                    => 'required|in:kawin,belum-kawin,cerai-hidup,cerai-mati',
        ]);

        Penduduk::create([
            'nik'                   => $request->nik,
            'nama'                  => $request->nama,
            'jenis_kelamin'         => $request->jk,
            'tempat_lahir'          => $request->tempatLahir,
            'tanggal_lahir'         => $request->tanggalLahir,
            'alamat'                => $request->alamat,
            'pekerjaan'             => $request->pekerjaan,
            'pendidikan_terakhir'   => $request->pt,
            'agama'                 => $request->agama,
            'kewarganegaraan'       => $request->warga,
            'status_perkawinan'     => $request->sp,
        ]);

        return redirect()->route('penduduk.index')->with(['success' => 'Data penduduk berhasil ditambahkan']);
    }


    /**
     * show
     * 
     * @param mixed $id
     * @return View
     */
    public function show(string $id) : View
    {
        $penduduk = Penduduk::findOrFail($id);
        return view('penduduk.show', compact('penduduk'));
    }



    /**
     * edit
     * 
     * @param mixed $id
     * @return View
     */
    public function edit(string $id) : View
    {
        $penduduk = Penduduk::findOrFail($id);
        return view('penduduk.edit', compact('penduduk'));
    }


    /**
     * update
     * 
     * @param mixed $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $request->validate([
            'nik'                   => 'required|max:16',
            'nama'                  => 'required',
            'jk'                    => 'required|in:laki-laki,perempuan',
            'tempatLahir'           => 'required',
            'tanggalLahir'          => 'required|date',
            'alamat'                => 'required',
            'pekerjaan'             => 'required',
            'pt'                    => 'required',
            'agama'                 => 'required',
            'warga'                 => 'required',
            'sp'                    => 'required|in:kawin,belum-kawin,cerai-hidup,cerai-mati',
        ]);

        $penduduk = Penduduk::findOrFail($id);

        $penduduk->update([
            'nik'                   => $request->nik,
            'nama'                  => $request->nama,
            'jenis_kelamin'         => $request->jk,
            'tempat_lahir'          => $request->tempatLahir,
            'tanggal_lahir'         => $request->tanggalLahir,
            'alamat'                => $request->alamat,
            'pekerjaan'             => $request->pekerjaan,
            'pendidikan_terakhir'   => $request->pt,
            'agama'                 => $request->agama,
            'kewarganegaraan'       => $request->warga,
            'status_perkawinan'     => $request->sp,
        ]);

        return redirect()->route('penduduk.index')->with(['success' => 'Data penduduk berhasil diupdate']);
    }


    /**
     * destroy
     * 
     * @param mixed $id
     * @return RedirectResponse
     */
    public function destroy(string $id) : RedirectResponse
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with(['success' => 'Data penduduk berhasil dihapus']);
    }
}
