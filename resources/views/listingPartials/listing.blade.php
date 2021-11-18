 <!---------------------------listing-start----------------------------->
 <div class="listing-wrap top-space bottom-space">
     <div class="small-head-wrap">
         <div class="text-center mx-auto pb-5">
             <h5>Listing</h5>
             <h3>Featured Listing</h3>
             <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-12 col-sm-12">
                 <div class="listing-search">
                     <div class="headings-listing-page">
                         <h5>Search</h5>
                         <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}" class="img-fluid">
                     </div>
                     <div class="drop-down-lists">
                         <ul>
                             <li>
                                 <div class="search-select-category text-start ">
                                     <select class="form-select category" name="category"
                                         aria-label="Default select example">
                                         <option selected>Select Category</option>
                                         @foreach ($categorys as $category)
                                             <option value="{{ $category->name }}">
                                                 {{ $category->name }}
                                             </option>
                                         @endforeach
                                     </select>
                                 </div>
                             </li>
                             <li>
                                 <div class="search-select-category text-start ">
                                     <select class="form-select subcategory" aria-label="Default select example">
                                         <option value="0" disabled="true" selected="true">Select SubCategory
                                         </option>
                                     </select>
                                 </div>
                             </li>
                             <li>
                                 <div class="search-select-category text-start ">
                                     <select class="form-select" aria-label="Default select example">
                                         <option selected>Location</option>
                                         <option value="1">One</option>
                                         <option value="2">Two</option>
                                         <option value="3">Three</option>
                                     </select>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>

                 {{-- <div class="listing-search">
<div class="headings-listing-page">
<h5>Location</h5>
<img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
class="img-fluid">
</div>
<div class="drop-down-lists">
<ul>
<li>
<div class="search-select-category text-start ">
<select class="form-select" aria-label="Default select example">
<option selected>Location</option>
<option value="1">One</option>
<option value="2">Two</option>
<option value="3">Three</option>
</select>
</div>
</li>
</ul>
</div>
</div> --}}

                 <div class="listing-search">
                     <div class="headings-listing-page">
                         <h5>Price Range</h5>
                         <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}" class="img-fluid">
                     </div>
                     <div class="price-ranges">
                         <ul>
                             <li>
                                 <p><span><i class="fa fa-circle" aria-hidden="true"></i><a href="#">$50 and
                                             below</a>
                                     </span></p>
                             </li>
                             <li>
                                 <p><span><i class="fa fa-circle" aria-hidden="true"></i><a href="#">$50 and
                                             below</a>
                                     </span></p>
                             </li>
                             <li>
                                 <p><span><i class="fa fa-circle" aria-hidden="true"></i><a href="#">$50 and
                                             below</a>
                                     </span></p>
                             </li>
                             <li>
                                 <p><span><i class="fa fa-circle" aria-hidden="true"></i><a href="#">$50 and
                                             below</a>
                                     </span></p>
                             </li>
                             <li>
                                 <p><span><i class="fa fa-circle" aria-hidden="true"></i><a href="#">$50 and
                                             below</a>
                                     </span></p>
                             </li>
                             <li>
                                 <p><span><i class="fa fa-circle" aria-hidden="true"></i><a href="#">$50 and
                                             below</a>
                                     </span></p>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-lg-9 col-md-12 col-sm-12">
                 <div class="Search-result-side d-flex justify-content-between">
                     <div class="search-result">
                         <p>Search Results:<span> Showing 1-6 of 20 Listing</span></p>
                     </div>
                     <div class="under-listing-inner">
                         <ul class="nav nav-pills" id="pills-tab" role="tablist">
                             <li class="nav-item" role="presentation"><button class="nav-link active"
                                     id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                                     type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span><img
                                             src="{{ asset('assets/img/Layer-83.png') }}"
                                             class="img-fluid"></span></li>
                             <li class="nav-item" role="presentation"><button class="nav-link"
                                     id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                                     type="button" role="tab" aria-controls="pills-profile"
                                     aria-selected="false"><span><img src="{{ asset('assets/img/Layer-821.png') }}"
                                             class="img-fluid"></span></li>
                         </ul>
                     </div>
                 </div>
                 <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                         <div class="row">
                             @foreach ($posts as $postitem)
                                 <div class="col-md-4 col-sm-6 col-12">
                                     <div class="listing-slide-wrap">
                                         <div class="card border-0 ">
                                             <div class="listinslide-img">
                                                 <?php foreach (json_decode($postitem->image)  as $postimage) {?>
                                                 <img src=" {{ asset('/image/' . $postimage) }}"
                                                     class="img-fluid" class="card-img-top" alt="...">
                                                 <?php } ?>
                                                 <div class="which-name">
                                                     <h5><span><i class="fas fa-utensils"></i></span>
                                                         {{ $postitem->category }}
                                                     </h5>
                                                 </div>
                                             </div>
                                             <div class="card-body">
                                                 <h5 class="card-title">{{ $postitem->title }} </h5>
                                                 <div class="listing-inner-info">
                                                     <ul class="info-list mt-3">
                                                         <li><span class="fas fa-map-marker-alt"></span>
                                                             {{ $postitem->address }}</li>
                                                         <li><span class="fas fa-phone"></span><a
                                                                 href="tel:0000000000">000-000-0000</a></li>
                                                         <li><span class="fas fa-calendar-minus"></span>
                                                             {{ date('d M Y - H:i:s', $postitem->created_at->timestamp) }}
                                                         </li>
                                                     </ul>
                                                 </div>
                                                 <div class="rating d-flex justify-content-between">
                                                     <div>
                                                         <ul>
                                                             <li><i class="fas fa-star"></i></li>
                                                             <li><i class="fas fa-star"></i></li>
                                                             <li><i class="fas fa-star"></i></li>
                                                             <li><i class="fas fa-star"></i></li>
                                                             <li><i class="fas fa-star"></i></li>
                                                         </ul>
                                                     </div>
                                                     <div class="save">
                                                         <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                         </span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                             <div class="col-12">
                                 <div class="major-button mx-auto text-center">
                                     <div class="pagination-list">
                                         {!! $posts->links() !!}
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                         <div class="row">
                             <div class="col-12">
                                 @foreach ($posts as $postitem)
                                     <div class="listing-slide-wrap-2">
                                         <div class="card">
                                             <div class="row g-0">
                                                 <div class="col-md-4">
                                                     <div class="listinslide-img">
                                                         <?php foreach (json_decode($postitem->image)  as $postimage) {?>
                                                         <img src=" {{ asset('/image/' . $postimage) }}"
                                                             class="img-fluid" class="card-img-top" alt="...">
                                                         <?php } ?>
                                                         <div class="which-name">
                                                             <h5><span><i class="fas fa-utensils"></i></span>
                                                                 {{ $postitem->category }}
                                                             </h5>
                                                         </div>
                                                         <div class="item-price">
                                                             <p>
                                                                 ${{ $postitem->price }}
                                                             </p>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-8">
                                                     <div class="card-body">
                                                         <h5 class="card-title">{{ $postitem->title }}
                                                         </h5>
                                                         <div class="listing-inner-info">
                                                             <ul class="info-list mt-3">
                                                                 <li><span
                                                                         class="fas fa-map-marker-alt"></span>{{ $postitem->address }}
                                                                 </li>
                                                                 <li><span class="fas fa-phone"></span><a
                                                                         href="tel:0000000000">000-000-0000</a>
                                                                 </li>
                                                                 <li><span class="fas fa-calendar-minus"></span>
                                                                     {{ date('d M Y - H:i:s', $postitem->created_at->timestamp) }}
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                         <div class="rating d-flex justify-content-between">
                                                             <div>
                                                                 <ul>
                                                                     <li><i class="fas fa-star"></i></li>
                                                                     <li><i class="fas fa-star"></i></li>
                                                                     <li><i class="fas fa-star"></i></li>
                                                                     <li><i class="fas fa-star"></i></li>
                                                                     <li><i class="fas fa-star"></i></li>
                                                                 </ul>
                                                             </div>
                                                             <div class="save">
                                                                 <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                 </span>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                                 <div class="col-12">
                                     <div class="major-button mx-auto text-center">
                                         <div class="pagination-list">
                                             {!! $posts->links() !!}

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
