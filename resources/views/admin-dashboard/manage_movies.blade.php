@extends('admin-dashboard.layouts.master')
@section('content')

<div class="card-body">
    <h5>Form controls</h5>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="admin_name">Movie Name</label>
                    <input type="text" class="form-control" name="movie_name">
                </div>

                <div class="form-group">
                    <label> Movie Rate </label>
                    <input type="email" class="form-control" name="movie_rate">
                </div>

                <div class="form-group">
                    <label>Movie Description</label>
                    <input type="text" class="form-control" name="movie_description">
                </div>

                <div class="form-group">
                    <label> Movie Trailer</label>
                    <input type="password" class="form-control" name="movie_trailer">
                </div>

                <div class="form-group">
                    <label> Movie Image</label>
                    <input type="file" class="form-control" name="movie_image">
                </div>

                <div class="form-group">
                    <label> Movie price</label>
                    <input type="text" class="form-control" name="movie_price">
                </div>

                <div class="form-group">
                    <label> Movie Creation Date </label>
                    <input type="text" class="form-control" name="movie_creation_date">
                </div>

                <div class="form-group">
                    <label> Movie Cinemas </label>
                    <input type="text" class="form-control" name="movie_cinemas">
                </div>

                <div class="form-group">
                    <label> Movie Sale Status </label>
                    <input type="text" class="form-control" name="movie_sale_status">
                </div>

                <div class="form-group">
                    <label> Movie New Price </label>
                    <input type="text" class="form-control" name="movie_new_price">
                </div>

                <div class="form-group">
                    <label> Movie Is New </label>
                    <input type="text" class="form-control" name="movie_is_new">
                </div>

                <div class="form-group">
                    <label> Daily Show </label>
                    <input type="text" class="form-control" name="movie_daily_show">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5> Movies Table</h5>
                <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Movie Name</th>
                                <th>Movie Rate</th>
                                <th>Movie Description</th>
                                <th>Movie Trailer</th>
                                <th>Movie Image</th>
                                <th>Movie price</th>
                                <th>Movie Creation Date</th>
                                <th>Movie Cinemas</th>
                                <th>Movie Sale Status</th>
                                <th>Movie Creation Date</th>
                                <th>Movie New Price</th>
                                <th>Movie Is New</th>
                                <th>Daily Show</th>
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
