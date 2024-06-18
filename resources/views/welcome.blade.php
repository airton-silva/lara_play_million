@extends('layout.index')
@section('title', 'Sign')

@section('content')
    
<div class="base-topo">
    <div class="conteudo">
        <span class="logo"></span>
    </div>
</div>

<div class="conteudo">
<div class="base-inicial">
    <div class="base-logar">
        <form action="{{url('/auth')}}" method="POST">
            @csrf
            <div class="col">
                <p class="ttl">Logar</p>
                <small>Entre com seu login e senha</small>
                <label>
                    <span>Usuario/ email</span>
                    <input type="text" name="email" placeholder="Digite seu nome de usuário">
                </label>
                <label>
                    <span>Senha</span>
                    <input type="text" name="password" placeholder="Digite sua senha">	
                </label>
                <label><a href="#janela1" rel="modal">Esqueci minha senha</a></label>
                
                <input type="submit" value="entrar" class="btn">
            </div>
            
            
            <div class="col2">
                
                <p class="ttl">cadastre-se</p>
                <small>Se você ainda não é cadastrado, cadastre-se abaixo</small>
                
                <label>
                <span>email</span>
                <input type="text" name="" placeholder="Digite um email válido">
                </label>
                
                <label>
                <span>Nome /usuário</span>
                <input type="text" name="" placeholder="Digite seu nome">
                </label>
                
                <label>
                <span>SEnha</span>
                <input type="text" name="" placeholder="Digite uma senha">
                </label>
                
                <input type="submit" value="Cadastrar" class="btn">
                
            </div>
        </form>
    </div>	
</div>
</div>

<!-- modal esqueci senha-->
<div class="window senha" id="janela1">
        <a href="#" class="fechar">X Fechar</a>
        <h1>Esqueci minha senha</h1>
        <div>
            <label>
                <span>Email</span>
                <input type="text" name="" placeholder="Digite seu endereço de email">
            </label>
            
                <input type="submit" value="Enviar" class="btn">
        </div>
</div>

<div id="mascara"></div>

@endsection



    
    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}