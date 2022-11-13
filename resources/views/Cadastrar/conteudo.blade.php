@extends('layouts.front')
@section('conteudo')
	
    <div class="card" >
    	<div class="card-header bg-warning">
			<h1><i class=""></i> Fluxo de Cadastro</h1>
    	</div>
		<div class="card-body">
			<form action="{{ route('salvar-usuario') }}" method="POST" >
				{{ csrf_field() }}
					<div class="form-group">
						<div class="col-12 col-xl-4" >
							<label for="Name">Nome</label>
							<input class="form-control"  type="text" name="name" id="Nome" value="" required>
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
						<div>
							<label for="Email">Email</label>
							<input class="form-control"  type="email" name="email" id="Email" value="" required>
						</div>
						<div>
							<label for="Senha">Senha</label>
							<input class="form-control " type="password" name="senha" id="Senha" value="" required>
						</div>
						<div>
							<label for="ConfirmarSenha">Confirmar Senha</label>
							<input class="form-control" type="password" name="ConfirmarSenha" id="ConfirmarSenha" value="" required>
						</div>
						<div>
							<button class="btn btn-dark text-white">Enviar</button>
						</div>
					</div>
			</form>
			@foreach($errors->all() as $mensagem)
				<div>
					<li class="alert alert-danger">{{$mensagem}}</li>
				</div>
			@endforeach
		</div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/mask.js')}}"></script>
@endsection