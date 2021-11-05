@extends('site.template')

@section('content')
    <!-- start of hero -->   
    <section class="hero hero-slider-wrapper">
        <div class="hero-slider hero-slider-style-1">
            <div class="slide">
                <img src="{{url("assets/images/slider/slide-1.jpg")}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-sm-9 slide-caption">
                            <h2>Tecnicos, <span>Engenh</span>eiros & Especialistas</h2>
                            <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{url("assets/images/slider/slide-2.jpg")}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-sm-9 slide-caption">
                            <h2>Tecnol<span>ogia avan</span>çada</h2>
                            <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{url("assets/images/slider/slide-3.jpg")}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-8 col-sm-9 slide-caption">
                            <h2>Tecnol<span>ogia avan</span>çada</h2>
                            <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
    
    
    <!-- start of services -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-4">
                    <div class="section-title">
                        <h2>Nossos servicos</h2>
                    </div>
                </div>
                <div class="col col-lg-8 col-md-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div> <!-- end row -->
            
            <div class="row">
                <div class="col col-xs-12">
                    <div class="services-grids service-slider dots-s1">
                        <div class="grid">
                           <div class="inner mk-bg-img">
                                <div class="details ">
                                   <div class="info">
                                        <img src="{{url("assets/images/services/img-1.jpg")}}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3 class="sevico-1"><i class="fi flaticon-construction"></i> Energia</h3>
                                        </a>
                                        <p style="font-size: 14pt;"># Concepcao de projetos; <br/> # Gestao & operacao de sistemas; <br/> #Manutencao.</p>
                                   </div>
                                </div>
                           </div>
                        </div>
                        <div class="grid">
                           <div class="inner mk-bg-img">
                                <div class="details ">
                                   <div class="info">
                                        <img src="{{url("assets/images/services/img-2.jpg")}}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3 class="sevico-2"><i class="fi flaticon-construction"></i> Automacao</h3>
                                        </a>
                                        <p style="font-size: 14pt;"># Concepcao de projetos; <br/> # Manutencao.</p>
                                   </div>
                                </div>
                           </div>
                        </div>
                        <div class="grid">
                           <div class="inner mk-bg-img">
                                <div class="details ">
                                   <div class="info">
                                        <img src="{{url("assets/images/services/img-3.jpg")}}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3 class="sevico-3"><i class="fi flaticon-construction"></i> Eficiencia energetica</h3>
                                        </a>
                                        <p style="font-size: 14pt;"># Auditorias <br/> # Acessoria</p>
                                   </div>
                                </div>
                           </div>
                        </div>
                        <div class="grid">
                           <div class="inner mk-bg-img">
                                <div class="details ">
                                   <div class="info">
                                        <img src="{{url("assets/images/services/img-1.jpg")}}" alt class="bg-image">
                                        <a href="service-single.html">
                                            <h3 class="sevico-4"><i class="fi flaticon-construction"></i> Treinamentos</h3>
                                        </a>
                                        <p style="font-size: 14pt;"># Eletricidade <br/># Informatica</p>
                                   </div>
                                </div>
                           </div>
                        </div>
                    </div> <!-- end services-grids -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end of services -->
    
    
    <!-- start testimonials -->
    <section class="testimonials section-padding parallax" data-bg-image="{{url("assets/images/testimonials-bg.jpg")}}">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="testimonials-slider slider-arrow-s1">
                        <div class="slide-item">
                            <div class="inner">
                                <div class="client-quote">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="inner">
                                <div class="client-quote">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonials -->


    <!-- start offer -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <div class="section-title">
                        <h3>O QUE NÓS OFERECEMOS</h3>
                    </div>
                    <div class="offer-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
                        <a href="#" class="theme-btn read-more">Read More</a>
                    </div>
                </div>
                <div class="col col-md-8">
                    <div class="offer-grids">
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-construction"></i> 
                                </div>
                                <h3>Tecnologia avançada</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-people"></i> 
                                </div>
                                <h3>Tecnicos, Engenheiros & Especialistas</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-support"></i> 
                                </div>
                                <h3>Suporte ao cliente 24h</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="details">
                                <div class="icon">
                                    <i class="fi flaticon-time-passing"></i> 
                                </div>
                                <h3>Entrega na hora</h3>
                                <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end offer -->  


    <!-- recent-project --> 
    <section class="recent-projects section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-lg-offset-2">
                    <div class="section-title-s2">
                        <h2>Portifolio</h2>
                        <p>Lorem ipsum dolor sit amet, mel postea mio liore corrumpit ea. Affert partiendo vix eu. Ei mea dolore democritum disu artio.</p>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="projects-grid-view">
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{url("assets/images/portifolio/albufeira.jpg")}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="#"><h3>Albufeira de Chipembe incrementa a agricultura</h3></a>
                                    <div class="tags">Cabo Delgado</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{url("assets/images/portifolio/chuvas.jpg")}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="#"><h3>PREPARANDO-SE PARA A ÉPOCA CHUVOSA: Município limpa valas de drenagem</h3></a>
                                    <div class="tags">Sofala</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{url("assets/images/portifolio/estrada.jpg")}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="#"><h3>Estrada que liga Macomia e Muidumbe reabre dentro de dias</h3></a>
                                    <div class="tags">Cabo Delgado</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn theme-btn px-5">Mais portifolio</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end recent-project -->


    <!-- start about-us-faq -->
    <section class="section-padding about-us-faq">
        <div class="container">
            <div class="row">
                <div class="col col-lg-5">
                    <div class="about-us-section">
                        <div class="section-title-s3">
                            <span>SOBRE NÓS</span>
                            <h3>Bem vindo a Tel Consultores, Lda</h3>
                        </div>
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        </div>
                        <div class="social">
                            <p>Conecte-se conosco</p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 col-lg-offset-1">
                    <div class="faq-section">
                        <div class="section-title-s3">
                            <span>Perguntas frequentes</span>
                        </div>
                        <div class="details">
                            <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Oque e auditoria?</a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Qual e o nivel de eficienia dos servicos prestados pela Telconsultores?</a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Porque contratar a Telconsultores?</a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="backhoe-loader">
            <img src="{{url("assets/images/backhoe-loader.png")}}" alt>
        </div>
    </section>
    <!-- end start about-us-faq -->

    <!-- news-section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-4">
                    <div class="section-title">
                        <h2>Notícias recentes</h2>
                    </div>
                </div>
                <div class="col col-lg-5 col-md-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="col col-lg-3 col-md-3">
                   <div class="all-news-link">
                        <a href="#" class="btn theme-btn">Mais notícias</a>
                   </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="news-grids">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="{{url("assets/images/blog/energia.jpg")}}" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> 02/11/2021</li>
                                        <li><i class="fa fa-user"></i><a href="#"> DennyLson Sebastiao</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body" style="text-align: justify;">
                                    <h3><a href="#">Energia eléctrica deve impulsionar desenvolvimento</a></h3>
                                    <p>O PRESIDENTE da República, Filipe Nyusi, instou, semana passada, as populações dos postos administrativos de Alto-Changane e Changanine.</p>
                                </div>
                            </div>
                        </div>
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
                                    <h3><a href="#">Mais de 300 mil pessoas em risco de desastres naturais</a></h3>
                                    <p>MAIS de 300 mil pessoas, o correspondente a 24 mil famílias, correm o risco de ser assoladas por chuvas normais e acima de anormais.</p>
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
                    </div>
                </div>
            </div>
        </div> <!-- end container -->        
    </section>
    <!-- end news-section -->
@endsection