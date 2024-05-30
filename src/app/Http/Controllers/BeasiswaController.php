<?php

namespace App\Http\Controllers;

//import model product


//import return type View
use App\Models\Penerima;

//import return type redirectResponse
use Illuminate\View\View;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Http\RedirectResponse;


class BeasiswaController extends Controller
{

    public function index() : View
    {
        //get all products
        $penerima = Penerima::latest()->paginate(10);

        //render view with products
        return view('beasiswas.index', compact('penerima'));
    }

   
    public function create(): View
    {
        return view('beasiswas.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'              => 'required|min:1',
            'nim'               => 'required|numeric',
            'nomer_telpon'      => 'required|numeric',
            'jenis_beasiswa'    => 'required',
            'mentor'            => 'required'
        ]);

        //create product
        Penerima::create([
            'nama'              => $request->nama,
            'nim'               => $request->nim,
            'nomer_telpon'      => $request->nomer_telpon,
            'jenis_beasiswa'    => $request->jenis_beasiswa,
            'mentor'            => $request->mentor
        ]);

        //redirect to index
        return redirect()->route('beasiswas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
 
    public function show(string $id): View
    {
        //get product by ID
        $penerima = Penerima::findOrFail($id);

        //render view wbeasiswasuct
        return view('beasiswas.show', compact('penerima'));
    }
    

    public function edit(string $id): View
    {
        //get penerima$penerima by ID
        $penerima = Penerima::findOrFail($id);

        //render view wbeasiswasuct
        return view('beasiswas.edit', compact('penerima'));
    }
        
   
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'              => 'required|min:1',
            'nim'               => 'required|numeric',
            'nomer_telpon'      => 'required|numeric',
            'jenis_beasiswa'    => 'required',
            'mentor'            => 'required'
        ]);

        //get penerima$penerima by ID
        $penerima = Penerima::findOrFail($id);
        {
            //update penerima$penerima without image
            $penerima->update([
                'nama'              => $request->nama,
                'nim'               => $request->nim,
                'nomer_telpon'      => $request->nomer_telpon,
                'jenis_beasiswa'    => $request->jenis_beasiswa,
                'mentor'            => $request->mentor
            ]);
        }

        //redirect to index
        return redirect()->route('beasiswas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get penerima$penerima by ID
        $penerima = Penerima::findOrFail($id);

        //delete image

        //delete penerima$penerima
        $penerima->delete();

        //redirect to index
        return redirect()->route('beasiswas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}