@extends('layouts.backend.app')
@push('header')
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
    <style>
        button#pls {
            margin-top: 5px;
            margin-left: 30px;
            padding: 3px;
            width: 30px;
            height: 30px;
        }

    </style>
    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pe-0">
        <div class="dasboard-content-side">
            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        {{-- <div class="col-md-12">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div calss="alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="badge badge-pill badge-danger">Error</span>{{ $error }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                        </div> --}}
                        <div class="col-md-12">
                            <div class="card">
                                <div class="col-md-3">
                                    <button id="pls" type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                        data-target="#createModal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Created_At</th>
                                                <th>Updated_At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key => $category)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td> {{ date('d M Y - H:i:s', $category->created_at->timestamp) }}
                                                    </td>
                                                    <td> {{ date('d M Y - H:i:s', $category->updated_at->timestamp) }}
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="" data-toggle="modal"
                                                            data-target="#viewModal-{{ $category->id }}">
                                                            <i class="fa fa-eye pe-1"></i>
                                                        </button>

                                                        <button type="button" class="" data-toggle="modal"
                                                            data-target="#editModal-{{ $category->id }}">
                                                            <i class="fas fa-pen"></i>
                                                        </button>
                                                        <button type="button" class="" data-toggle="modal"
                                                            data-target="#deleteModal-{{ $category->id }}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="animated">
                    <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Create Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.category.store') }}" method="post" id="createcategory"
                                        enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label">Name</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name" name="name" placeholder="Cetegory"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label">Discription</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <Textarea id="description" name="description" placeholder="Textarea"
                                                    class="form-control" row="2"></Textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label">Category Image</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="image" name="image" class="form-control">
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label">Icon Image</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="icon-image" name="iconimage" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-md"
                                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                 document.getElementById('createcategory').submit();">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                        <div class="modal fade" id="viewModal-{{ $category->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">View</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label
                                                            class=" form-control-label">Name</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static">{{ $category->name }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Created
                                                            At</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static">{{ $category->created_at }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Updated
                                                            At</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static">{{ $category->updated_at }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">
                                                            Description</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static">{{ $category->description }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">
                                                            icon Image</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <img src="{{ asset('storage/cat_icon/' . $category->iconimage) }}"
                                                            alt="{{ $category->iconimage }}"
                                                            style="width:100px; height:50px;" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <img src="{{ asset('storage/category/' . $category->image) }}"
                                                    alt="{{ $category->image }}" style="width:300px; height:200px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editModal-{{ $category->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Edit category</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.category.update', $category->id) }}" method="post"
                                            id="editcategory-{{ $category->id }}" enctype="multipart/form-data"
                                            class="form-horizontal">
                                            @csrf
                                            @method('PUT')
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name"
                                                        value="{{ $category->name }}" placeholder="Cetegory"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">Discription</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <Textarea id="name" name="description" placeholder="Discription"
                                                        class="form-control"
                                                        row="2">{{ $category->description }}</Textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">Category Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" name="image" class="form-control">
                                                </div>
                                            </div><br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">Icon Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="icon-image" name="iconimage"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-md"
                                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                    document.getElementById('editcategory-{{ $category->id }}').submit();">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="deleteModal-{{ $category->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="staticModalLabel" data-backdrop="static" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticModalLabel">Delete category</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            The category will be deleted !!
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger"
                                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                document.getElementById('deletecategory-{{ $category->id }}').submit();">Confirm</button>
                                        <form action="{{ route('admin.category.destroy', $category->id) }}"
                                            style="display: none" id="deletecategory-{{ $category->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- .content -->
                </div>


            </div>
        </div>
    </div>
    @push('footer')
        <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
        <script>
            $(document).ready(function() {

                (function($) {

                    $('#filter').keyup(function() {

                        var rex = new RegExp($(this).val(), 'i');
                        $('.searchable tr').hide();
                        $('.searchable tr').filter(function() {
                            return rex.test($(this).text());
                        }).show();

                    })

                }(jQuery));

            });
        </script>
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    @endpush

@endsection
