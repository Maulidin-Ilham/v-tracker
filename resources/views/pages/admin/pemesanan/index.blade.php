@extends('layouts.admin.layout')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Pemesanan</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <a role="button" href="#" class="btn btn-primary mb-3">Tambah
                                Pemesanan</a>
                            <div class="table-responsive">
                                <table id="table-pemesanan" class="table" id="table-kendaraan">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User</th>
                                            <th>Penyetuju 1</th>
                                            <th>Penyetuju 2</th>
                                            <th>Kendaraan</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>


            </div>



        </div>
    </section>
@endsection



@pushOnce('scripts')
    @include('pages.admin.pemesanan.script')
@endPushOnce
