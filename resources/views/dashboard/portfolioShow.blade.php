@extends('template2')

@section('content')
<div class="content-wrapper">
    <div class="container">

      <div class="row my-5">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="">Detalhes<h4>
                @if ($errors->all())
                    <div class="alert alert-success p-2" role="alert">
                        @foreach ($errors->all() as $erro)
                            {{$erro}}
                        @endforeach
                    </div>
                @endif
              <hr>
              <div class="row">
                  <div class="col-4">
                    <img src="{{url("storage/$portfolio->foto")}}" alt="{{$portfolio->titulo}}" srcset="" style="width: 100%; border-radius: 5px;">
                  </div>
                  <div class="col-8 text-justify my-2">
                    <h3>{{$portfolio->titulo}}</h3>
                    <p style="font-size: 12pt;">
                      {{$portfolio->descricao}}
                    </p>
                     
                    <form action="{{route('portfolio.destroy', $portfolio->id)}}" method="post" id="formDelete">
                      {!! csrf_field() !!}
                      {!! method_field("DELETE") !!}
                      <a href="{{url("dashboard/portfolio/$portfolio->id/edit")}}" class="btn btn-primary btn-sm px-5">
                        Editar
                      </a>
                      <button type="submit" class="btn btn-danger btn-sm px-5" form="formDelete">Eliminar</button >
                    </form>
                  </div>
              </div>
            </div>
          </div>
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