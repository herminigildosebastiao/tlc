@extends('template2')

@section('content')
<div class="content-wrapper">
    <div class="container">

      <div class="row my-5">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Noticias</h4>
              <div class="card-title text-center" id="displayMessage">
                @if ($errors->all())
                    <div class="alert alert-success p-2" role="alert">
                        @foreach ($errors->all() as $erro)
                            {{$erro}}
                        @endforeach
                    </div>
                @endif
              </div>
			         <div class="table-responsive">
               <table class="table table-striped table-sm" style="font-size: 9pt;" id="noticiasTable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Titulo</th>
                      <th scope="col">Data</th>
                      <th scope="col">Acoes</th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse ($blogs as $blog)
                      <tr>
                        
                        <th scope="row">{{$blog->id}}</th>
                        <td>{{$blog->titulo}}</td>
                        <td>{{$blog->updated_at}}</td>
                        <td><a class="btn btn-small btn-success mr-1 py-1 px-3" href="{{url("dashboard/blog/$blog->id/edit")}}"><i class="fa fa-pencil"></i></a> <a class="btn btn-small btn-warning ml-1 py-1 px-4" href="{{url("dashboard/blog/$blog->id")}}"><i class="fa fa-eye"></i></a></td>
                      </tr> 
                    @empty
                      <tr>
                        <th><h4>Nenhuma noticia disponivel</h4></th>
                      </tr>
                    @endforelse

                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          {{--$noticias->links()--}}
        </div>
      </div>
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready( function () {
        $('#noticiasTable').DataTable();
      } );
    </script>
@endsection