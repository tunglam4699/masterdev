@extends('Admin.layout')

@section('content')
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 font-weight-bold">User Info</p>
        <a href="{{ URL::to('Admin/create') }}"><button class="btn btn-primary" type="button">Add new user</button></a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>&nbsp;</label></div>
            </div>
            <div class="col-md-6">
                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Phone</th>
                        <th>Payment</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Accounts as $Account)
                    <tr>
                        <td><img class="rounded-circle mr-2" width="30" height="30" src="{{ asset('assets/img/avatars/avatar1.jpeg') }}"></td>
                        <td>{{ $Account->name }}</td>
                        <td>{{ $Account->role }}</td>
                        <td>{{ $Account->phone }}</td>
                        <td>{{ $Account->payment}}</td>
                        <td>
                            <a href="{{ URL::to('Admin/' . $Account->id . '/edit') }}"><i class="fa fa-edit" style="width: 18px;font-size: 20px;color: rgb(133,136,150);"></i></a>
                        </td>
                        <td>
                            <form action="{{ route('Admin.destroy',$Account->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background-color: #fff">
                                    <i class="fa fa-trash-o" style="width: 18px;font-size: 20px;color: rgb(133,136,150);"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr></tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
            </div>
            <div class="col-md-6">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection