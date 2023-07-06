@extends('layouts.outer')
@section('content')

@php
    function convertToStars($value)
    {
        $roundedValue = round($value); // Arredonda o valor para o número inteiro mais próximo

        $fullStars = floor($roundedValue / 2); // Calcula o número de estrelas cheias (máximo de 5)
        $halfStar = ($roundedValue % 2) ? 1 : 0; // Verifica se há uma estrela meio (se o valor for ímpar)

        $emptyStars = 5 - ($fullStars + $halfStar); // Calcula o número de estrelas vazias

        $stars = [
            str_repeat('<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>&nbsp;', $fullStars), // Estrelas cheias
            ($halfStar ? '<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>&nbsp;' : ''), // Meia estrela (se houver)
            str_repeat('<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>&nbsp;', $emptyStars) // Estrelas vazias
        ];

        return implode('', $stars); // Retorna a representação das estrelas como uma string
    }
@endphp
<body>


	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>
                             @foreach ($plataformas as $cat)
                                    @if (old("plataforma")==$cat->id)
                                    <li value="{{ $cat->id }}"><a href="plataformas"> {{ $cat->nome }}</a> </li>
                                    @else
                                    <li value="{{ $cat->id }}" ><a href="plataformas">{{ $cat->nome }}</a></li>
                                    @endif
                             @endforeach
                        </ul>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //nav -->
<!-- banner -->
	{{-- <div id="slidey" style="display:none;">
		<ul> --}}
           {{--  @foreach ($filmes as $filme )
                <li><img src="{{asset('storage/images/articles').'/'.$filme->imagem}}" alt=" "><p class='title'>{{$filme->titulo}}</p><p class='description'> Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.</p></li>
            @endforeach --}}
			{{-- <li><img src="images/5.jpg" alt=" "><p class='title'>Tarzan</p><p class='description'> Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.</p></li>
			<li><img src="images/2.jpg" alt=" "><p class='title'>Maximum Ride</p><p class='description'>Six children, genetically cross-bred with avian DNA, take flight around the country to discover their origins. Along the way, their mysterious past is ...</p></li>
			<li><img src="images/3.jpg" alt=" "><p class='title'>Independence</p><p class='description'>The fate of humanity hangs in the balance as the U.S. President and citizens decide if these aliens are to be trusted ...or feared.</p></li>
			<li><img src="images/4.jpg" alt=" "><p class='title'>Central Intelligence</p><p class='description'>Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. Claiming to be on a top-secret ...</p></li>
			<li><img src="images/6.jpg" alt=" "><p class='title'>Ice Age</p><p class='description'>In the film's epilogue, Scrat keeps struggling to control the alien ship until it crashes on Mars, destroying all life on the planet.</p></li>
			<li><img src="images/7.jpg" alt=" "><p class='title'>X - Man</p><p class='description'>In 1977, paranormal investigators Ed (Patrick Wilson) and Lorraine Warren come out of a self-imposed sabbatical to travel to Enfield, a borough in north ...</p></li> --}}
{{-- 		</ul>
    </div> --}}
    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="w3_agile_banner_bottom_grid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach ($banners as $banner )
                <div class="item">

                    <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">

                        @if ($banner->tipo == 'f' )
                            <a href="/Filmes/{{$banner->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$banner->imagem}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="/Filmes/{{$banner->id}}/show">{{ $banner->titulo }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>
                                    @php
                                        $input = $banner->ano_lancamento;
                                        $date = strtotime($input);
                                        echo date('Y', $date);
                                    @endphp
                                    </p>
                                    <div class="block-stars">
                                        @php


                                        // Exemplo de uso
                                        $valor = $banner->avaliacao; // Valor da avaliação (de 0 a 10)
                                        $estrelasBanner = convertToStars($valor);


                                        @endphp
                                        <ul class="w3l-ratings">

                                            @php
                                                    echo $estrelasBanner;
                                            @endphp
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @else
                            <a href="/Series/{{$banner->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$banner->imagem}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="/Series/{{$banner->id}}/show">{{ $banner->titulo }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>
                                    @php
                                        $input = $banner->ano_lancamento;
                                        $date = strtotime($input);
                                        echo date('Y', $date);
                                    @endphp
                                    </p>
                                    <div class="block-stars">
                                        @php


                                        // Exemplo de uso
                                        $valor = $banner->avaliacao; // Valor da avaliação (de 0 a 10)
                                        $estrelasBanner = convertToStars($valor);


                                        @endphp
                                        <ul class="w3l-ratings">

                                            @php
                                                    echo $estrelasBanner;
                                            @endphp
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endif

                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<div class="general">
    <h4 class="latest-text w3_latest_text">Filmes</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Destaque</a></li>
                <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Melhor Avaliados</a></li>
                <li role="presentation"><a href="#recent" role="tab" id="recent-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Mais Recentes</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        @foreach ($featuredMovies as $featuredMovie )
                          <div class="col-md-2 w3l-movie-gride-agile">
                             <a href="/Filmes/{{$featuredMovie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$featuredMovie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="/Filmes/{{$featuredMovie->id}}/show">{{ $featuredMovie->titulo }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>
                                        @php
                                            $input = $featuredMovie->ano_lancamento;
                                            $date = strtotime($input);
                                            echo date('Y', $date);
                                        @endphp
                                    </p>
                                    <div class="block-stars">
                                        @php


                                            // Exemplo de uso
                                            $valor = $featuredMovie->avaliacao; // Valor da avaliação (de 0 a 10)
                                            $estrelasFeatured = convertToStars($valor);


                                        @endphp

                                        <ul class="w3l-ratings">
                                            @php
                                                echo $estrelasFeatured;
                                            @endphp

                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        @endforeach

                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                    @foreach ($ratingMovies as $ratingMovie )
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="/Filmes/{{$ratingMovie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$ratingMovie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="/Filmes/{{$ratingMovie->id}}/show">{{ $ratingMovie->titulo }}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>
                                    @php
                                        $input = $ratingMovie->ano_lancamento;
                                        $date = strtotime($input);
                                        echo date('Y', $date);
                                    @endphp
                                </p>
                                <div class="block-stars">
                                    @php


                                    // Exemplo de uso
                                    $valor = $ratingMovie->avaliacao; // Valor da avaliação (de 0 a 10)
                                    $estrelasRating = convertToStars($valor);


                                    @endphp
                                    <ul class="w3l-ratings">
                                        @php
                                            echo $estrelasRating;
                                        @endphp
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="recent" aria-labelledby="imdb-tab">
                    @foreach ($recentMovies as $recentMovie )
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="/Filmes/{{$recentMovie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$recentMovie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="/Filmes/{{$ratingMovie->id}}/show">{{ $ratingMovie->titulo }}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>
                                    @php
                                    $input = $recentMovie->ano_lancamento;
                                    $date = strtotime($input);
                                    echo date('Y', $date);
                                @endphp
                                </p>
                                <div class="block-stars">
                                    @php


                                    // Exemplo de uso
                                    $valor = $recentMovie->avaliacao; // Valor da avaliação (de 0 a 10)
                                    $estrelasRecent = convertToStars($valor);


                                    @endphp
                                    <ul class="w3l-ratings">
                                        @php
                                            echo $estrelasRecent;
                                        @endphp
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="series">
    <h4 class="latest-text w3_latest_text">Séries</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#FeaturedSeries" id="Serieshome-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Destaque</a></li>
                <li role="presentation"><a href="#Seriesrating" id="Seriesrating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Melhor Avaliadas</a></li>
                <li role="presentation"><a href="#Seriesimdb" role="tab" id="Seriesimdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Mais Recentes</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="FeaturedSeries" aria-labelledby="Serieshome-tab">
                    <div class="w3_agile_featured_movies">
                        @foreach ($featuredMovies as $featuredMovie )
                          <div class="col-md-2 w3l-movie-gride-agile">
                             <a href="/Filmes/{{$featuredMovie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$featuredMovie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="/Filmes/{{$featuredMovie->id}}/show">{{ $featuredMovie->titulo }}</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>
                                        @php
                                            $input = $featuredMovie->ano_lancamento;
                                            $date = strtotime($input);
                                            echo date('Y', $date);
                                        @endphp
                                    </p>
                                    <div class="block-stars">
                                        @php


                                            // Exemplo de uso
                                            $valor = $featuredMovie->avaliacao; // Valor da avaliação (de 0 a 10)
                                            $estrelas = convertToStars($valor);


                                        @endphp

                                        <ul class="w3l-ratings">
                                            @php
                                                echo $estrelas;
                                            @endphp

                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        @endforeach

                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Seriesrating" aria-labelledby="Seriesrating-tab">
                    @foreach ($ratingMovies as $ratingMovie )
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="/Filmes/{{$ratingMovie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$ratingMovie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="/Filmes/{{$ratingMovie->id}}/show">{{ $ratingMovie->titulo }}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>
                                    @php
                                        $input = $ratingMovie->ano_lancamento;
                                        $date = strtotime($input);
                                        echo date('Y', $date);
                                    @endphp
                                </p>
                                <div class="block-stars">
                                    @php


                                    // Exemplo de uso
                                    $valor = $ratingMovie->avaliacao; // Valor da avaliação (de 0 a 10)
                                    $estrelasR = convertToStars($valor);


                                    @endphp
                                    <ul class="w3l-ratings">
                                        @php
                                            echo $estrelasR;
                                        @endphp
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="Seriesimdb" aria-labelledby="Seriesimdb-tab">
                    @foreach ($recentMovies as $recentMovie )
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="/Filmes/{{$recentMovie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$recentMovie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="/Filmes/{{$ratingMovie->id}}/show">{{ $ratingMovie->titulo }}</a></h6>
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>
                                    @php
                                    $input = $recentMovie->ano_lancamento;
                                    $date = strtotime($input);
                                    echo date('Y', $date);
                                @endphp
                                </p>
                                <div class="block-stars">
                                    @php


                                    // Exemplo de uso
                                    $valor = $recentMovie->avaliacao; // Valor da avaliação (de 0 a 10)
                                    $estrelasRecent = convertToStars($valor);


                                    @endphp
                                    <ul class="w3l-ratings">
                                        @php
                                            echo $estrelasRecent;
                                        @endphp
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="ribben">
                            <p>NEW</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>



	<!-- pop-up-box -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->



</body>
@endsection
