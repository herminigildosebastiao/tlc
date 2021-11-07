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
                        @forelse($blogs as $blog)
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="{{url("storage/$blog->foto")}}" alt>
                                </div>
                                <div class="entry-details">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="fa fa-calendar"></i> {{ $blog->updated_at }}</li>
                                            <li><i class="fa fa-user"></i><a href="#"> {{ $blog->autor }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-body" style="text-align: justify;">
                                        <h3>
                                            @php
                                                $len=strlen($blog->titulo);
                                                if ($len>30) {
                                                    $blog->titulo = substr($blog->titulo,0,49).'...';
                                                }
                                            @endphp
                                            <a href="{{ url("blogDetails/$blog->id") }}">{{ $blog->titulo }}</a>
                                        </h3>
                                        <p>
                                            @php
                                              $len=strlen($blog->descricao);
                                              if ($len>30) {
                                                $blog->descricao = substr($blog->descricao,0,110).'...';
                                              }
                                            @endphp
                                            {{$blog->descricao}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3 style="color: #00000075;">Opss nenhuma noticia disponivel!!!</h3>
                        @endforelse
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