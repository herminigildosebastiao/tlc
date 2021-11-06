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
                    <div class="alert alert-danger p-2" role="alert">
                        @foreach ($errors->all() as $erro)
                            {{$erro}}
                        @endforeach
                    </div>
                @endif
              </div>
			        <hr>
              <form action="{{route('blog.update', $blog->id)}}" method="post" id="formNoticiaAtu" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {!! method_field("PUT") !!}
                <div class="row my-2">
                  <div class="col-5">
                    <label>Titulo</label>
                    <input type="text" name="titulo" id="" class="form-control" form="formNoticiaAtu" value="{{$blog->titulo}}">
                  </div>
                  <div class="col-4">
                    <label>Local</label>
                    <input type="text" name="local" id="" class="form-control" form="formNoticiaAtu" value="{{$blog->local}}">
                    <input type="hidden" name="autor" id="" form="formNoticiaAtu" value="{{$user['name']. ' '. $user['apelido']}}">
                  </div>
                  <div class="col-3">
                    <label>Foto</label>
                    <input type="file" name="foto" id="" class="form-control" form="formNoticiaAtu" value="{{$blog->foto}}">
                  </div>
                  <div class="col-12 my-2">
                    <label>Descricao</label>
                    <textarea class="form-control" name="descricao" id="" rows="10" style="resize: none;" form="formNoticiaAtu">{{$blog->descricao}}</textarea>
                    <button class="btn btn-secondary px-5 my-3" type="submit" form="formNoticiaAtu">Atualizar</button>
                  </div>
                </div>
              </form>
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