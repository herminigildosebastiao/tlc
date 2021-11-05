@extends('site.template')

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Sobre nós</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li>Sobre nós</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start offer -->
    <section class="section-padding offer-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s3">
                        <h2>Bem vindo a Tel Consultores, Lda</h2>
                    </div>                        
                    <div class="offer-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="offer-pic">
                        <img src="{{url("assets/images/offer-pic.jpg")}}" alt>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end offer -->  


    <!-- start cta -->
    <section class="cta section-padding parallax" data-bg-image="{{url("assets/images/cta-bg.jpg")}}">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Nossa única prioridade é a <span>satisfação do cliente</span></h2>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta -->


    <!-- start features --> 
    <section class="features section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="features-title">
                        <h2>Por que somos os melhores</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-people"></i>
                        </div>
                        <div class="details">
                            <h3>Tecnicos, Engenheiros & Especialistas</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-support"></i>
                        </div>
                        <div class="details">
                            <h3>Suporte ao cliente</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-time-passing"></i>
                        </div>
                        <div class="details">
                            <h3>Entrega na hora</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
                            <!--a href="#" class="more">Details <i class="fa fa-angle-right"></i></a-->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section> 
    <!-- end features -->


    <!-- start our-team -->
    <section class="our-team our-team-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s5">
                        <h2>Representantes</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="team-slider team-grids">
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{url("assets/images/team/img-1.jpg")}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Malcolm Marshall</h3>
                                <p>Director of the board</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{url("assets/images/team/img-2.jpg")}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Stephen King</h3>
                                <p>Director of the board</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{url("assets/images/team/img-3.jpg")}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Michelle Conroy</h3>
                                <p>Director of the board</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="{{url("assets/images/team/img-1.jpg")}}" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Malcolm Marshall</h3>
                                <p>Director of the board</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- end container -->
    </section>
    <!-- end our-team -->


    <!-- start fun-fact -->
    <section class="fun-fact">
        <div class="container">
            <div class="row start-count">
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="1200">00</span><span>+</span></h3>
                        <span class="fact-title">Projetos</span>
                        <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="800">00</span><span>+</span></h3>
                        <span class="fact-title">Clientes</span>
                        <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="99.5">00</span><span>%</span></h3>
                        <span class="fact-title">Satisfação</span>
                        <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end fun-fact -->
@endsection