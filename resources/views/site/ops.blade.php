@extends('../layouts.dashboard')

@push('styles')
<style>
    @font-face {
        font-family: 'vila madalena';
        src: url("{{ asset('/fonts/vila madalena.otf') }}");
    }

    body {
        background: linear-gradient(135deg, #ff1493, #ff69b4);
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
    }

    .alert-message {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #f73757;
        border-radius: 4px;
        color: #f236a1;
        background-color: #e78acb;

    }
</style>
@endpush

@section('content')
<section class="container">
    <center>
    <a href="{{ url()->previous() }}">
        @if(session()->has('mensagem'))
          
            <div class="alert-message" role="alert">
                <pre>{{ session('mensagem') }}</pre>
                {{ \App\Classes\Datas::dataHora() }}
            </div>

            <div class="divTitulo">OOOps...</div>
            <div>Operação Não Realizada</div><br>

                <img width="300" src="{{ asset('imgs/sistema/sem_permissao.png') }}">
            
        @else
            
                <div class="alert-message" role="alert">
                    &nbsp;&nbsp;&nbsp;&nbsp;⚠️ Controle de Rotina &nbsp;&nbsp;&nbsp;&nbsp; 
                </div><br>
                <div>🔐 Operação Não Realizada</div>
            
        @endif
    </a>
    </center>
</section>
@Juliano

