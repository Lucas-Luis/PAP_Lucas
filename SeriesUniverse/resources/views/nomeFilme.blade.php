@extends('layouts.outer')
@section('content')

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
	<div id="slidey" style="display:none;">
		<ul>
            @foreach ($filmes as $filme )
                @if (old("filme")==$filme->id)
                <li><img src="{{$filme->imagem}}" alt=" "><p class='title'>{{$filme->titulo}}</p><p class='description'> Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.</p></li>
                @else
                <li><img src="{{$filme->imagem}}" alt=" "><p class='title'>{{$filme->titulo}}</p><p class='description'> Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.</p></li>
                @endif
            @endforeach
			{{-- <li><img src="images/5.jpg" alt=" "><p class='title'>Tarzan</p><p class='description'> Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.</p></li>
			<li><img src="images/2.jpg" alt=" "><p class='title'>Maximum Ride</p><p class='description'>Six children, genetically cross-bred with avian DNA, take flight around the country to discover their origins. Along the way, their mysterious past is ...</p></li>
			<li><img src="images/3.jpg" alt=" "><p class='title'>Independence</p><p class='description'>The fate of humanity hangs in the balance as the U.S. President and citizens decide if these aliens are to be trusted ...or feared.</p></li>
			<li><img src="images/4.jpg" alt=" "><p class='title'>Central Intelligence</p><p class='description'>Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. Claiming to be on a top-secret ...</p></li>
			<li><img src="images/6.jpg" alt=" "><p class='title'>Ice Age</p><p class='description'>In the film's epilogue, Scrat keeps struggling to control the alien ship until it crashes on Mars, destroying all life on the planet.</p></li>
			<li><img src="images/7.jpg" alt=" "><p class='title'>X - Man</p><p class='description'>In 1977, paranormal investigators Ed (Patrick Wilson) and Lorraine Warren come out of a self-imposed sabbatical to travel to Enfield, a borough in north ...</p></li> --}}
		</ul>
    </div>
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

<!-- //banner-bottom -->

<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">Filmes</h4>
                <nav class="navbar navbar-default">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="nomeFilme">Nome</a></li>
                                <li class="active"><a href="dataFilme">Data Lancamento</a></li>
                                <li class="active"><a href="avaliacaoFilme">Avaliacao</a></li>
                            </ul>
                            </ul>
                        </nav>
                    </div>
                </nav>
       <div class="container">
        @foreach ($filmes as $filme)
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
							<div class="col-md-2 w3l-movie-gride-agile">
                                @if (old("filme")==$filme->id)
                                    <a href="/Filmes/{{$filme->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$filme->imagem}}" title="album-name" class="img-responsive" alt=" " />
									 <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								    </a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html"></a>{{$filme->titulo}}</h6>
									</div>
									  <div class="mid-2 agile_mid_2_home">
										<p>{{$filme->ano_lancamento}}</p>
                                     </div>
										<div class="block-stars">
											<p>{{$filme->avaliacao}}</p>
										</div>
                                </div>
                                @else
                                        <a href="/Filmes/{{$filme->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$filme->imagem}}" title="album-name" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="single.html"></a>{{$filme->titulo}}</h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{$filme->ano_lancamento}}</p>
                                            </div>
                                                <div class="block-stars">
                                                    <p>{{$filme->avaliacao}}</p>
                                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
   </div>
</div>
<!-- //general -->
<!-- Latest-tv-series -->
	<div class="Latest-tv-series">
		<h4 class="latest-text w3_latest_text w3_home_popular">Series</h4>
        <nav class="navbar navbar-default">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="nomeSerie">Nome</a></li>
                        <li class="active"><a href="dataSerie">Data Lancamento</a></li>
                        <li class="active"><a href="avaliacaoSerie">Avaliacao</a></li>
                    </ul>
                    </ul>
                </nav>
            </div>
        </nav>
        @foreach ($series as $serie)
        <div class="container">
           <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
               <div id="myTabContent" class="tab-content">
                   <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                       <div class="w3_agile_featured_movies">
                           <div class="col-md-2 w3l-movie-gride-agile">
                               @if (old("serie")==$serie->id)
                                   <a href="/series/{{$serie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$serie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                   </a>
                               <div class="mid-1 agileits_w3layouts_mid_1_home">
                                   <div class="w3l-movie-text">
                                       <h6><a href="single.html"></a>{{$serie->titulo}}</h6>
                                   </div>
                                     <div class="mid-2 agile_mid_2_home">
                                       <p>{{$serie->ano_lancamento}}</p>
                                    </div>
                                       <div class="block-stars">
                                           <p>{{$serie->avaliacao}}</p>
                                       </div>
                               </div>
                               @else
                                       <a href="/series/{{$serie->id}}/show" class="hvr-shutter-out-horizontal"><img src="{{asset('storage/images/articles').'/'.$serie->imagem}}" title="album-name" class="img-responsive" alt=" " />
                                           <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                       </a>
                                       <div class="mid-1 agileits_w3layouts_mid_1_home">
                                           <div class="w3l-movie-text">
                                               <h6><a href="single.html"></a>{{$serie->titulo}}</h6>
                                           </div>
                                           <div class="mid-2 agile_mid_2_home">
                                               <p>{{$serie->ano_lancamento}}</p>
                                           </div>
                                               <div class="block-stars">
                                                   <p>{{$serie->avaliacao}}</p>
                                               </div>
                               @endif
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
 @endforeach

</div>
	<!-- pop-up-box -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->



</body>
@endsection
