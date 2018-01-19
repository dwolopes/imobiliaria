@extends('layouts.site')

@section('content')

<div class="container">
	<div class="row section">
		<h3 align="center">Imóvel</h3>
		<div class="divider"></div>
	</div>
	<div class="row section">
		<div class="col s12 m8">
			<div class="row">
				<div class="slider">
					<ul class="slides">
						<li>
						    <img src="{{ asset('img/modelo_detalhe_1.jpg')}}" alt="">
				            <div class="caption center-align">
	                           <h3>Título da imagem</h3>
	                           <h5>Descrição do Slide</h5>
                            </div>
						</li>
						<li>
						    <img src="{{ asset('img/modelo_detalhe_2.jpg')}}" alt="">
				            <div class="caption left-align">
	                           <h3>Título da imagem</h3>
	                           <h5>Descrição do Slide</h5>
                            </div>
						</li>
						<li>
						    <img src="{{ asset('img/modelo_detalhe_3.jpg')}}" alt="">
				            <div class="caption right-align">
	                           <h3>Título da imagem</h3>
	                           <h5>Descrição do Slide</h5>
                            </div>
						</li>
						<li>
						    <img src="{{ asset('img/modelo_detalhe_4.jpg')}}" alt="">
				            <div class="caption left-align">
	                           <h3>Título da imagem</h3>
	                           <h5>Descrição do Slide</h5>
                            </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row" align="center">
				<button class="btn blue" onclick="sliderPrev()">Anterior</button>
				<button class="btn blue" onclick="sliderNext()">Próximo</button>
			</div>
		</div>
		<div class="col s12 m4">
			<h4>O Imóvel</h4>
			<blockquote>
				<p>Descrição breve sdo imóvel.</p>
			</blockquote>
			<p><b>Código:</b> 245</p>
			<p><b>Status:</b> Vende</p>
			<p><b>Tipo:</b> Alvenaria</p>
			<p><b>Endereço:</b> Rua: São Paulo, 195</p>
			<p><b>CEP:</b> 1311133</p>
			<p><b>Cidade:</b> Belo Horizonte</p>
			<p><b>Valor:</b> R$ 2.000.000,00</p>
			<a class="btn deep-orange darken-1" href="{{ route('site.contato')}}">Entrar em contato</a>
		</div>
	</div>
</div>
@endsection
