@extends('template')

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Detalhes do blog</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><a href="{{route("blog")}}">Blog</a></li>
                        <li>Detalhes do blog</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start blog-with-sidebar -->
    <section class="blog-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-7 col-md-8 blog-single-content">
                    <div class="post">
                        <div class="media">
                            <img src="{{url("assets/images/blog/chuvas.jpg")}}" alt class="img img-responsive">
                        </div>
                        <div class="post-title-meta">
                            <h2 style="text-align: justify;">PREPARANDO-SE PARA A ÉPOCA CHUVOSA: Município limpa valas de drenagem com id {{$id}}</h2>
                            <ul>
                                <li><a href="#">Publicado por: DennyLson  Sebastiao</a></li>
                                <li><a href="#">22/11/2021</a></li>
                            </ul>
                        </div>
                        <div class="post-body">
                            <p>O PROCESSO de manutenção das valas de drenagem acaba de ser activado na cidade da Beira, com vista a permitir maior vazão das águas pluviais nesta época chuvosa e ciclónica, que decorre de Outubro a Março.</p>
                            <p>Basicamente, a edilidade pretende reduzir eventuais impactos multiplicadores das inundações que, ciclicamente, fustigam a urbe, construída abaixo do nível médio das águas do mar.</p>
                            <p>O Conselho Municipal da Beira, através dos Serviços Autónomos de Saneamento (SASB), também está a proceder à abertura das valas de drenagem em todos os 26 bairros periféricos.</p>
                        </div>
                    </div> <!-- end post -->
                </div> <!-- end blog-content -->

                <div class="blog-sidebar col col-lg-4 col-lg-offset-1 col-md-2 col-sm-5">
                    <div class="widget recent-post-widget">
                        <h3>Posts Recentes</h3>
                        <ul>
                            <li>
                                <div class="post-pic">
                                    <img src="{{url("assets/images/blog/desastre.jpg")}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Mais de 300 mil pessoas em risco de desastres naturais</a></h4>
                                    <span>02/11/2021</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-pic">
                                    <img src="{{url("assets/images/blog/chuvas.jpg")}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">PREPARANDO-SE PARA A ÉPOCA CHUVOSA: Município limpa valas de drenagem</a></h4>
                                    <span>02/11/2021</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-pic">
                                    <img src="{{url("assets/images/blog/albufeira.jpg")}}" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="#">Albufeira de Chipembe incrementa a agricultura</a></h4>
                                    <span>02/11/2021</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>                    
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-with-section -->
@endsection