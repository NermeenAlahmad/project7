@extends('admin-dashboard.layouts.master')
@section('content')

<div class="card-body">
    <h5>Form controls</h5>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="admin_name"> User Name</label>
                    <input type="text" class="form-control" name="user_name">
                </div>

                <div class="form-group">
                    <label> User Email </label>
                    <input type="email" class="form-control" name="user_email">
                </div>

                <div class="form-group">
                    <label> User Phone</label>
                    <input type="text" class="form-control" name="user_number">
                </div>

                <div class="form-group">
                    <label> User Password</label>
                    <input type="password" class="form-control" name="user_password">
                </div>

                <div class="form-group">
                    <label> User Image</label>
                    <input type="file" class="form-control" name="user_image">
                </div>

                <div class="form-group">
                    <label> User Token</label>
                    <input type="text" class="form-control" name="user_token">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5> User Table</h5>
                <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Phone</th>
                                <th>User Password</th>
                                <th>User Image</th>
                                <th>User Token</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->user_name}}</td>
                                <td>{{$user->user_email}}</td>
                                <td>{{$user->user_number}}</td>
                                <td>{{$user->user_password}}</td>
                                <td>{{$user->user_image}}</td>
                                <td>{{$user->user_token}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
