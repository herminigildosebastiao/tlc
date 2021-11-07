@extends('template');

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Detalhes do portifolio</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><a href="{{route("portfolio")}}">Portfolio</a></li>
                        <li>Detalhes do portifolio</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start project-single-section -->
    <section class="project-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <div class="project-single-img">
                        <img src="{{ url("storage") }}/{{ $galeria[0]->foto }}" alt="{{ $galeria[0]->titulo }}" title="{{ $galeria[0]->titulo }}" class="img img-responsive">
                    </div>
                </div>
                <div class="col col-md-5">
                    <div class="project-single-details" style="text-align: justify;">
                        <h3>{{ $galeria[0]->titulo }}</h3>
                        <p>{{ $galeria[0]->descricao }}</p>
                        <ul class="project-info">
                            <li><i class="fa fa-tag"></i> <span>Categoria:</span> {{ $galeria[0]->categorias }}</li>
                            <li><i class="fa fa-user"></i> <span>Local:</span> {{ $galeria[0]->local }}</li>
                            <li><i class="fa fa-calendar"></i> <span>Data:</span> {{ $galeria[0]->created_at }}</li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end project-single-section -->
@endsection