@extends('layouts.app')

@section('content')
<div class="container-fluid">
                    <div class="row">
                        <div class="col-3">
            
                            <div class="row wa-navbar">
                                <div class="col-8">
                                    <img src="images/profile.png" class="rounded-circle"/>
                                </div>
                                <div class="col-2">
                                    <i class="large material-icons wa-icon">chat</i>
                                </div>
                                <div class="col-2">
                                    <div class="dropdown">
                                        <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="large material-icons wa-icon">more_vert</i>
                                        </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Novo grupo</a>
                                            <a class="dropdown-item" href="#">Perfil</a>
                                            <a class="dropdown-item" href="#">Arquivado</a>
                                            <a class="dropdown-item" href="#">Destacado</a>
                                            <a class="dropdown-item" href="#">Configuração</a>
                                            <a class="dropdown-item" href="#">Fechar sessão</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
            
                            <div class="row">
                                <div class="col-12 wa-contatos">
                                    <input class="form-control wa-input" placeholder="Procurar ou começar uma nova conversa"/>
                                </div>
                            </div>
                            <div class="row wa-item-chat">
                                <div class="col-2">
                                    <img src="images/profile.png" class="rounded-circle"/>
                                </div>
                                <div class="col-8">
                                    <b>Rebeca G.</b><br/>
                                    <p class="wa-preview-message">Sed malesuada sem sed</p>
                                </div>
                                <div class="col-2" style="text-align: right">
                                    <span>16:24</span>
                                    <span class="badge badge-pill wa-badge">54</span>
                                </div>
                            </div>
                            <hr/>
            
                            <div class="row wa-item-chat">
                                <div class="col-2">
                                    <img src="images/profile.png" class="rounded-circle"/>
                                </div>
                                <div class="col-8">
                                    <b>Lorem ipsum dolor</b><br/>
                                    <p class="wa-preview-message">Sed malesuada sem sed</p>
                                </div>
                                <div class="col-2" style="text-align: right">
                                    <span>16:24</span>
                                    <span class="badge badge-pill wa-badge">81</span>
                                </div>
                            </div>
                            <hr/>
            
                            <div class="row wa-item-chat">
                                <div class="col-2">
                                    <img src="images/profile.png" class="rounded-circle"/>
                                </div>
                                <div class="col-8">
                                    <b>Lorem ipsum dolor</b><br/>
                                    <p class="wa-preview-message">Sed malesuada sem sed</p>
                                </div>
                                <div class="col-2" style="text-align: right">
                                    <span>16:24</span>
                                    <span class="badge badge-pill wa-badge">54</span>
                                </div>
                            </div>
                            <hr/>
            
                        </div>
                        <div class="col-9">
            
                            <div class="wa-navbar">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="images/profile.png" class="rounded-circle"/>
                                        </div>
                                        <div class="col-9">
                                            <div style="margin-top: 10px">
                                                <span style="font-size: 12px">Lorem ipsum dolor</span><br/>
                                                <span style="font-size: 12px">+55 00 0000-0000</span>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <i class="large material-icons wa-icon">search</i>
                                            <i class="large material-icons wa-icon">attach_file</i>
                                        </div>
                                        <div class="col-1">
                                            <div class="dropdown">
                                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="large material-icons wa-icon">more_vert</i>
                                                </a>
                                                
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Informações do contato</a>
                                                    <a class="dropdown-item" href="#">Selecionar mensagens</a>
                                                    <a class="dropdown-item" href="#">Silenciar</a>
                                                    <a class="dropdown-item" href="#">Limpar mensagens</a>
                                                    <a class="dropdown-item" href="#">Eliminar chat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>

                            </div>
            
            
                            <div class="wa-chat">
                                <div>
                                    <br/><br/>
                                    <div class="row">
                                        <div class="offset-2 col-8">
                                            <div style="text-align: center">
                                                <div class="card wa-card-chat wa-card-yellow">
                                                    As mensagens que você enviar e as ligações que você fizer nessa conversa estão protegidas com criptografia de ponta-a-ponta.
                                                    Clique para mais informações.
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="offset-6 col-5">
                                            <div class="card wa-card-chat wa-card-green">
                                                Ut eleifend condimentum elit non suscipit. Integer bibendum.
                                                <div style="text-align: right">
                                                    <span>11:00</span>
                                                    <i class="large material-icons wa-icon wa-chat-icon">done_all</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="card wa-card-chat wa-card-default">
                                                Ut eleifend condimentum elit non suscipit. Integer bibendum.
                                                <div style="text-align: right">
                                                    <span>11:10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <br/>
                                    <div class="row">
                                        <div class="offset-6 col-5">
                                            <div class="card wa-card-chat wa-card-green">
                                                Ut eleifend condimentum elit non suscipit. Integer bibendum.
                                                <div style="text-align: right">
                                                    <span>14:02</span>
                                                    <i class="large material-icons wa-icon wa-chat-icon">done_all</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
            
                                </div>
            
                            </div>
            
                                <div class="wa-panel-texto">
                                    <div style="text-align: center">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="large material-icons wa-icon">mood</i>
                                            </div>
                                            <div class="col-10">
                                                <input class="form-control wa-input" placeholder="Digite uma mensagem"/>
                                            </div>
                                            <div class="col-1">
                                                <i class="large material-icons wa-icon">mic</i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
            
            
            
            
                        </div>
                    </div>
            
        </div>
@endsection
