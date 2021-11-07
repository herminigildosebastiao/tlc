@extends('template3')

@section('login')
<div id="wrapper">

    <div class="loader-wrapper"><div class="lds-ring">
       <div class="card card-authentication1 mx-auto">
           <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center mb-3">
                    <img src="{{url('admin/images/logo-icon.png')}}" alt="logo icon">
                </div>
                <div class="card-title text-center" id="displayMessage">
                    @if ($errors->all())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $erro)
                                <li>{{$erro}}</li>
                            @endforeach
                        </div>
                    @endif
                </div>
               <form method="post" id="formLogin" action="{{ route("logar") }}">
                   @csrf
                 <div class="form-group mb-2">
                 <label for="exampleInputUsername" class="sr-only">Usuario</label>
                  <div class="position-relative has-icon-right">
                     <input type="email" name="email" id="exampleInputUsername" class="form-control input-shadow" placeholder="Email" form="formLogin" required>
                     <div class="form-control-position">
                         <i class="icon-user"></i>
                     </div>
                  </div>
                 </div>
                 <div class="form-group mb-2">
                 <label for="exampleInputPassword" class="sr-only">Password</label>
                  <div class="position-relative has-icon-right">
                     <input type="password" name="senha" form="formLogin" id="exampleInputPassword" class="form-control input-shadow" placeholder="Password" required>
                     <div class="form-control-position">
                         <i class="icon-lock"></i>
                     </div>
                  </div>
                 </div>
                <button type="submit" class="btn btn-primary btn-block mb-2" form="formLogin">Iniciar sessao</button>
                </form>
              </div>
             </div>
           </div>
       </div>
    </div>
    </div>
@endsection