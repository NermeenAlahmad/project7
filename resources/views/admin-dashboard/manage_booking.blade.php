@extends('admin-dashboard.layouts.master')
@section('content')

<div class="card-body">
    <h5>Form controls</h5>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label>Book Price</label>
                    <input type="text" class="form-control" name="category_name">
                </div>

                <div class="form-group">
                    <label> Book Status </label>
                    <input type="file" class="form-control" name="category_image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5> Admin Booking</h5>
                <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Book Price</th>
                                <th>Book Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
