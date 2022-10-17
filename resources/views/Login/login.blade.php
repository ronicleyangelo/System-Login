@extends('layouts.front')
@section('conteudo')
	<div class="col-12 col-sm-6 offset-3 py-5">
	 	<div class="card-header text-white rounded-2 text-center bg-dark">
	 		<h2 class="card-title text-white p-4"><i class="fa fa-users" ></i>  Sistema de Login</h2>
	 	</div>
		<div class="card-body bg-light p-4">
	 		<form action="{{ route('autenticar-login') }}" method="POST">
	 			{{ csrf_field() }}
					<div class="form-group col py-2">
						<div class="text-dark offset-5 col-12 col-sm-4 col-sm-12 py-2">
							<label><i class="fa fa-user"></i>Acesso Email</label>
						</div>
						<div class="col-12 col-sm-4 col-sm-12">
							<input class="form-control" type="email" name="email" id="Usuario" value="{{ old('email') }}">
						</div>
						<div class="card-title text-dark offset-5 py-2 col-12 col-sm-4 col-sm-12 py-2" >
							<label>Senha</label>
						</div>
						<div class="col-12 col-sm-4 col-sm-12">
							<input class="form-control" type="password" name="password" id="password" value="{{ old('senha') }}">
						</div>
						<div>
							<a href="{{  route('cadastrar-usuario') }}">Cadastra-se</a>
						</div>
						<div class="col-12 col-xl-5 col-sm-12 py-2">
							<button class="btn btn-sm btn-warning ms-auto mb-4">Enviar<i class="fa fa-send"></i></button>
						</div>
					</div>
	 		</form>
	 	</div>
	</div>		
@endsection