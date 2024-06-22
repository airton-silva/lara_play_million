@extends('layout.index')

@section('title', 'Home')

@section('content')
<div class="conteudo">

    <div class="base-inicial">
        <div class="colunas">
            <div class="col">
                <div class="pergunta">
                    <p>{{$question->question}}?</p>
                </div>
                <form method="post" action="index.php?link=2">
                <ul class="opcoes">
                    <li class="errado"><span class="num">1</span><input type="radio" name="escolha" value="A" id="a"><label for="a"><span>{{$question->alternatives->letterA}}</span></label></li>
                    <li class="acertou"><span class="num">2</span><input type="radio" name="escolha" value="B" id="b"><label for="b"><span>{{$question->alternatives->letterB}}</span></label></li>
                    <li class=""><span class="num">3</span><input type="radio" name="escolha" value="C" id="c"><label for="c"><span>{{$question->alternatives->letterC}}</span></label></li>
                    <li class=""><span class="num">4</span><input type="radio" name="escolha" value="D" id="d"><label for="d"><span>{{$question->alternatives->letterD}}</span></label></li>
                </ul>
                <ul class="painel">
                    <li><span>{{$game->level->err}} </span><b>errar</b></li>
                    <li><span>{{$game->level->stop}}</span><b>parar</b></li>
                    <li><span>{{$game->level->correct}} </span><b>acertar</b></li>
                    <input type="hidden" name="perguntou" value="S">
                    
                    <li></li><li><input type="submit" class="but" value="PERGUNTAR"></li>
                </ul>
                </form>
                
            </div>
            <div class="col">
                
                <div class="ajuda">
                    <div class="placar">
                        <p>PLACAR:</p>
                        <b>{{$game->value_gain}}</b>
                    </div>
                    
                    <div class="colunas2">
                        <span class="titulo">ajuda:</span>
                        <div>
                            <a href="#janela1" rel="modal" class="col3"><img src="{{asset('assets/img/img-cartas2.png')}}"></a>
                            <a href="#janela1" rel="modal" class="col3"><img src="{{asset('assets/img/img-cartas.png')}}"></a>
                            <a href="#janela1" rel="modal" class="col3"><img src="{{asset('assets/img/img-cartas.png')}}"></a>
                            <a href="#" class="col3"><img src="{{asset('assets/img/img-pular2.png')}}"></a>
                            <a href="#" class="col3"><img src="{{asset('assets/img/img-pular.png')}}"></a>                            
                            <a href="" class="col3"><img src="{{asset('assets/img/ico-parar.png')}}"></a>
                            
                        </div>
                    </div>
                </div>
                
                
            </div>
            
            
                <div class="colunas">
                    @foreach($rounds as $round)
                        <div class="col4 ativo">
                            <ul>
                                <li><span>Rodada {{$round->id}}</span></li>
                                @foreach ($round->levels as $level)
                                    @if ($round->id != 4)
                                        <li class="{{$level->level==$game->level->level ? 'marcado' : ''}}">{{$level->level}}</li>
                                        
                                    @else
                                        <li class="{{$level->level==$game->level->level ? 'marcado' : ''}}"><b><i class="milhao"></i>{{$level->level}}</b></li>
                                    @endif
                                @endforeach
                           
                            </ul>
                        </div>	
                    @endforeach                
                              
                </div>
        </div>
    </div>
</div>
            
            
        <!-- modal-->
        <div class="window" id="janela1">
            <div class="base-cartas">
                <a href="#" class="fechar">X Fechar</a>
                <h1>Ajuda das cartas</h1>
                <div>
                    <div class="col"><img src="img/carta-virada.png"></div>
                    <div class="col"><img src="img/carta02.png"></div>
                    <div class="col"><img src="img/carta-virada.png"></div>
                    <div class="col"><img src="img/carta-virada.png"></div>
                </div>
            </div>
                
        </div>
        <div id="mascara"></div>

@endsection