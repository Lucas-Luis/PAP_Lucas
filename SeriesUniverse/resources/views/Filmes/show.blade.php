 @extends('layouts.outer')
@section('content')
<div class="single-page-agile-info">
    <!-- /movie-browse-agile -->
    <div class="show-top-grids-w3lagile">
        <div class="col-sm-8 single-left">
            <div class="song">
                <div class="song-info">
                    <h3>{{$filme->titulo}}</h3>
                </div>
                <div class="video-grid-single-page-agileits">
                    <div data-video="dLmKio67pVQ" id="video"> <img  src="{{asset('storage/images/articles').'/'.$filme->imagem}}" alt=""
                            class="img-responsive" /> </div>
                </div>
            </div>
        <div class="song-grid-right">
                <div class="share">
                    <h5>Sobre o Filme</h5>

                        <ul>
                            <li>
                            <strong>Data lançamento:</strong> {{$filme->ano_lancamento}}</li>
                            <li><strong>Realizador:</strong> {{$filme->realizador}}</li>
                            <li><strong>Duração:</strong> {{$filme->duracao}}</li>
                            <li><strong>Plataforma:</strong> {{$filme->plataforma->nome}}</li>
                            <li><strong>Categoria:</strong> {{$filme->categoria->genero}}</li>
                            <li><strong>Resumo:</strong> {{$filme->descricao}}</li>
                            <li><strong>Elenco:</strong> {{$filme->elenco}}</li>
                            <li><strong>Avaliação:</strong> {{$filme->avaliacao}}</li>
                            <p><strong>Triler:</strong></p><a href="{{$filme->trailer}}" target="_blank">{{$filme->trailer}}</a>

                        </ul>
                </div>
            </div>
            <div class="clearfix"> </div>


        </div>





    </div>
    <!-- //movie-browse-agile -->
    <!--body wrapper start-->
   {{--  <div class="w3_agile_banner_bottom_grid">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m13.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">Citizen Soldier</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">X-Men</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m12.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">Greater</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">Light B/t Oceans</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m8.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">The BFG</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">Central Intelligence</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m10.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">Don't Think Twice</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="single.html">Peter</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>2016</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben">
                        <p>NEW</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                    <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m15.jpg"
                            title="album-name" class="img-responsive" alt=" " />
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                        </div>
                    </a>


                </div>
            </div>
        </div>
    </div> --}}
    <!--body wrapper end-->


</div>
@endsection
