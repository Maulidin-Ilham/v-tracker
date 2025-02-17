<?php

namespace App\Http\Controllers\Pemesanan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $kendaraan = Kendaraan::all();
        $user = User::all();

        if ($request->ajax()) {
            $pemesanan = Pemesanan::orderBy("created_at", "desc")->get();
            return DataTables::of($pemesanan)
                ->addIndexColumn()
                ->editColumn('user_id', function ($row) {
                    return $row->user->name ?? 'Tidak Ada';
                })
                ->editColumn('approver1_id', function ($row) {

                    $approver1 = User::find($row->approver1_id);
                    return $approver1 ? $approver1->name : 'Tidak Ada';
                })
                ->editColumn('approver2_id', function ($row) {

                    $approver2 = User::find($row->approver2_id);
                    return $approver2 ? $approver2->name : 'Tidak Ada';
                })
                ->editColumn('kendaraan_id', function ($row) {
                    return $row->kendaraan->name ?? 'Tidak Ada';
                })
                ->editColumn('tanggal_mulai', function ($row) {
                    return Carbon::parse($row->tanggal_mulai)->locale('id')->isoFormat('D MMMM YYYY');
                })
                ->editColumn('tanggal_selesai', function ($row) {
                    return Carbon::parse($row->tanggal_selesai)->locale('id')->isoFormat('D MMMM YYYY');
                })

                ->make(true);
        }

        return view('pages.admin.pemesanan.index', compact('kendaraan',));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
