@extends('site.template')

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Portifolio</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li>Portifolio</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


     <!-- recent-project --> 
    <section class="section-padding projects-grid-view-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="projects-grid-view">
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{url("assets/images/portifolio/albufeira.jpg")}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{url("portfolio/portDetails/88")}}"><h3>Albufeira de Chipembe incrementa a agricultura</h3></a>
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
            </div>

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
    <!-- end recent-project -->
@endsection