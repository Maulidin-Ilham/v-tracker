@extends('layouts.driver.layout')


@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Kendaraan</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Example Card</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim
                                id est laborum.
                            </p>
                            <div class="d-flex flex-column align-items-start">
                                <button class="btn btn-primary" id="click-btn">Click me</button>

                            </div>
                        </div>

                    </div>
                </div>


            </div>



        </div>
    </section>
@endsection

{{-- @pushOnce('modal')
    @include('pages.admin.modal.click')
@endPushOnce

@pushOnce('scripts')
    @include('pages.admin.script')
@endPushOnce --}}
