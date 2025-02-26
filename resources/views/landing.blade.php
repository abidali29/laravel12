@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-3">
            <div class="row wa-navbar">
                <div class="col-8">
                    <img src="{{ asset('images/profile.png') }}" class="rounded-circle"/>
                </div>
                <div class="col-2">
                    <i class="large material-icons wa-icon">chat</i>
                </div>
                <div class="col-2">            
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                            <i class="large material-icons wa-icon">more_vert</i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Novo grupo</a>
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="#">Configuração</a>
                            <a class="dropdown-item" href="#">Fechar sessão</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contacts List -->
            <div class="row">
                <div class="col-12 wa-contatos">
                    <input class="form-control wa-input" placeholder="Procurar ou começar uma nova conversa"/>
                </div>
            </div>

            <div class="row wa-item-chat" onClick="abrirChat()">
                <div class="col-2">
                    <img src="{{ asset('images/profile.png') }}" class="rounded-circle"/>
                </div>
                <div class="col-8">
                    <b>ABid</b><br/>
                    <p class="wa-preview-message"> AOA</p>
                    <p class="wa-preview-message">W SLAM</p>
                </div>
                <div class="col-2" style="text-align: right">
                    <span>10:10PM</span>
                    <span class="badge badge-pill wa-badge">2</span>
                </div>
            </div>
            <hr/>
        </div>

        <!-- Chat Area -->
        <div class="col-9">
            <div class="wa-introducao">
                <div class="offset-3 wa-card-introducao">
                    <br/><br/><br/>
                    <img src="{{ asset('images/introducao.jpg') }}"/>
                    <br/><br/>
                    <h1>Mantenha seu telefone conectado</h1><br/>
                    <p>O WhatsApp Web conecta ao seu telefone para sincronizar suas mensagens.</p>
                    <hr/>
                    <p><span style="font-size: 18px;" class="fa fa-laptop"></span> O WhatsApp está disponível para Windows. <a href="https://www.whatsapp.com/download" target="_blank">Obtenha-o aqui</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
