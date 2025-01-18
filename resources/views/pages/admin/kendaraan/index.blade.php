@extends('layouts.admin.layout')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Kendaraan</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <a role="button" href="{{ route('admin.kendaraan.tambah') }}" class="btn btn-primary mb-3">Tambah
                                Kendaraan</a>
                            <div class="table-responsive">
                                <table class="table" id="table-kendaraan">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Nama Kendaraan</th>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Kepemilikan</th>
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
    @include('pages.admin.kendaraan.script')
@endPushOnce
