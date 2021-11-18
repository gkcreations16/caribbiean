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
    <div class="col-md-9 col-sm-10 col-10 pe-0">
        <div class="dasboard-content-side">
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="col-md-3">
                                    <button id="pls" type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                        data-target="#createModal">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div class="my-listing-Dashboard">
                                    <table id="addManageTable"
                                        class="table table-striped table-bordered add-manage-table table demo footable-loaded footable"
                                        data-filter="#filter" data-filter-text-only="true">
                                        <thead>
                                            <tr>
                                                <th class="photo"><i class="fa fa-camera pe-2"
                                                        aria-hidden="true"></i>Photos</th>
                                                <th data-sort-ignore="true"><i class="fa fa-address-card-o pe-2"
                                                        aria-hidden="true"></i>Ads
                                                    Details</th>
                                                <th data-type="numeric"><i class="fa fa-usd pe-2"
                                                        aria-hidden="true"></i>Price</th>
                                                <th><i class="fa fa-spinner pe-2" aria-hidden="true"></i>Ad Status</th>
                                                <th><i class="fa fa-cog pe-2" aria-hidden="true"></i>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $postitem)
                                                <tr>
                                                    <td style="width:20%" class="add-img-td">
                                                        <div class="sub-prper">
                                                            <?php foreach (json_decode($postitem->image)  as $postimage) {?>
                                                            <img src=" {{ asset('/image/' . $postimage) }}" height="50px"
                                                                width="30%">
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                    <td style="width:40%" class="ads-details-td">
                                                        <div class="ads-detail">
                                                            <h4 title="Sony Xperia TX ">{{ $postitem->title }}</h4>
                                                            <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                                </span>
                                                                {{ date('d M Y - H:i:s', $postitem->created_at->timestamp) }}
                                                            </p>
                                                            <p><span><i class="fa fa-map-marker pe-2"
                                                                        aria-hidden="true"></i>
                                                                </span>{{ $postitem->address }}</p>
                                                        </div>
                                                    </td>
                                                    <td style="width:10%" class="price-td">
                                                        <div>
                                                            <p>${{ $postitem->price }}
                                                        </div>
                                                    </td>
                                                    <td style="width:14%;" class="active-status">
                                                        <div><a href="#" class="btn btn-primary">Active</a></div>
                                                    </td>
                                                    <td style="width: 16%;" class="action-td">
                                                        <div class="editser-optins">
                                                            <p>
                                                                <a href="{{ $postitem->id }}" data-toggle="modal"
                                                                    data-target="#editModal-{{ $postitem->id }}"> <i
                                                                        class="fas fa-pen"></i> Edit </a>
                                                            </p>
                                                            <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                                        aria-hidden="true"></i>
                                                                    View </a></p>
                                                            <p><a href="" data-toggle="modal"
                                                                    data-target="#deleteModal-{{ $postitem->id }}"> <i
                                                                        class="fa fa-times pe-1" aria-hidden="true"></i>
                                                                    Delete </a></p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="major-button mx-auto text-center">
                                        <div class="pagination-list">
                                            {!! $posts->links() !!}
                                            {{-- <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center">
                                                    <li><a class="# d-flex" href="#" aria-label="Previous"><span><i
                                                                    class="fa fa-angle-left"
                                                                    aria-hidden="true"></i></span></a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a>
                                                    </li>
                                                    <li><a class="# d-flex" href="#" aria-label="Next"><span><i
                                                                    class="fa fa-angle-right"
                                                                    aria-hidden="true"></i></span></a></li>
                                                </ul>
                                            </nav> --}}
                                        </div>
                                    </div>
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
                                    <h5 class="modal-title" id="mediumModalLabel">Adds Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.addpost.store') }}" method="post" id="createPost"
                                        enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        <div class="post-ad-user-form-iner">
                                            <div class="headings-user-form-page">
                                                <h5>Basic Information</h5>
                                                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label>Listing Title</label>
                                                    <input type="text" class="form-control" name="title"
                                                        placeholder="Post Title" aria-label="Post Title">
                                                </div>
                                                <div class=" col-sm-6 col-12">
                                                    <label>Type / Category</label>
                                                    <select class="form-select category" aria-label="Default select example"
                                                        name="category" id="" placeholder="Please select">
                                                        <option value="0" disabled="true" selected="true">-Select-</option>
                                                        @foreach ($categorys as $category)
                                                            <option selected value="{{ $category->name }}">
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                {{-- <div class="col-sm-6 col-12">
                                                    <label>Sub Category <label>
                                                            <select class="form-select formselect subcategory "
                                                                aria-label="Default select example"
                                                                placeholder="Select Sub Category">
                                                            </select>
                                                </div> --}}
                                                <div class="col-sm-6 col-12">
                                                    <label>Sub Category</label>
                                                    <select class="form-select subcategory" placeholder="Please select">
                                                        <option value="0" disabled="true" selected="true">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-ad-user-form-iner">
                                            <div class="headings-user-form-page">
                                                <h5>Location</h5>
                                                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <label>City</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="city">
                                                        <option selected="">Select </option>
                                                        <option value="Ludhiana">Ludhiana</option>
                                                        <option value="Moga">Moga</option>
                                                        <option value="Khanna">Khanna</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" aria-label="address name"
                                                        name="address">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>State</label>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="state">
                                                        <option selected="">Select </option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Mumbai">Mumbai</option>
                                                        <option value="Punjab">Punjab</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Zip-Code</label>
                                                    <input type="text" class="form-control" name="zipcode"
                                                        placeholder="Zip Code" aria-label="Zip Code">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-ad-user-form-iner">
                                            <div class="headings-user-form-page">
                                                <h5>Gallery</h5>
                                                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="field" align="center">
                                                <h4>Please Add Images of Your</h4>
                                                <input type="file" id="files" class="d-none"
                                                    onchange="image_select()" name="image[]" multiple="">
                                                <button class="btn btn-sm btn-primary" type="button"
                                                    onclick="document.getElementById('files').click()">SELECT FILES</button>
                                                <p>Maximum upload file size: 500 KB</p>
                                            </div>
                                        </div>

                                        <div class="post-ad-user-form-iner">
                                            <div class="headings-user-form-page">
                                                <h5>Detail</h5>
                                                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label>Deccription</label>
                                                    <textarea class="form-control" id="validationDefault05" required=""
                                                        name="description"></textarea>
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <label>Email Address: (optional)</label>
                                                    <input type="email" class="form-control" aria-label="email"
                                                        name="email">
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <label>Website: (optional)</label>
                                                    <input type="text" class="form-control" aria-label="website"
                                                        name="website">
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <label>Phone: (optional)</label>
                                                    <input type="text" class="form-control" aria-label="mobile"
                                                        name="telephone">
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <label>Facebook: (optional)</label>
                                                    <input type="text" class="form-control" aria-label="fb_link"
                                                        name="fb_link">
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <label>Twitter: (optional)</label>
                                                    <input type="text" class="form-control" aria-label="twitter_link"
                                                        name="twitter_link">
                                                </div>
                                                <div class="col-sm-4 col-12">
                                                    <label>Linkedin: (optional)</label>
                                                    <input type="text" class="form-control" aria-label="linkedind_link"
                                                        name="linkedind_link">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-ad-user-form-iner">
                                            <div class="headings-user-form-page">
                                                <h5>Features</h5>
                                                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="all-features">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox1" name="aircondition"> <label
                                                                    for="one">Air
                                                                    conditioning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox2" name="hometheter"> <label
                                                                    for="two">Home Theater</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox4" name="homedelivery"> <label
                                                                    for="three">Home Delivery
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox5" name="roomservice"> <label
                                                                    for="four">Room service</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox6" name="electric"> <label
                                                                    for="five">Electric</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox7" name="security"> <label
                                                                    for="six">Security</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox8" name="balcony"> <label
                                                                    for="seven">Balcony
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox9" name="parking"> <label
                                                                    for="eight">Parking
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox10" name="netbanking"> <label
                                                                    for="nine">Net Banking
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox12" name="wifi"> <label
                                                                    for="eleven">Wifi
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="inlineCheckbox1" name="telephone"> <label
                                                                    for="thirteen">Telephone
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-ad-user-form-iner">
                                            <div class="headings-user-form-page">
                                                <h5>Pricing:</h5>
                                                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-12">
                                                <label>Pricing:</label>
                                                <input type="text" class="form-control" placeholder="Price " name="price"
                                                    aria-label="Title">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-md"
                                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                document.getElementById('createPost').submit();">SAVE
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($posts as $postitem)
                </div>
            </div>
        </div>
        <div class="modal fade" id="editModal-{{ $postitem->id }}" tabindex="-1" role="dialog"
            aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Update Posts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.addpost.update', $postitem->id) }}" method="post"
                            id="editcategory-{{ $postitem->id }}" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Basic Information</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Listing Title</label>
                                        <input type="text" class="form-control" value="{{ $postitem->title }}"
                                            name="title" placeholder="Post Title" aria-label="Post Title">
                                    </div>
                                    <?php $options = $postitem->category;
                                    $options2 = $postitem->name; ?>
                                    <div class=" col-sm-6 col-12">
                                        <label>Type / Category</label>
                                        <select class="form-select category" aria-label="Default select example"
                                            name="category" placeholder="Please select">
                                            <option>Please select</option>
                                            @foreach ($categorys as $value)
                                                <option value="{{ $value->name }}"
                                                    {{ $value->name == $options ? 'selected' : '' }}>
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>Sub Category</label>
                                        @if (isset($posts))
                                            <select class="form-select subcategory" aria-label="Default select example"
                                                name="subcategory" placeholder="Please select">
                                                <option value="0" disabled="true" selected="true">{{ $options2 }}
                                                </option>
                                            </select>
                                        @else
                                            <select class="form-select subcategory" aria-label="Default select example"
                                                name="subcategory" placeholder="Please select">
                                                <option value="0" disabled="true" selected="true"></option>
                                            </select>
                                        @endif



                                    </div>
                                </div>
                            </div>
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Location</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <label>City</label>
                                        <select class="form-select" aria-label="Default select example" name="city"
                                            value="{{ $postitem->city }}">
                                            <option selected="">Select </option>
                                            <option value="Ludhiana">Ludhiana</option>
                                            <option value="Moga">Moga</option>
                                            <option value="Khanna">Khanna</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>Address</label>
                                        <input type="text" class="form-control" aria-label="address name" name="address"
                                            value="{{ $postitem->address }}">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>State</label>
                                        <select class="form-select" aria-label="Default select example" name="state">
                                            <option selected="">Select </option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Mumbai">Mumbai</option>
                                            <option value="Punjab">Punjab</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>Zip-Code</label>
                                        <input type="text" class="form-control" value="{{ $postitem->zipcode }}"
                                            name="zipcode" placeholder="Zip Code" aria-label="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Gallery</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="field" align="center">
                                    <h4>Please Add Images of Your</h4>
                                    <?php foreach (json_decode($postitem->image)  as $postimage) {?>
                                    <img src=" {{ asset('/image/' . $postimage) }}" height="50px" width="30%">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Detail</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Deccription</label>
                                        <textarea class="form-control" id="validationDefault05" required=""
                                            name="description">{{ $postitem->description }}</textarea>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Email Address: (optional)</label>
                                        <input type="email" class="form-control" aria-label="email"
                                            value="{{ $postitem->email }}" name="email">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Website: (optional)</label>
                                        <input type="text" class="form-control" aria-label="website"
                                            value="{{ $postitem->website }}" name="website">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Phone: (optional)</label>
                                        <input type="text" class="form-control" value="{{ $postitem->telephone }}"
                                            aria-label="mobile" name="telephone">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Facebook: (optional)</label>
                                        <input type="text" class="form-control" aria-label="fb_link" name="fb_link"
                                            value="{{ $postitem->fb_link }}">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Twitter: (optional)</label>
                                        <input type="text" class="form-control" aria-label="twitter_link"
                                            name="twitter_link" value="{{ $postitem->twitter_link }}">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Linkedin: (optional)</label>
                                        <input type="text" class="form-control" aria-label="linkedind_link"
                                            name="linkedind_link" value="{{ $postitem->linkedind_link }}">
                                    </div>
                                </div>
                            </div>
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Features</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="all-features">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    @if (isset($postitem))
                                                        <input {{ !$postitem->aircondition ? 'checked' : '' }}
                                                            class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            name="aircondition">
                                                        <label for="one">Air
                                                            conditioning</label>
                                                    @else
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox1" name="aircondition"> <label for="one">Air
                                                            conditioning</label>
                                                    @endif
                                                    {{-- <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        name="aircondition"> <label for="one">Air
                                                        conditioning</label> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        name="hometheter"> <label for="two">Home Theater</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                                        name="homedelivery"> <label for="three">Home Delivery
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                                        name="roomservice"> <label for="four">Room service</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                                        name="electric"> <label for="five">Electric</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7"
                                                        name="security"> <label for="six">Security</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                                        name="balcony"> <label for="seven">Balcony
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9"
                                                        name="parking"> <label for="eight">Parking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10"
                                                        name="netbanking"> <label for="nine">Net Banking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12"
                                                        name="wifi"> <label for="eleven">Wifi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        name="telephone"> <label for="thirteen">Telephone
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Pricing:</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="col-12">
                                    <label>Pricing:</label>
                                    <input type="text" class="form-control" placeholder="Price "
                                        value="{{ $postitem->price }}" name="price" aria-label="Title">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             document.getElementById('editcategory-{{ $postitem->id }}').submit();">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModal-{{ $postitem->id }}" tabindex="-1" role="dialog"
            aria-labelledby="staticModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticModalLabel">Delete sub category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            The Post will be deleted !!
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger"
                            onclick="event.preventDefault();
                                                                                                                                                                             document.getElementById('deletecategory-{{ $postitem->id }}').submit();">Confirm</button>
                        <form action="{{ route('admin.addpost.destroy', $postitem->id) }}" style="display: none"
                            id="deletecategory-{{ $postitem->id }}" method="POST">
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

    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function() {
            $('.category').on('change', function() {
                let id = $(this).val();
                $('.subcategory').empty();
                $('.subcategory').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                    type: 'GET',
                    url: 'GetSubCatAgainstMainCat/' + id,
                    success: function(response) {
                        var response = JSON.parse(response);
                        console.log(response);
                        $('.subcategory').empty();
                        $('.subcategory').append(
                            `<option value="0" disabled selected>Select </option>`
                        );
                        response.forEach(element => {
                            $('.subcategory').append(
                                `<option value="${element['id']}">${element['name']}</option>`
                            );
                        });
                    }
                });
            });
        });
    </script>
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
