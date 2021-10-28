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

        button.btn.btn-primary.btnstyle.mb-1 {
            padding: 7px;
            width: 50px;
            height: 38px;
        }

        button.btn.btn-secondary.btnstyle.mb-1 {
            width: 47px;
            height: 35px;
        }

        button.btn.btn-danger.btnstyle.mb-1 {
            width: 47px;
            height: 35px;
        }

    </style>
    <div class="col-md-9 col-sm-10 col-10 pe-0">
        <div class="dasboard-content-side">
            <div class="content mt-3">
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
                                            @foreach ($subcategories as $key => $sub_category)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $sub_category->name }}</td>
                                                    <td>{{ $sub_category->slug }}</td>
                                                    <td>{{ $sub_category->created_at }}</td>
                                                    <td>{{ $sub_category->updated_at }}</td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btnstyle mb-1"
                                                            data-toggle="modal"
                                                            data-target="#viewModal-{{ $sub_category->id }}">
                                                            <i class="fa fa-eye pe-1"></i>
                                                        </button>

                                                        <button type="button" class="btn btn-secondary btnstyle mb-1"
                                                            data-toggle="modal"
                                                            data-target="#editModal-{{ $sub_category->id }}">
                                                            <i class="fas fa-pen"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger btnstyle mb-1"
                                                            data-toggle="modal"
                                                            data-target="#deleteModal-{{ $sub_category->id }}">
                                                            <i class="fa fa-trash-o"></i>
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
                                    <h5 class="modal-title" id="mediumModalLabel">Create Sub Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.subcategory.store') }}" method="post"
                                        id="createcategory" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label">Name</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name" name="name" placeholder="Sub Cetegory"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class="form-control-label">Sub Category Image</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="image" name="image" class="form-control">
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
                    @foreach ($subcategories as $sub_category)
                        <div class="modal fade" id="viewModal-{{ $sub_category->id }}" tabindex="-1" role="dialog"
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
                                                        <p class="form-control-static">{{ $sub_category->name }}</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Created
                                                            At</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static">{{ $sub_category->created_at }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label class=" form-control-label">Updated
                                                            At</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <p class="form-control-static">{{ $sub_category->updated_at }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-md-6">
                                                <img src="{{ asset('storage/subcategory/' . $sub_category->image) }}"
                                                    alt="{{ $sub_category->image }}"
                                                    style="width:300px; height:200px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editModal-{{ $sub_category->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Edit sub category</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.subcategory.update', $sub_category->id) }}"
                                            method="post" id="editcategory-{{ $sub_category->id }}"
                                            enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            @method('PUT')
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name"
                                                        value="{{ $sub_category->name }}" placeholder="Cetegory"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class="form-control-label">Sub Category Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" name="image" class="form-control">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-md"
                                                onclick="event.preventDefault();
                                                             document.getElementById('editcategory-{{ $sub_category->id }}').submit();">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="deleteModal-{{ $sub_category->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="staticModalLabel" data-backdrop="static" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticModalLabel">Delete sub category</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            The sub category will be deleted !!
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger"
                                            onclick="event.preventDefault();
                                             document.getElementById('deletecategory-{{ $sub_category->id }}').submit();">Confirm</button>
                                        <form action="{{ route('admin.subcategory.destroy', $sub_category->id) }}"
                                            style="display: none" id="deletecategory-{{ $sub_category->id }}"
                                            method="POST">
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
