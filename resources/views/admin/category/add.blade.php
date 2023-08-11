@extends('admin.layout.master')
@section('title')
    add Category page
@endsection
@section('title_page')
    add category page
@endsection


@section('content')

    <section class="content">

        <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
       @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">New category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Category Name</label>
                            <input type="text" id="inputName" class="form-control" name="category_name">
                        </div>
                        <div class="form-group">
                            <label for="inputName">plant Number</label>
                            <input type="text" id="inputName" class="form-control" name="planet_no">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose image</label>
                        </div>

                        <div class="form-group">
                            <label for="inputName">short-description</label>
                            <input type="text" id="inputName" class="form-control" name="short_description">
                        </div>
                      
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create New Category" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
@endsection

