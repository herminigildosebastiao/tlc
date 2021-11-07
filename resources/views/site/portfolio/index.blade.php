@extends('template')

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
                        @forelse($galerias as $galeria)
                            <div class="grid">
                                <div class="project-img">
                                    <img src="{{url("storage/$galeria->foto")}}" alt="{{ $galeria->titulo }}" title="{{ $galeria->titulo }}">
                                </div>
                                <div class="project-info">
                                    <div class="inner-info">
                                        <a href="{{ url("portDetails/$galeria->id") }}"><h4 style="color: #fff;">{{ $galeria->titulo }}</h4></a>
                                        <div class="tags">{{ $galeria->local }}</div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3 style="color: #00000075;">Opss nenhuma imagem disponivel!!!</h3>
                        @endforelse
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