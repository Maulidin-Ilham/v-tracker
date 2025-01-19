<?php

namespace App\Http\Controllers\Persetujuan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Models\Pemesanan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PersetujuanController extends Controller
{


    public function index(Request $request)
    {
        $userId = Auth::user()->id;

        if ($request->ajax()) {


            $pemesanan = Pemesanan::where(function($query) use ($userId) {
                $query->where('approver1_id', $userId)
                      ->orWhere('approver2_id', $userId);
            })->get();
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
                })->make(true);
        }

        return view('pages.approver.persetujuan.index');
    }

}
