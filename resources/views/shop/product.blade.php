@extends('template')

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Detalhes do produto</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><a href="{{route("shop")}}">Loja</a></li>
                        <li>Detalhes do produto</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start sop-details-main-content -->
    <section class="shop-details-main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-6">
                    <div class="shop-single-slider-wrapper">
                        <div class="slider-for">
                            <div><img src="{{url("assets/images/shop/img-14.jpg")}}" class="img img-responsive" alt></div>
                            <div><img src="{{url("assets/images/shop/img-13.jpg")}}" class="img img-responsive" alt></div>
                            <div><img src="{{url("assets/images/shop/img-11.jpg")}}" class="img img-responsive" alt></div>
                        </div>
                        <div class="slider-nav">
                            <div><img src="{{url("assets/images/shop/img-14.jpg")}}" class="img img-responsive" alt></div>
                            <div><img src="{{url("assets/images/shop/img-13.jpg")}}" class="img img-responsive" alt></div>
                            <div><img src="{{url("assets/images/shop/img-11.jpg")}}" class="img img-responsive" alt></div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-6">
                    <div class="product-details">
                        <h2>Motor AC trifásico 2.2kW 3hp com `id = {{$id}}`</h2>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="price">
                            <span class="current">MZN 47 500.00</span>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div> <!-- end product details -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of sop-details-main-content -->
@endsection