@extends('template')

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Loja</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li>Loja</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start products-section -->
    <section class="products-section shop section-padding">
        <div class="container">
            <div class="row products-grids">

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="{{url("assets/images/shop/img-5.jpg")}}" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="{{url("assets/images/shop/icons/icon-11.png")}}" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="23" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="{{url("assets/images/shop/icons/icon-2.png")}}" alt></a>
                                    </button> 
                                </div>
                                <div>
                                    <a href="#"><img src="{{url("assets/images/shop/icons/icon-33.png")}}" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Painel Solar 300W</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 16 000.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="{{url("assets/images/shop/img-6.jpg")}}" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="{{url("assets/images/shop/icons/icon-1.png")}}" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="59" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="{{url("assets/images/shop/icons/icon-2.png")}}" alt></a>
                                    </button> 
                                </div>
                                <div>
                                    <a href="#"><img src="{{url("assets/images/shop/icons/icon-3.png")}}" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Contactor CJX2-1210 </a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 2 500.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="{{url("assets/images/shop/img-7.jpg")}}" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="{{url("assets/images/shop/icons/icon-1.png")}}" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="75" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="{{url("assets/images/shop/icons/icon-2.png")}}" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="{{url("assets/images/shop/icons/icon-3.png")}}" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Contactor Chint NC1-09</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 1 700.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="assets/images/shop/img-8.jpg" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-1.png" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="110" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="assets/images/shop/icons/icon-2.png" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-3.png" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Painel Solar 290W</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 15 500.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="assets/images/shop/img-10.jpg" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-1.png" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="85" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="assets/images/shop/icons/icon-2.png" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-3.png" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Estabilizador de tensão Stavol</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 5 700.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="assets/images/shop/img-11.jpg" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-1.png" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="71" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="assets/images/shop/icons/icon-2.png" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-3.png" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Painel Solar 280W</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 13 500.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="assets/images/shop/img-12.jpg" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-1.png" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="88" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="assets/images/shop/icons/icon-2.png" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-3.png" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Painel Solar 290W</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 15 500.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="assets/images/shop/img-9.jpg" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-1.png" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="105" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="assets/images/shop/icons/icon-2.png" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-3.png" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Estabilizador de tensão AG15H</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 10 300.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="assets/images/shop/img-13.jpg" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-1.png" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="65" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="assets/images/shop/icons/icon-2.png" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-3.png" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="#">Fotocélula 16A</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 3 200.00</span>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-xs-6">
                    <div class="grid">
                        <div class="img-holder-info-list">
                            <div class="img-holder">
                                <img src="assets/images/shop/img-14.jpg" alt class="img img-responsive">
                            </div>
                            <div class="info-list">
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-1.png" alt></a>
                                </div>
                                <div>
                                    <button class="addCard" type="submit" value="165" style="border:none; background-color: #051829; height: 45px; width:45px; ">
                                        <img src="assets/images/shop/icons/icon-2.png" alt></a>
                                    </button>
                                </div>
                                <div>
                                    <a href="#"><img src="assets/images/shop/icons/icon-3.png" alt></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3><a href="{{url("shop/product/5")}}">Motor AC trifásico 2.2kW 3hp</a></h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span class="price">MZN 42 750.00</span>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="pagination-wrapper">
                <nav aria-label="Navegação de página exemplo">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Próximo</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end products-section -->
@endsection