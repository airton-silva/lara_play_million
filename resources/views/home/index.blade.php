@extends('layout.index')

@section('title', 'Home')

@section('content')
<div class="conteudo">

    <div class="base-inicial">
        <div class="colunas">
            <div class="col">
                <div class="pergunta">
                    <p>Qual ator imortalizou o personagem “Zé Bonitinho”?</p>
                </div>
                <form method="post" action="index.php?link=2">
                <ul class="opcoes">
                    <li class="errado"><span class="num">1</span><input type="radio" name="escolha" value="A" id="a"><label for="a"><span>RONI CÓCEGAS</span></label></li>
                    <li class="acertou"><span class="num">2</span><input type="radio" name="escolha" value="B" id="b"><label for="b"><span>JORGE LOREDO</span></label></li>
                    <li class=""><span class="num">3</span><input type="radio" name="escolha" value="C" id="c"><label for="c"><span>DAVI PINHEIRO</span></label></li>
                    <li class=""><span class="num">4</span><input type="radio" name="escolha" value="D" id="d"><label for="d"><span>ARNAUD RODRIGUES</span></label></li>
                </ul>
                <ul class="painel">
                    <li><span>10 mil </span><b>errar</b></li>
                    <li><span>20 </span><b>parar</b></li>
                    <li><span>30 mil </span><b>acertar</b></li>
                    <input type="hidden" name="perguntou" value="S">
                    
                    <li></li><li><input type="submit" class="but" value="PERGUNTAR"></li>
                </ul>
                </form>
                
            </div>
            <div class="col">
                
                <div class="ajuda">
                    <div class="placar">
                        <p>PLACAR:</p>
                        <b>20000</b>
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
                        <div class="col4 ativo">
                            <ul>
                            <li><span>Fase 01</span></li>
                            <li> 1 mil </li><li> 2 mil </li><li> 3 mil </li><li> 4 mil </li><li> 5 mil </li>								
                            </ul>
                        </div>	
                                                <div class="col4 ativo">
                            <ul>
                            <li><span>Fase 02</span></li>
                            <li> 10 mil </li><li> 20 mil </li><li class="marcado"> 30 mil </li><li> 40 mil </li><li> 50 mil </li>								
                            </ul>
                        </div>	
                                                <div class="col4 ativo">
                            <ul>
                            <li><span>Fase 03</span></li>
                            <li> 100 mil </li><li> 200 mil </li><li> 300 mil </li><li> 400 mil </li><li> 500 mil </li>								
                            </ul>
                        </div>	
                                                <div class="col4 ativo">
                            <ul>
                            <li><span>Fase 04</span></li>
                            <li><b><i class="milhao"></i>1MILHÃO</b></li>								
                            </ul>
                        </div>	
                    
                        
                        
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