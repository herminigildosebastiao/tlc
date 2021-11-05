@extends('template')

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Blog</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start blog-with-sidebar -->
    <section class="blog-with-sidebar section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-8">
                    <div class="news-grids">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{url("assets/images/blog/desastre.jpg")}}" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> 02/11/2021</li>
                                        <li><i class="fa fa-user"></i><a href="#"> DennyLson Sebastiao</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body" style="text-align: justify;">
                                    <h3><a href="{{url("blogDetails/15")}}">Mais de 300 mil pessoas em risco de desastres naturais</a></h3>
                                    <p>MAIS de 300 mil pessoas, o correspondente a 24 mil famílias, correm o risco de ser assoladas por chuvas normais e acima de anormais, ventos fortes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{url("assets/images/blog/chuvas.jpg")}}" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> 02/11/2021</li>
                                        <li><i class="fa fa-user"></i><a href="#"> DennyLson Sebastiao</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body" style="text-align: justify;">
                                    <h3><a href="#">PREPARANDO-SE PARA A ÉPOCA CHUVOSA: Município limpa valas de drenagem</a></h3>
                                    <p>O PROCESSO de manutenção das valas de drenagem acaba de ser activado na cidade da Beira, com vista a permitir maior vazão das águas pluviais.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{url("assets/images/blog/albufeira.jpg")}}" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> 02/11/2021</li>
                                        <li><i class="fa fa-user"></i><a href="#"> DennyLson Sebastiao</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body" style="text-align: justify;">
                                    <h3><a href="#">Albufeira de Chipembe incrementa a agricultura</a></h3>
                                    <p>A ALBUFEIRA de Chipembe, localizada no posto administrativo de Mavala, em Cabo Delgado, não está a ser aproveitada na sua plenitude.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{url("assets/images/blog/estrada.jpg")}}" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> 02/11/2021</li>
                                        <li><i class="fa fa-user"></i><a href="#"> DennyLson Sebastiao</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body" style="text-align: justify;">
                                    <h3><a href="#">Estrada que liga Macomia e Muidumbe reabre dentro de dias</a></h3>
                                    <p>DECORREM no distrito de Muidumbe, província de Cabo Delgado, as obras de montagem de 150 aquedutos, para a colocação de Lages de Betão.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end news-grids -->

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
                </div> <!-- end blog-content -->

                <div class="blog-sidebar col col-lg-3 col-lg-offset-1 col-md-4 col-sm-5">
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