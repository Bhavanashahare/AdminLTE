@extends('layouts.master')
@section('content')
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product Edit</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="{{ route('product.update',$data->id) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Enter Title</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Enter Description</label>
                                    <input type="text" name="description" class="form-control" id="description"
                                        placeholder="Enter description">
                                </div>

                                <div class="form-group">
                                    <label for="image"> image:</label>
                                    <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" value="">
                                </div>
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                          @endforeach
                                         </select>
                                </div>

                                {{-- selected category those we want --}}
                                {{-- <div class="mb-3 col-md-6">
                                    <label class="form-label" for="category">Choose a category<span class="text-danger">
                                            *</span></label>
                                    <select class="form-control" name="category">
                                        <option selected="" disabled="">Choose a category</option>
                                        @foreach ($data as $d)
                                            <option {{ $d['id'] == $data['category'] ? 'selected' : '' }}
                                                value="{{ $d['id'] }}">{{ $d['name'] }}</option>
                                        @endforeach
                                    </select>

                                </div> --}}
                                {{-- end selected category --}}

                            </div>

                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection

