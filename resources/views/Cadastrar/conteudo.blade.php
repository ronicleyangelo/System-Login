@extends('layouts.front')
@section('conteudo')
	
    <div class="card" >
    	<div class="card-header bg-warning">
			<h1><i  class=""></i> Fluxo de Cadastro</h1>
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
							<input class="form-control" type="email" name="email" id="Email" value="" required>
						</div>
						<div>
							<label for="Senha_confirmation">Senha</label>
							<input class="form-control " type="password" name="senha" id="Senha" value="" required>
						</div>
						<div>
							<label for="Senha">Confirmar Senha</label>
							<input class="form-control" type="password" name="senha" id="Senha" value="" required>
						</div>
						<div>
							<button class="btn btn-dark text-white">Enviar</button>
						</div>
					</div>
			</form>
		</div>
    </div>
@endsection