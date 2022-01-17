@extends('layouts.backend.app')
@push('header')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')

    <div class="col-lg-9 col-12 col-sm-12 col-12 pe-0">
        <div class="col-md-12">
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
        </div>
        <div class="dasboard-content-side">
            {{-- <div class="row"> --}}
            <div class="my-listing-Dashboard">
                <table id="addManageTable"
                    class="table table-striped table-bordered add-manage-table table demo footable-loaded footable"
                    data-filter="#filter" data-filter-text-only="true">
                    <thead>
                        <tr>
                            <th class="photo"><i class="fa fa-camera pe-2" aria-hidden="true"></i>Photos</th>
                            <th data-sort-ignore="true"><i class="fa fa-address-card-o pe-2" aria-hidden="true"></i>Ads
                                Details</th>
                            <th data-type="numeric"><i class="fa fa-usd pe-2" aria-hidden="true"></i>Price</th>
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
                                        <img src=" {{ asset('/image/' . $postimage) }}" height="50px" width="30%">
                                        <?php } ?>
                                    </div>
                                </td>
                                <td style="width:40%" class="ads-details-td">
                                    <div class="ads-detail">
                                        <h4 title="Sony Xperia TX ">{{ $postitem->title }}</h4>
                                        <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                            </span> {{ date('d M Y - H:i:s', $postitem->created_at->timestamp) }}
                                        </p>
                                        <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
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
                                        <p><a href="{{ $postitem->id }}" class="edits-in"> <i
                                                    class="fas fa-pen"></i> Edit </a> </p>
                                        <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                    aria-hidden="true"></i>
                                                View </a></p>
                                        <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                    aria-hidden="true"></i> Delete </a></p>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        {{-- <tr>
                            <td style="width:20%" class="add-img-td">
                                <div class="sub-prper"><img class="thumbnail  img-fluid" src="img/Layer-112.jpg"
                                        alt="img"></div>
                            </td>
                            <td style="width:40%" class="ads-details-td">
                                <div class="ads-detail">
                                    <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                    <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                        </span>02-Oct-2019, 04:38 PM </p>
                                    <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                        </span>New York Avenue, New York</p>
                                </div>
                            </td>
                            <td style="width:10%" class="price-td">
                                <div>
                                    <p>$260
                                </div>
                            </td>
                            <td style="width:14%;" class="active-status">
                                <div><a href="#" class="btn btn-primary">Active</a></div>
                            </td>
                            <td style="width: 16%;" class="action-td">
                                <div class="editser-optins">
                                    <p><a href="" class="edits-in"> <i class="fas fa-pen"></i> Edit </a> </p>
                                    <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1" aria-hidden="true"></i>
                                            View </a></p>
                                    <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                aria-hidden="true"></i> Delete </a></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:20%" class="add-img-td">
                                <div class="sub-prper"><img class="thumbnail  img-fluid" src="img/Layer-112.jpg"
                                        alt="img"></div>
                            </td>
                            <td style="width:40%" class="ads-details-td">
                                <div class="ads-detail">
                                    <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                    <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                        </span>02-Oct-2019, 04:38 PM </p>
                                    <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                        </span>New York Avenue, New York</p>
                                </div>
                            </td>
                            <td style="width:10%" class="price-td">
                                <div>
                                    <p>$260
                                </div>
                            </td>
                            <td style="width:14%;" class="active-status">
                                <div><a href="#" class="btn btn-primary">Active</a></div>
                            </td>
                            <td style="width: 16%;" class="action-td">
                                <div class="editser-optins">
                                    <p><a href="" class="edits-in"> <i class="fas fa-pen"></i> Edit </a> </p>
                                    <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1" aria-hidden="true"></i>
                                            View </a></p>
                                    <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                aria-hidden="true"></i> Delete </a></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:20%" class="add-img-td">
                                <div class="sub-prper"><img class="thumbnail  img-fluid" src="img/Layer-112.jpg"
                                        alt="img"></div>
                            </td>
                            <td style="width:40%" class="ads-details-td">
                                <div class="ads-detail">
                                    <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                    <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                        </span>02-Oct-2019, 04:38 PM </p>
                                    <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                        </span>New York Avenue, New York</p>
                                </div>
                            </td>
                            <td style="width:10%" class="price-td">
                                <div>
                                    <p>$260
                                </div>
                            </td>
                            <td style="width:14%;" class="active-status">
                                <div><a href="#" class="btn btn-primary">Active</a></div>
                            </td>
                            <td style="width: 16%;" class="action-td">
                                <div class="editser-optins">
                                    <p><a href="" class="edits-in"> <i class="fas fa-pen"></i> Edit </a> </p>
                                    <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1" aria-hidden="true"></i>
                                            View </a></p>
                                    <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                aria-hidden="true"></i> Delete </a></p>
                                </div>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
                <div class="major-button mx-auto text-center">
                    <div class="pagination-list">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li><a class="# d-flex" href="#" aria-label="Previous"><span><i
                                                class="fa fa-angle-left" aria-hidden="true"></i></span></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li><a class="# d-flex" href="#" aria-label="Next"><span><i class="fa fa-angle-right"
                                                aria-hidden="true"></i></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- </div> --}}

        </div>
    </div>
    <div class="dasboard-copy-right d-flex justify-content-between">
        <div>
            <p>Copyright © 2021 All Rights Reserved</p>
        </div>
        <div>
            <p>Privacy Policy|Terms and conditions</p>
        </div>
    </div>
    </div>

    @push('footer')
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

        {!! Toastr::message() !!}
    @endpush
@endsection
