<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('imgs/sistema/pk_siga.png') }}" rel="shortcut icon" /></link>
    <title>{{ config('app.name', 'PKCia.Siga') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Isso garante que o rodapé fique no fundo da folha no PDF */
        @media print {
            @page {
                margin: 1.5cm 1.5cm 2.5cm 1.5cm; /* Superior, Direita, Inferior, Esquerda */
                margin-bottom: 2.5cm; 
            } 
                      
            .footer-repetir {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                border-top: 1px solid #ddd;
                font-size: 10px;
                padding: 10px 0;
            }
        }

        /* Isso garante que ele fique no fundo da tela no navegador */
        .footer-tela {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            text-align: center;
            font-size: 9px;
            z-index: 999;
        }

        /* Para visualização no navegador também fixar no final */
        .footer-fixo {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            padding: 10px 0;
        }
        section {
            width: 100% !important; /* Mude de 75% para 100% no PDF */
        }
    </style>

    <body> 
    <div class="footer-repetir footer-tela">
        Juliano & Elaine

    </div>

    <center>
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            
           <!-- Logo ou título -->
                    <a href="{{ route('raiz') }}" class="text-white text-md font-bold">
                        <center><img width='50px;' src="{{ asset('imgs/sistema/programadores.png') }}"/>
                            {{ config('app.pkcia') }}
                        </center>
                    </a>
    

            <div>
                <!-- Links do menu -->
                <ul class="flex space-x-4">
                    <li><a href="{{ asset('gerapdf/eddie') }}" class="text-white font8" style="padding-right:30px;">
                            Gerar PDF<b class="font40 text-white"><strong>CV</strong> 
                        </b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a href="javascript:history.back()">
        <p class="retorna bg-green hover:bg-red-500 text-white font-bold py-2 px-4 rounded" >&times;</p>
    </a>
    <section style='width:70%; overflow-y: auto;'>
        
        <div>
            <nav class="flex justify-center my-4" style="width:80%; padding:10px 10px 10px 0; background-color:transparent; border-radius: 0 0 25px 0;">
                <div class="container-fluid w-full">
                    <!-- Adicionado: flex items-center justify-between no container pai -->
                    <div class="row texto-esquerda flex items-center justify-between gap-4" style="width:80%; margin-left:15%; position:relative;">
                        
                        <!-- Lado Esquerdo: Nome -->
                        <div class="flex">
                            <div id="pessoal1" class="text-center md:text-left z-10 cor1">
                                <p class="f-siga1 cor1 font-bold">Juliano</p>
                                <p class="phont2 cor1">Vaz</p>
                            </div>
                        </div>

                        <!-- Centro: Imagem -->
                        <div id="image1" class="z-10 shrink-0">
                            <img class="w-24 md:w-28 lg:w-32" src="{{ asset('/imgs/sistema/j1.jpeg') }}" style="border-radius:50%;"/><br>
                        </div>

                        <!-- Lado Direito: Dados de Contato -->
                        <div id="pessoal2" class="texto-esquerda cor1 text-[12px] z-10">
                            <div class="texto-esquerda cor1" style="z-index: 1;">
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/location-place.png') }}"/> Rua Armando Petrella, 431
                    </p>
                                <p class="phont2" style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cidade Jardim, cep
                                📍 05679-010 São Paulo-SP</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/phone-symbol.png') }}"/> Fone : 5511 9288-5410 / 5511 3804-9764
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="</p>icon" width=
                        
                        
                        
                '14px;' src="{{ asset('/imgs/icones/mail-email.png') }}"/> e-mail: makes_fashoin_mel.com</p>
                            </div>
                        </div>    
                        
                    </div>
                    <hr class="mt-4">
                </div>
            </nav>
            
        </div>
        
        <div style="display: inline-block; width:75%; padding-left:20px; padding-right:100px;" class="div-alinhada-direita">
                    <div class="texto-esquerda justify-center" style="text-align:justify;" ><br>
                        <p class="f-cabeca1"><a href="" class="text-blue text-md font-bold f-siga1">
                            Objetivo(s) :</a>
                        </p>
                        <p class="grid justify-items-auto grid-cols-0 text-align: justify;">
                        </p><br>Além dos estudos ( D.S), também tenho meu próprio negócio no ramo de maquiagens, que divulgo e administro pelo Instagram, através da minha loja @makes_fashoin_mel. Estou nesse ramo há aproximadamente 5 anos, trabalhando com a venda de produtos de maquiagem e atendendo diretamente meus clientes.

Ter minha própria loja me ajudou a desenvolver bastante minhas habilidades de comunicação, vendas, marketing, organização e atendimento ao cliente. Sou responsável por divulgar os produtos nas redes sociais, apresentar os produtos aos clientes, organizar as vendas e buscar formas de atrair novos clientes. Também trabalho com produtos de valores acessíveis, com itens de até R$ 20, buscando oferecer opções para diferentes públicos.

                        <p class="f-cabeca1 f-siga1 cor1 font-bold">Formação Acadêmica</p>

                            <p class="grid justify-items-auto" style="padding-bottom:5px;">
                                <p class="f-entidade">
                                    
                                    <p class="f-menor1">E.E. DONA ZALINA ROLIM
                                         </p>
                                       
                                    <p class="f-menor1">Curso Técnico em Desenvolvimento de Sistemas — Cursando</p>
                                
                                    <p class="f-menor1">Ensino Médio  3ª série — Cursando</p>
                    <p class="f-cabeca1 f-siga1 cor1 font-bold">Cursos e Treinamentos</p> 
<p class="f-entidade"> 
    <p class="f-negrito">Curso de Vendas</p> 
    <p class="f-menor1">Técnicas de vendas, atendimento ao cliente e negociação</p> 
</p> 
<p class="f-entidade"> 
    <p class="f-negrito">Curso de Marketing</p> 
    <p class="f-menor1">Estratégias de marketing, divulgação e relacionamento com clientes</p> 
</p> 
<p class="f-entidade"> 
    <p class="f-negrito">Experiência com Redes Sociais</p> 
    <p class="f-menor1">Administração e gerenciamento de Instagram para divulgação de produtos</p> 
</p> 

<br> 

<p class="f-cabeca1 f-siga1 cor1 font-bold">Experiências Profissionais</p> 

<p class="f-entidade"><lb class="f-menor1">Área :</lb><b class="f-negrito"> Vendas de Maquiagens</b></p> 
<p><lb class="f-menor1">Experiência :</lb> 5 anos</p> 
<p><lb class="f-menor1">Atuação :</lb> Atendimento ao cliente, vendas, apresentação de produtos, negociação e fidelização de clientes.</p> 

<br>

<p class="f-cabeca1 f-negrito f-siga1 cor1 font-bold">Experiências e Conhecimentos gerais</p> 
<br> 

<p><b class="f-negrito">Projetos Relevantes</b> 
    <p>Experiência na divulgação e venda de produtos de maquiagem, utilizando estratégias de atendimento, comunicação e redes sociais para alcançar clientes e aumentar as vendas.</p> 
</p> 

<br> 

<p><b class="f-negrito">Habilidades Técnicas</b> 
    <p>
        • Vendas e negociação<br>
        • Atendimento ao cliente<br>
        • Comunicação e relacionamento interpessoal<br>
        • Marketing e divulgação<br>
        • Administração e organização<br>
        • Gerenciamento de Instagram e redes sociais<br>
        • Fidelização de clientes<br>
        • Apresentação de produtos<br>
        • Proatividade e iniciativa<br>
        • Conhecimento em produtos de maquiagem
    </p> 
</p> 

<br><br><br>


                        
        </div>

    </section>
    </center>
    </body>
</html>





                                    
                                