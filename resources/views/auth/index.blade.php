@extends('layout.index')
@section('title', 'Sign')

@section('content')

    <div class="conteudo">
        <div class="base-inicial">
            <div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
            </div>
            <div class="base-logar">
                <form action="{{ route('login') }}" method="POST">
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
                    
                </form>
                    
                    <div class="col2">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <p class="ttl">cadastre-se</p>
                            <small>Se você ainda não é cadastrado, cadastre-se abaixo</small>
                            
                            <label>
                            <span>email</span>
                            <input type="text" name="email" placeholder="Digite um email válido" value="{{old('email')}}">
                            </label>
                            
                            <label>
                            <span>Nome /usuário</span>
                            <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}">
                            </label>
                            
                            <label>
                            <span>SEnha</span>
                            <input type="text" name="password" placeholder="Digite uma senha">
                            </label>
                            
                            <label>
                                <span>Confirmar SEnha</span>
                                <input type="text" name="password_confirmation" placeholder="Confirme a senha digitada">
                            </label>

                            <input type="submit" value="Cadastrar" class="btn">
                        </form>    
                    </div>
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


