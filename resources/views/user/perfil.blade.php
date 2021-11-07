@extends('template2')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
                <img class="img-fluid" src="{{url('admin/images/profile/mint.png')}}" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <img src="{{url('admin/images/profile/avatar.png')}}" alt="profile-image" class="profile">
                <h5 class="card-title">{{$user['name']. ' '.$user['apelido']}}</h5>
                <p class="card-text text-justify">{{$user['biografia']}}</p>
                <div class="icon-block">
                  <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                  <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                  <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                </div>
            </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Editar perfil</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="edit">
                    <form class="row" method="post" id="formPerfil" action="{{route('user.update', $user->id)}}">
                      {!! method_field('PUT') !!}
                      {!! csrf_field() !!}
                        <div class="col-12">
                          <h5>Dados pessoais</h5>
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
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                              <label for="">Nome</label>
                                <input class="form-control" name="name" type="text" value="{{$user['name']}}" form="formPerfil" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Apelido</label>
                              <input class="form-control" name="apelido" type="text" value="{{$user['apelido']}}" form="formPerfil" required>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="">Nascimento</label>
                              <input class="form-control" name="nascimento" type="date" value="{{$user['nascimento']}}" form="formPerfil" required>
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="form-group">
                            <label for="">Telefone</label>
                              <input class="form-control" name="telefone" type="text" value="{{$user['telefone']}}" form="formPerfil" required>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <div class="form-group">
                            <label for="">Email</label>
                              <input class="form-control" name="email" type="email" value="{{$user['email']}}" form="formPerfil" required>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for="">Mini biografia</label>
                            <textarea name="biografia" id="" rows="4" class="form-control" style="resize: none;" form="formPerfil" required>{{$user['biografia']}}</textarea>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group my-4">
                            <button class="btn btn-primary my-2 px-5" type="submit" form="formPerfil">Atualizar</button>
                          </div>
                        </div>
                    </form>
                    <hr>
                    <form method="post" class="row" id="formSenha" action="{{route('password', $user['id'])}}">
                      {!! method_field('PUT') !!}
                      {!! csrf_field() !!}
                        <div class="col-12">
                          <h5>Gestao de senha</h5>
                          <hr>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label for="">Senha</label>
                            <input class="form-control" type="password" name="senha" id="" form="formSenha" required minlength="3">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label for="">Nova Senha</label>
                            <input class="form-control" type="password" name="novasenha" id="" form="formSenha" required minlength="6">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label for="">Confirmar Senha</label>
                            <input class="form-control" type="password" name="confsenha" id="" form="formSenha" required minlength="6">
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <button class="btn btn-danger" type="submit" form="formSenha">Alterar</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
	
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
@endsection