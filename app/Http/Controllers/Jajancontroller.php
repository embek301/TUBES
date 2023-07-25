<?php

namespace App\Http\Controllers;


use PDF;
use Validator;
use Psy\Util\Str;
use App\Models\Jajan;
use App\Models\Jenis;
use App\Exports\JajanExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class Jajancontroller extends Controller
{
    /**
     * Display a jenising of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pageTitle = 'Daftar Jajan';
        confirmDelete();
        return view('jajan.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Data Jajan';
        $jenis = Jenis::all();
        return view('jajan.create', compact('pageTitle', 'jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
            'unique' => ':Attribute sudah ada'
        ];
        $validator = Validator::make($request->all(), [
            'kodeJajan' => 'required|unique:jajan,kode_jajan',
            'namaJajan' => 'required',
            'harga' => 'required|numeric',
            'deskripsiJajan' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $file = $request->file('img');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            //Store File
            $file->store('public/files');
        }
        
        // ELOQUENT
        $jajan = new Jajan;
        $jajan->kode_jajan = $request->kodeJajan;
        $jajan->nama_jajan = $request->namaJajan;
        $jajan->price = $request->harga;
        $jajan->description = $request->deskripsiJajan;
        $jajan->jenis_id = $request->jenis;
        
         if ($file != null) {
            $jajan->original_filename = $originalFilename;
            $jajan->encrypted_filename = $encryptedFilename;
        }
        $jajan->save();

       
        Alert::success('Berhasil ditambahkan', 'Data Jajan berhasil ditambahkan.');
        return redirect()->route('jajan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = ' Detail Jajan';
        // ELOQUENT
        $jajan = Jajan::find($id);
        return view('jajan.show', compact('pageTitle', 'jajan', ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Jajan';
        // ELOQUENT
        $jenis = Jenis::all();
        $jajan = Jajan::find($id);
        return view(
            'jajan.edit',
            compact(
                'pageTitle',
                'jenis',
                'jajan'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => ':Attribute sudah ada'
        ];
        $validator = Validator::make($request->all(), [
            'kodeJajan' => 'required|unique:jajan,kode_jajan,' . $id,
            'namaJajan' => 'required',
            'harga' => 'required|numeric',
            'deskripsiJajan' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $jajan = Jajan::find($id);
        $file = $request->file('img');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            Storage::disk('public')->delete('files/' . $jajan->encrypted_filename);

            $file->store('public/files');
        }



        $jajan->kode_jajan = $request->kodeJajan;
        $jajan->nama_jajan = $request->namaJajan;
        $jajan->price = $request->harga;
        $jajan->description = $request->deskripsiJajan;
        $jajan->jenis_id = $request->jenis;
        if ($file != null) {
            $jajan->original_filename = $originalFilename;
            $jajan->encrypted_filename = $encryptedFilename;
        }
        $jajan->save();
        Alert::success('Berhasil diedit', 'Data Jajan berhasil diedit.');
        return redirect()->route('jajan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jajan=Jajan::find($id);
        $deletionpath = 'public/files/' . $jajan->encrypted_filename;
        Storage::delete($deletionpath);
        $jajan->delete();
        Alert::success('Berhasil dihapus', 'Data Jajan berhasil dihapus.');
        return redirect()->route('jajan.index');
    }

    public function getData(Request $request)
    {
        $jajans =  Jajan::with('jenis');
        if ($request->ajax()) {
            return datatables()->of($jajans)
                ->addIndexColumn()
                ->addColumn('action', function ($jajan) {
                    return view('jajan.action', compact('jajan'));
                })
                ->toJson();
        }
    }

    public function exportExcel()
    {
        return Excel::download(new JajanExport, 'jajan.xlsx');
    }

    public function exportPdf()
    {
        $jajan = Jajan::all();

        $pdf = PDF::loadView('jajan.export_pdf', compact('jajan'));

        return $pdf->download('jajan.pdf');
    }

    public function downloadFile($jajanId)
    {
        $jajan = Jajan::find($jajanId);
        $encryptedFilename = 'public/files/' . $jajan->encrypted_filename;
        $downloadFilename = Str::lower($jajan->kode_jajan . '_' . $jajan->nama_jajan . '.jpg');

        if (Storage::exists($encryptedFilename)) {
            return Storage::download($encryptedFilename, $downloadFilename);
        }
    }
}

