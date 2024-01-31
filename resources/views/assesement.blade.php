@extends('layouts.master')
@section('page_title', 'Manage Assesement')
@section('headlinks')
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
@endsection
@section('contents')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Welcome, {{ Auth::user()->first_name }}
                                            {{ Auth::user()->last_name }} !</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom d-flex">
                                        <h5 class="card-title mb-0">Assesement</h5>
                                        <button type="button" class="btn btn-info add-btn ms-auto" data-bs-toggle="modal"
                                            id="create-btn" data-bs-target="#showtagsModal"
                                            style="background-color: green !important;"><i
                                                class="ri-add-line align-bottom me-1"></i> Create</button>
                                    </div>
                                    <div class="card-body">
                                        <table
                                            class="table table-bordered dt-responsive nowrap table-striped align-middle data-table1"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th data-ordering="false">S/N</th>
                                                    <th data-ordering="false">Name</th>
                                                    <th>Description</th>
                                                    <th>Quantity</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts/modal')
        </div>
    </div>

@endsection
@section('scripts')
    @include('scripts/assesement')
@endsection
