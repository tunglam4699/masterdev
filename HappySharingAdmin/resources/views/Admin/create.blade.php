@extends('Admin.layout')

@section('content')
<div class="card shadow">
    <div class="card-header py-3 d-flex">
        <a href="{{ URL::to('Admin') }}" style="margin-right: 20px;">Back</a>
        <p class="text-primary m-0 font-weight-bold">New User</p>
    </div>
    <div class="card-body">
        <form action="{{ route('Admin.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name='username' class="form-control">
            </div>
            <div class="form-group">

                <label for="password">Password</label>
                <input type="text" name='password' class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name='name' class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name='phone' class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Role </label>
                <!-- <select class="form-control" id="exampleFormControlSelect1">
                                        <option name="0">0</option>
                                        <option name="1">1</option>
                                    </select> -->
                <input type="text" name='role' class="form-control">
                <div class="form-group">
                    <label for="payment">Payment</label>
                    <input type="text" name='payment' class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="customFile">Avatar</label>
                <input type="file" class="form-control-file" id="customFile" name="avatar" />
            </div>
            <button type="submit" class="btn btn-primary" style="width:100px;">Add</button>
        </form>
    </div>
</div>
@endsection