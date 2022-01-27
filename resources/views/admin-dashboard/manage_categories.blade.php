@extends('admin-dashboard.layouts.master')
@section('content')

<div class="card-body">
    <h5>Form controls</h5>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="category_name">
                </div>

                <div class="form-group">
                    <label>Category Image</label>
                    <input type="file" class="form-control" name="category_image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5> Category Table</h5>
                <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
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
