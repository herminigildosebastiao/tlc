@extends('template2')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

    <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="{{url('painel/noticia')}}">
                <div class="card-body">
                  <h5 class="text-white mb-0">{{$qntno}}<span class="float-right"><i class="fa fa-newspaper-o"></i></span></h5>
                    <div class="progress my-3" style="height:10px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <h4 class="mb-0 text-white">Noticias</h4>
                </div>
              </a>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <a href="{{url('painel/galerias')}}">
                <div class="card-body">
                  <h5 class="text-white mb-0">{{$qntga}}<span class="float-right"><i class="fa fa-image"></i></span></h5>
                    <div class="progress my-3" style="height:10px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                    <h4 class="mb-0 text-white">Imagens</h4>
                </div>
              </a>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 border-light">
              
            </div>
        </div>
    </div>
 </div>
 
    
    <div class="row">
     <div class="col-12 col-lg-12">
       <div class="card">
         <div class="card-header">
         <button class="btn btn-success px-5 mr-3" id="btnNovaNoticia"><i class="fa fa-newspaper-o"></i> Nova noticia</button>
         <button class="btn btn-primary px-5 ml-3" id="btnNovaFoto"><i class="fa fa-image"></i> Nova foto</button>
       </div>
       
       <div class="nova-noticia" id="novaNoticia" style="display: none;">
        <div class="container">
          <h4 class="my-2">Postar noticia</h4>
          <hr>
          <form action="{{route('blog.store')}}" method="post" id="formNoticiar" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="row my-2">
              <div class="col-5">
                <label>Titulo</label>
                <input type="text" name="titulo" id="" class="form-control" form="formNoticiar">
              </div>
              <div class="col-4">
                <label>Local</label>
                <input type="text" name="local" id="" class="form-control" form="formNoticiar">
                <input type="hidden" name="autor" id=""form="formNoticiar" value="{{$user['name']. ' '. $user['apelido']}}">
              </div>
              <div class="col-3">
                <label>Foto</label>
                <input type="file" name="foto" id="" class="form-control" form="formNoticiar">
              </div>
              <div class="col-12 my-2">
                <label>Descricao</label>
                <textarea class="form-control" name="descricao" id="" rows="5" style="resize: none;" form="formNoticiar"></textarea>
                <button class="btn btn-secondary px-5 my-3" type="submit" form="formNoticiar">Postar</button>
              </div>
            </div>
          </form>
        </div>
       </div>

       <div class="nova-foto" id="novaFoto" style="display: none;">
        <div class="container">
          <h4 class="my-2">Postar foto</h4>
          <div class="card-title text-center" id="displayMessage">
            @if ($errors->all())
                <div class="alert alert-success p-2" role="alert">
                    @foreach ($errors->all() as $erro)
                        {{$erro}}
                    @endforeach
                </div>
            @endif
          </div>
          <hr>
          <form action="{{--route('galerias.store')--}}" method="post" id="formGaleria" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="row my-2">
              <div class="col-7">
                <label>Titulo</label>
                <input type="text" name="titulo" id="" class="form-control" form="formGaleria">
              </div>
              <div class="col-5">
                <label>Categoria</label>
                <select name="categorias" id="" class="form-control" form="formGaleria" required>
                  <option value=""></option>
                  <option value="energia">Energia</option>
                  <option value="automacao">Automacao</option>
                  <option value="eficiencia">Eficiencia eletrica</option>
                  <option value="treinamentos">Treinamentos</option>
                  <option value="outros">Outros</option>
                </select>
              </div>
              <div class="col-6">
                <label>Foto</label>
                <input type="file" name="foto" id="" class="form-control" form="formGaleria">
              </div>
              <div class="col-6">
                <label>Local</label>
                <input type="text" name="local" id="" class="form-control" form="formGaleria">
                <input type="hidden" name="autor" id=""form="formGaleria" value="{{$user['name']. ' '. $user['apelido']}}">
              </div>
              <div class="col-12 my-2">
                <label>Descricao</label>
                <textarea class="form-control" name="descricao" id="" rows="5" style="resize: none;" form="formGaleria"></textarea>
                <button class="btn btn-secondary px-5 my-3" type="submit" form="formGaleria">Postar</button>
              </div>
            </div>
          </form>
        </div>
      </div>

       </div>
     </div>
    </div><!--End Row-->

      <!--End Dashboard Content-->
      
    <!--start overlay-->
        <!--end overlay-->
        
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
@endsection