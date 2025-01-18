<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\JenisKendaraan;
use App\Models\Kendaraan;
use App\Models\Kepemilikan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jenis_kendaraan = JenisKendaraan::all();
        $kepemilikan = Kepemilikan::all();
        if ($request->ajax()) {

            $kendaraan = Kendaraan::orderBy("created_at", "desc")->get();
            return Datatables::of($kendaraan)
            ->addIndexColumn()
            ->editColumn('jenis_kendaraan_id', function ($row) {
                return $row->jenis_kendaraan->name;
            })
            ->editColumn('kepemilikan_id', function ($row) {
                return $row->kepemilikan->name;
            })
            ->make(true);
        }


        return view("pages.admin.kendaraan.index", compact("jenis_kendaraan", "kepemilikan"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jenis_kendaraan = JenisKendaraan::all();
        $kepemilikan = Kepemilikan::all();
        return view("pages.admin.kendaraan.create", compact("jenis_kendaraan", "kepemilikan"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'jenis_kendaraan_id' => 'required|exists:jenis_kendaraans,id',
            'kepemilikan_id' => 'required|exists:kepemilikans,id',
        ]);


        $kendaraan = new Kendaraan();
        $kendaraan->name = $validated['name'];
        $kendaraan->jenis_kendaraan_id = $validated['jenis_kendaraan_id'];
        $kendaraan->kepemilikan_id = $validated['kepemilikan_id'];


        $kendaraan->save();


        return redirect()->route('admin.kendaraan')
            ->with('success', 'Kendaraan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
