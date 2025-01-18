@extends('layouts.admin.layout')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Kendaraan</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <a role="button" href="{{ route('admin.kendaraan') }}" class="btn btn-info mb-3">Kembali</a>
                            @if (session('success'))
                                <div class="alert alert-success my-2">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('admin.kendaraan.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Nama Kendaraan</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <select class="form-control" id="jenis_kendaraan_id" name="jenis_kendaraan_id">
                                                @foreach ($jenis_kendaraan as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Kepemilikan</label>
                                            <select class="form-control" id="kepemilikan_id" name="kepemilikan_id">
                                                @foreach ($kepemilikan as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3"><button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>

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
