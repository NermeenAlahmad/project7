@extends('admin-dashboard.layouts.master')
@section('content')

<div class="card-body">
    <h5>Form controls</h5>
    <hr>
    <div class="row">
        <div class="col-md-6">

            <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="admin_name">Admin Name</label>
                    <input type="text" class="form-control" name="admin_name">
                </div>

                <div class="form-group">
                    <label> Admin Email </label>
                    <input type="email" class="form-control" name="admin_email">
                </div>

                <div class="form-group">
                    <label>Admin Phone</label>
                    <input type="text" class="form-control" name="admin_phone">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="admin_password">
                </div>

                <div class="form-group">
                    <label>Admin Image</label>
                    <input type="file" class="form-control" name="admin_image">
                </div>

                <div class="form-group">
                    <label>Admin Token</label>
                    <input type="text" class="form-control" name="admin_token">
                </div>

                <label> Admin Role</label>
                <select class="form-control" name="admin_role">
                    <option value="0">Admin</option>
                    <option value="1">SuberAdmin</option>
                </select>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5> Admin Table</h5>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Admin Name</th>
                                <th>Admin Email</th>
                                <th>Admin Phone</th>
                                <th>Admin Password</th>
                                <th>Admin Image</th>
                                <th>Admin Token</th>
                                <th>Admin Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $admins as $admin )
                            <tr>
                                <th scope="row">{{$admin->id}}</th>
                                <td>{{$admin->admin_name}}</td>
                                <td>{{$admin->admin_email}}</td>
                                <td>{{$admin->admin_number}}</td>
                                <td>{{$admin->admin_password}}</td>
                                <td>{{$admin->admin_image}}</td>
                                <td>{{$admin->admin_token}}</td>
                                <td>{{$admin->admin_role}}</td>
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
