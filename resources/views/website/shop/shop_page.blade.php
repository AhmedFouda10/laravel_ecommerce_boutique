@extends('layouts.app')

@section('content')
<div class="container">
    <!-- HERO SECTION-->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
          <div class="col-lg-6">
            <h1 class="h2 text-uppercase mb-0">Shop</h1>
          </div>
          <div class="col-lg-6 text-lg-right">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <div class="container p-0">
        <div class="row">
          <!-- SHOP SIDEBAR-->
          <div class="col-lg-3 order-2 order-lg-1">
            <h5 class="text-uppercase mb-4">Categories</h5>
            @foreach ($categories  as $category)
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">{{$category->name}}</strong></div>
                <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
                    @foreach ($products as $pro)
                        @if ($pro['category_id']== $category['id'])
                            <li class="mb-2"><a class="reset-anchor" href="{{route('shop.name',$pro->name)}}">{{$pro->name}}</a></li>
                        @endif
                    @endforeach
                </ul>
            @endforeach


            <h6 class="text-uppercase mb-4">Price range</h6>
            <div class="price-range pt-4 mb-5">
              <div id="range"></div>
              <div class="row pt-2">
                <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
                <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">To</strong></div>
              </div>
            </div>
            <h6 class="text-uppercase mb-3">Show only</h6>
            <div class="custom-control custom-checkbox mb-1">
              <input class="custom-control-input" id="customCheck1" type="checkbox">
              <label class="custom-control-label text-small" for="customCheck1">Returns Accepted</label>
            </div>
            <div class="custom-control custom-checkbox mb-1">
              <input class="custom-control-input" id="customCheck2" type="checkbox">
              <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
            </div>
            <div class="custom-control custom-checkbox mb-1">
              <input class="custom-control-input" id="customCheck3" type="checkbox">
              <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
            </div>
            <div class="custom-control custom-checkbox mb-1">
              <input class="custom-control-input" id="customCheck4" type="checkbox">
              <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
            </div>
            <div class="custom-control custom-checkbox mb-1">
              <input class="custom-control-input" id="customCheck5" type="checkbox">
              <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input class="custom-control-input" id="customCheck6" type="checkbox">
              <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
            </div>
            <h6 class="text-uppercase mb-3">Buying format</h6>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
              <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
              <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
              <label class="custom-control-label text-small" for="customRadio3">Auction</label>
            </div>
            <div class="custom-control custom-radio">
              <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
              <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
            </div>
          </div>
          <!-- SHOP LISTING-->
          <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="row mb-3 align-items-center">
              <div class="col-lg-6 mb-2 mb-lg-0">
                <p class="text-small text-muted mb-0">Showing 1–12 of 53 results</p>
              </div>
              <div class="col-lg-6">
                <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                  <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th-large"></i></a></li>
                  <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th"></i></a></li>
                  <li class="list-inline-item">
                    <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                      <option value="default">Default sorting</option>
                      <option value="popularity">Popularity</option>
                      <option value="low-high">Price: Low to High</option>
                      <option value="high-low">Price: High to Low</option>
                    </select>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row">
              <!-- PRODUCT-->

              @foreach ($products as $pro)

              <div class="col-lg-4 col-sm-6">
                <div class="product text-center">
                  <div class="mb-3 position-relative">
                    <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="{{asset('backend/assets/images/products/'.$pro->image)}}" alt="..."></a>
                    <div class="product-overlay">
                      <ul class="mb-0 list-inline">
                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                        <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <h6> <a class="reset-anchor" href="detail.html">{{$pro->name}}</a></h6>
                  <p class="small text-muted">${{$pro->price}}</p>
                </div>
              </div>


              @endforeach;

            </div>
            <!-- PAGINATION-->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center justify-content-lg-end">
                <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    @for ($i=1; $i <=ceil($lengthPage/3) ; $i++)
                    <li class="page-item active"><a class="page-link" href="{{route('shop.page',$i)}}"><?php echo $i ?></a></li>

                    @endfor
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
              </ul>
              {{-- {{ $products->links() }} --}}
            </nav>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
