@extends('base')

@section('estilos')
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
@endsection

@section('contenido')
@csrf
	<form id="card-form" method="post" action="{{ url('pay/') }}">
		@csrf
		<div class="card">
			<div class="card-header">
				<div class="row">
					<h2>Pago en línea</h2>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<label for="name">Nombre del tarjetahabiente</label>
						<input data-conekta="card[name]" name="nombre" id="nombre" class="form-control" type="text" placeholder="Fulanito Pérez">
					</div>
					<div class="col-md-6">
						<label for="number">Número de la tarjeta</label>
						<input name="card" id="card" data-conekta="card[number]" class="form-control" type="text" placeholder="4242424242424242" maxlength="16">
					</div>
					<div class="col-md-6">
						<label for="cvc">CVC</label>
						<input data-conekta="card[cvc]" class="form-control" type="text" placeholder="123" maxlength="4">
					</div>
					<div class="col-md-6">
						<label for="expDate">Fecha de expiración (MM/AAAA)</label>
						<div id="expDate">
							<input style="width: 50px; display: inline-block;" data-conekta="card[exp_month]" class="form-control" type="text" placeholder="12" maxlength="2">
							<input style="width: 50px; display: inline-block;" data-conekta="card[exp_year]" class="form-control" type="text" placeholder="2020" maxlength="4">
						</div>
					</div>
					<div class="col-md-4">
						<label for="email">Email</label>
						<input id="email" name="email" class="form-control" type="email" placeholder="example@example.com">
					</div>
					<div class="col-md-4">
						<label for="ProyAse">Proyecto/Asesoria</label>
						<input class="form-control" type="text" placeholder="Nombre del proyecto o asesoria" name="ProyAse" id="ProyAse">
					</div>
					<div class="col-md-4">
						<div class="row">
						<div class="col-5">
							<label for="number">Monto</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<select class="custom-select" id="tipoMoneda" name="tipoMoneda">
									    <option selected>MXN</option>
									    <option value="MXN">MXN</option>
									    <option value="USD">USD</option>
									  </select>
								</div>
							</div>
						</div>
						<div class="col-7" style="margin-top: 2rem;">
							<input id="monto" name="monto" class="form-control" type="number" placeholder="123">
						</div>
					</div>
					</div>
				</div>
				<div class="row text-center mt-5">
					<div class="col-md-12">
						<button class="btn btn-success btn-lg">PAGAR</button>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="conektaTokenId" name="conektaTokenId">
	</form>

	@if ($errors->any())
		<div class="container alert alert-danger align-items-center mt-4">
		    <ul>
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		</div>
	@endif
	@if(session('success'))
		<div class="container alert alert-success align-items-center mt-4" role="alert">
		  <span>{{session('success')}}</span>
		</div>
	@endif

	<script type="text/javascript">
		Conekta.setPublicKey("key_JygnrdgsVrv1unxWrZGFpxw");

		var conektaSuccessResponseHandler = function(token){
			var $form=("#card-form");
			$("#conektaTokenId").val(token.id);
			jsPay(); 
			//alert(token.id);
			/*$("#card-form").submit(function(e){ //esto se me ocurrio
				$(this).unbind('submit').submit();
			});*/
		};

		var conektaErrorResponseHandler = function(error) {
			var $form=$("#card-form");
			alert(error.message_to_purchaser);
		};

		$( document ).ready(function(){
			$("#card-form").submit(function(e){
				e.preventDefault();
				var $form=$("#card-form");
				Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
			});
		});

		function jsPay(){
			let params=$("#card-form").serialize();
			//la url estaba direcamente como pay.php puesto que lo tenía en la raíz en el video
			$.post('{{ url('pay/') }}',params,function(data){
				if(data=="1"){
					alert("Se realizo el pago n.n");
					jsClean();
				}else{
					alert(data);
				}
			});
		}

		function jsClean(){
			$(".form-control").prop("value","");
			$("#conektaTokenId").prop("value","");
		}
	</script>
@endsection