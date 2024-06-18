@if (Auth::user())

    <div class="base-topo">
        <div class="conteudo">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="base-botoes-topo">			
                    <a href="" class="btn estatistica">Estatistica</a>	
                    <button type="submit"  class="btn sair">sair</button>
                </div>
                <span class="logo"></span>
                <div class="usuario">
                    <a href=""><small>Jogador:</small>{{ Auth::user()->name }}</a>

                </div>
            </form>
        </div>
    </div>
    
@else
    <div class="base-topo">
        <div class="conteudo">
            <span class="logo"></span>
        </div>
    </div>
    
@endif
