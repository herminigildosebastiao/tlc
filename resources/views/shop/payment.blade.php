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
                        <li><a href="{{route("shop")}}">Loja</a></li>
                        <li><a href="{{route("cart")}}">Carinho de compra</a></li>
                        <li>Pagamento</li>
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
                <div class="col-lg-6 col-12">
                        <form action="#">
                            <div class="checkbox-form">
                                <h3>Detalhes de cobrança</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Primeiro nome <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Último nome <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Nome da empresa <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Endereço <span class="required">*</span></label>
                                            <input placeholder="Street address" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Província <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Cidade <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Código Postal<span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>E-mail <span class="required">*</span></label>
                                            <input placeholder="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Telefone  <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list create-acc">
                                            <input id="cbox" type="checkbox">
                                            <label for="cbox">Crie a sua conta aqui?</label>
                                        </div>
                                        <div id="cbox-info" class="checkout-form-list create-account">
                                            <p>Crie uma conta inserindo as informações abaixo. Se você é um cliente antigo, faça o login na parte superior da página.</p>
                                            <label>Senha da conta  <span class="required">*</span></label>
                                            <input placeholder="password" type="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                            <h3>Seu pedido</h3>
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">Produtos</th>
                                            <th class="cart-product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                          <td class="cart-product-name"> Contactor CJX2-1210<strong class="product-quantity"> × 1</strong></td>
                                          <td class="cart-product-total"><span class="amount">MZN 2 500.00</span></td>  
                                        </tr>
                                        <tr class="cart_item">
                                          <td class="cart-product-name"> Painel Solar 300W<strong class="product-quantity"> × 1</strong></td>
                                          <td class="cart-product-total"><span class="amount">MZN 16 000.00</span></td>  
                                        </tr>
                                        <tr class="cart_item">
                                          <td class="cart-product-name"> Motor AC trifásico 2.2kW 3hp<strong class="product-quantity"> × 1</strong></td>
                                          <td class="cart-product-total"><span class="amount">MZN 42 750.00</span></td>  
                                        </tr>
                                    </tbody>
                                    
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal do carrinho</th>
                                            <td><span class="amount">MZN 61 250.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total de pedidos</th>
                                            <td><strong><span class="amount">MZN 61 250.00</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion">
                                      <div class="card">
                                        <div class="card-header" id="#payment-1">
                                          <h5 class="panel-title">
                                            <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              M-pesa
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                          <div class="card-body">
                                            <p>Faça o seu pagamento diretamente em nossa conta M-pesa. Use seu ID do pedido como referência de pagamento. Seu pedido não será enviado até que os fundos sejam liberados em nossa conta.</p>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="order-button-payment">
                                        <input value="Place order" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end products-section -->
@endsection

@section('scripts')
    <!-- Meanmenu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- Owl Carousel-2 js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <!-- Counterup -->
    <script src="js/jquery.counterup.mins.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <!-- Main/Activator js -->
    <script src="js/main.js"></script>
@endsection