@extends('template')

@section('style')
    <link href="{{url("assets/style.css")}}" rel="stylesheet">
@endsection

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Carinho de compra</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><a href="{{route("shop")}}" title="">Loja</a></li>
                        <li>Carinho de compra</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start products-section -->
    <section class="products-section shop section-padding">
        <div class="container">
            <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="li-product-thumbnail">imagens</th>
                                            <th class="cart-product-name">Produtos</th>
                                            <th class="li-product-price">Preco unitario</th>
                                            <th class="li-product-quantity">Quantidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="li-product-thumbnail">
                                                <img src="assets/images/shop/img-9.jpg" alt="Li's Product Image" style="width: 70px;">
                                            </td>
                                            <td class="li-product-name">
                                                <a href="#">Estabilizador de tensão AG15H</a>
                                            </td>
                                            <td class="li-product-price">
                                                <span class="amount">MZN 10 300.00</span>
                                            </td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input type="hidden" name="" value="222">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="li-product-thumbnail"><a href="#"><img src="assets/images/shop/img-14.jpg" alt="Li's Product Image" style="width: 70px;"></a></td>
                                            <td class="li-product-name">
                                                <a href="#">Motor AC trifásico 2.2kW 3hp</a>
                                            </td>
                                            <td class="li-product-price">
                                                <span class="amount">MZN 42 750.00</span>
                                            </td>
                                            <td class="quantity">
                                                <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-md-7 mr-auto"></div>
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <a href="{{route("payment")}}">Processar pedido</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div> <!-- end container -->
    </section>
    <!-- end products-section -->
@endsection

@section('scripts')
<script src="{{url("assets/js/jquery.meanmenu.min.js")}}"></script>
<script src="{{url("assets/js/jquery.countdown.min.js")}}"></script>
<!-- Counterup -->
<script src="{{url("assets/js/jquery.counterup.min.js")}}"></script>
<!-- Barrating -->
<!-- ScrollUp js -->
<script src="{{url("assets/js/scrollUp.min.js")}}"></script>
<!-- Main/Activator js -->
<script src="{{url("assets/js/main.js")}}"></script>
@endsection