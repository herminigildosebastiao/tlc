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
                            <img src="{{ url("storage") }}/{{ $blog[0]->foto }}" alt="{{ $blog[0]->titulo }}" title="{{ $blog[0]->titulo }}" class="img img-responsive">
                        </div>
                        <div class="post-title-meta">
                            <h2 style=""> {{ $blog[0]->titulo }} </h2>
                            <ul>
                                <li><a href="#">Publicado por: {{ $blog[0]->autor }}</a></li>
                                <li><a href="#">{{ $blog[0]->updated_at }}</a></li>
                            </ul>
                        </div>
                        <div class="post-body">
                            <p>{{ $blog[0]->descricao }}</p>
                        </div>
                    </div> <!-- end post -->
                </div> <!-- end blog-content -->

                <div class="blog-sidebar col col-lg-4 col-lg-offset-1 col-md-2 col-sm-5">
                    <div class="widget recent-post-widget">
                        <h3>Posts Recentes</h3>
                        <ul>
                            @forelse($blogsLateral as $blogLa)
                                <li>
                                    <div class="post-pic">
                                        <img src="{{url("storage/$blogLa->foto")}}" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="{{ url("blogDetails/$blogLa->id") }}">{{ $blogLa->titulo }}</a></h4>
                                        <span>{{ $blogLa->updated_at }}</span>
                                    </div>
                                </li>
                            @empty
                                <h4 style="color: #00000075;">Ops nao dispomos de nenhuma noticias em destaque.</h4>
                            @endforelse
                        </ul>
                    </div>
                </div>                    
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-with-section -->
@endsection