<html>
    <head>
        <!--referencia do CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Itim|Sriracha&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">

        <!--Configurações da pagina-->
        <meta charset="utf-8">
        
        <title>MGU - Contato </title>

    </head>

    <body> 

        <?php
        include "MenuTopo.php";
        ?>

        <!--Conteudo da página -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12" id="DivBanner">
                    <img src="img/banner.jpg" width="100%" style="padding-top:25px;">
                </div>

            </div> 
                                    <br><br><br><br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <font class="TituloPagina">Contato</font>

                    <br><br><br><br><br><br><br>

                </div>

            </div>


            <div class="row">

                <div class="col-md-2">
                </div>

                <div class="col-md-3 border">

                    <form action="Email.php" method="POST">

                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" name="HTML_nome" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="email" name="HTML_email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Assunto:</label>
                            <select name="HTML_assunto" class="form-control">
                                <option value="Dúvidas">Críticas</option>
                                <option value="Informações">Sugestões</option>
                                <option value="Aulas">Informações</option>
                                <option value="Aulas">Reportagens</option>
                            </select>    
                        </div>

                        <div class="form-group">
                            <label>Mensagem:</label>
                            <textarea name="HTML_mensagem" class="form-control" style="height:80px; "></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark float-right">Enviar!</button>
                        </div>

                        <br><br>
                    </form>

                </div>

                <div class="col-md-2 text-center">

                    <i class="fa fa-youtube fa-3x text-danger"></i>  <br><br>
                    <font class="TextoSimples">
                    youtube.com/Formula1
                    </font>

                    <br><br>

                    <i class="fa fa-whatsapp fa-3x text-success"></i>  <br><br>
                    <font class="TextoSimples">
                    (11)95555-1234
                    </font>

                    <br><br>

                    <i class="fa fa-instagram fa-3x text-warning" ></i>  <br><br>
                    <font class="TextoSimples">
                    instagram/dok.jpg
                    </font>

                    <br><br>

                    <i class="fa fa-envelope fa-3x text-info"></i>  <br><br>
                    <font class="TextoSimples">
                   lcsramos@gmail.com
                    </font>

                </div>

                <div class="col-md-3 border text-center">
                    <font class="TituloMod">Localização</font><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1272.352781413002!2d6.984628276774447!3d50.37204450447583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47be5369e4858531%3A0xcbd6ad20f15a2dcc!2sKarusell%20Nurburgring%20Nordschleife!5e0!3m2!1spt-BR!2sbr!4v1587579098654!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <br><br>   
                    <font class="TituloCard">
                    R. Eng. Prestes Maia, 88 
                    <br>
                    Centro - Guarulhos
                    <br>
                    07023-070
                    </font>
                    <br><br>
                </div>

                <div class="col-md-2">

                </div>

            </div>

        </div>
        <br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
                    
                    <div class="col-md-12" id="DivBanner">
                    <br>
                        <?php
                            include "Rodape.php";
                        ?>
                        </div>
                </body>    
            </html>