<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php wp_head(); ?>

</head>
    
<body>

    <header class="header">

        <div class="navbar-fixed">
            
            <nav class="white">
                <div class="nav-wrapper container">

                    <a href="#" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.png" height="50px" class="brand-logo" alt="Cosmos Tradução">
                    </a>

                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
                   
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#" class="black-text">Home</a></li>
                        <li><a href="#" class="black-text">Serviços</a></li>
                        <li><a href="#" class="black-text">Sobre</a></li>
                        <li><a href="#" class="black-text">Projeto</a></li>
                        <li><a href="#" class="black-text">Portfólio</a></li>
                        <li><a href="#" class="black-text">Contato</a></li>
                    </ul>

                </div>
            </nav>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="#">Home</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Projeto</a></li>
                <li><a href="#">Portfólio</a></li>
                <li><a href="#">Contato</a></li>
            </ul>

        </div>

    </header>
    
    <main>
       
        <!-- HOME -->
         <div class="parallax-container">
            <div class="parallax"><img class="responsive-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/Bg.jpg"></div>
        </div>

        <div>
            <section class="container"> 
                <p>Agilidade e confidencialidade total em serviços de tradução, legendagem e revisão envolvendo os idiomas inglês, espanhol e português.</p>
                <p>A Cosmos preza sempre pela excelência e eficiência dos resultados e conta com ferramentas tradutórias da mais atual tecnologia, oferecendo serviços especializados por quem ama a arte de traduzir.</p>
            </section>
        </div>

        <div class="center-align">
                <a class="waves-effect waves-light btn black white-text" id="button">Contato</a>
        </div>
        
        <!-- SERVIÇOS -->
        <h4 class="container" id="serv-title">Serviços</h4>

        <div class="row container" id="servicos">
            <div class="col s4">
                <div class="center promo">
                <i class="material-icons large">translate</i>
                <h5 class="promo-caption">Tradução</h5>
                <p class="light center">Tradução de textos entre os idiomas inglês, português e espanhol.</p>
            </div>
            </div>
            <div class="col s4">
                <div class="center promo">
                <i class="material-icons large">subtitles</i>
                <h5 class="promo-caption">Legendagem</h5>
                <p class="light center">Legendagem de diversas mídias, com a opção de queima da legenda no arquivo final.</p>
                </div>
            </div>
            <div class="col s4">
                <div class="center promo">
                <i class="material-icons large">book</i>
                <h5 class="promo-caption">Revisão</h5>
                <p class="light center">Revisão ortográfica e gramatical, além de formatação do texto para que se adeque às normas da ABNT.</p>
                </div>
            </div>
        </div>

        <div class="row container" id="servicos">
            <div class="col s4">
                <div class="center promo">
                <i class="material-icons large">speaker_notes</i>
                <h5 class="promo-caption">Tradução para dublagem</h5>
                <p class="light center">Tradução para dublagem de diversas mídias, incluindo seriados, documentários, trailers e filmes de curta e longa-metragem.</p>
                </div>
            </div>
            <div class="col s4">
                <div class="center promo">
                <i class="material-icons large">closed_caption</i>
                <h5 class="promo-caption">Legendagem para surdos e ensurdecidos</h5>
                <p class="light center">Acessibilidade de mídia através da legendagem para surdos e ensurdecidos (LSE).</p>
                </div>
            </div>
            <div class="col s4">
                <div class="center promo">
                <i class="material-icons large">chat</i>
                <h5 class="promo-caption">Audiodescrição</h5>
                <p class="light center">Criação de roteiro para audiodescrição para garantir a acessibilidade de seu conteúdo.</p>
                </div>
            </div>
        </div>

        <div class="row container" id="servicos-3">
            <div class="col s4 offset-s4">
                <div class="center promo">
                <i class="material-icons large">videogame_asset</i>
                <h5 class="promo-caption">Tradução e localização de videogames</h5>
                <p class="light center">Tradução da interface em si e outros elementos externos ao jogo.</p>
                </div>
            </div>
        </div>

        <!-- SOBRE -->
        <h4 class="container" id="sobre-title">Sobre</h4>

        <div class="row">
            <div class=" col s8 offset-s2">

                <div class="card">
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#site">O site</a></li>
                            <li class="tab"><a class="active" href="#aluna">A aluna</a></li>
                            <li class="tab"><a href="#curriculo">O currículo</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4">
                        <div id="site">
                            <p>O site Cosmos Tradução é a realização de um sonho antigo. Com o objetivo de oferecer serviços de tradução dos mais diversos tipos, este site foi criado como Trabalho de Conclusão de Curso na pós-graduação em Tradução Audiovisual da Universidade Estácio de Sá.</p>
                        </div>
                        <div id="aluna">
                            <div class="row">
                                <div class="col s6">
                                    <p id="orange">Bruna Muñoz</p>
                                    <p id="orange">brunarnm@gmail.com</p>
                                    <p id="aluna">Bacharel em Letras com Habilitação de Tradutor (Unesp),
                                    atualmente cursando a pós-graduação em Tradução Audiovisual da Universidade Estácio de Sá.</p>
                                </div>
                                <div class="col s6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto.png" alt="Bruna">
                                </div>
                            </div>
                        </div>
                        <div id="curriculo">
                            <p>Meu currículo pode ser visualizado <a href="https://drive.google.com/open?id=1Q-ZEZUW9clv6emKdIVYQfVuSSd7on1gK">clicando aqui</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROJETO -->
        <h4 class="container" id="projeto-title">Projeto</h4>
            <img class="projeto-img" src="img/projeto.jpg">
            <div class="container"> 
                <p>A seguir estão dispostos os materiais traduzidos para a realização do Trabalho de Conclusão do curso da pós-graduação em Tradução Audiovisual da Universidade Estácio de Sá.</p>
                <h5>Tradução para Legendagem</h5>
                <p>Trecho do filme "Valente"</p>
                <div>
                    <a href="https://drive.google.com/open?id=1ZOa8_QC8mtO1dv0XKbnRnnr2scp_yl4W"><img class="doc-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/srt.png"></a>
                </div>
                <div>
                    <a href="https://drive.google.com/open?id=18UpqrkR_667Hh06pb4WABw9KiMcN00A0"><img class="doc-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/mp4.png"></a>
                </div>
                <h5>Acessibilidade</h5>
                <p>Roteiro de audiodescrição de um trecho de Motorrad:</p>
                <a href="https://drive.google.com/open?id=1Vt54PkTiZy4dm2yZliu8z0lkP04jXDbx"><img class="doc-img" id="doc3" src="<?php echo get_template_directory_uri(); ?>/assets/images/doc.png"></a>
            </div>

        <!-- CONTATO -->
        <h4 class="container" id="contato-title">Contato</h4>
        <div class="container"> 
            <p>Dúvidas ou sugestões? Envie uma mensagem através do formulário abaixo. Você também pode enviar arquivos para solicitação de orçamento para o email <b>cosmostraducao@gmail.com</b>. Aguardamos sua mensagem!</p>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">

                    <div class="input-field col s6 offset-s3">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Nome</label>
                    </div>

                    <div class="input-field col s6 offset-s3">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Sobrenome</label>
                    </div>

                    <div class="input-field col s6 offset-s3">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                            <span class="helper-text" data-error="wrong" data-success="right"></span>
                    </div>

                    <div class="input-field col s6 offset-s3">
                        <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                        <label for="textarea2">Textarea</label>
                      </div>

                </div>

                <div class="center-align">
                    <button class="btn waves-effect waves-light btn black white-text" type="submit" name="action" id="button">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </form>
        </div>

    </main>