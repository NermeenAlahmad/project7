@extends('admin-dashboard.layouts.master')
@section('content')

<div class="card-body">
    <h5>Form controls</h5>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="admin_name">Admin Name</label>
                    <input type="text" class="form-control" id="admin_name" aria-describedby="admin_name">
                </div>

                <div class="form-group">
                    <label> Admin Email </label>
                    <input type="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Admin Phone</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label> Admin Password </label>
                    <input type="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Admin Image</label>
                    <input type="file" class="form-control">
                </div>

                <div class="form-group">
                    <label>Admin Token</label>
                    <input type="text" class="form-control">
                </div>

                <label> Admin Role</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                </select>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5> Admin Table</h5>
                <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
