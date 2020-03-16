<html>
    <head>
        <!-- referencia do css -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Gruppo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">

        <!-- configurações da página-->
        <meta charset="utf-8"> 
    
        <title>MGU - F1 Database </title>

    </head>

    <body> 
        <!-- Conteudo da pagina -->
        <div class="container-fluid">
            <center>
<font style="font-family: 'Gruppo', cursive;"</font>
</center>
            <div class="row">

                <div class="col-md-12" id="DivMenu">
                    <?php
                    include "menutopo.php";
                    ?>
                    
                </div>

            </div>


            <div class="row">

                <div class="col-md-12" id="DivBanner">
                    <img src="img/BANNER.jpg" width="100%" style="padding-top:25px;">
                   <!--BANNER--> 
                   <br><br>
                </div>

            </div>
       <div class="container">
            <div class="row">  

                <div class="col-md-4 text-center" id="DivCard1">
                    <div class="card col-md-12" id="Cards">
                        <div class="card-header bg-dark">
                        <a href="news.php">
                            <font class="TituloCard"> Notícias </font>     
                            </div>
                            <div class="card-body">
                            <img src="img/news.png" class="img-thumnail">
                            </div>
                            <div class="card-footer bg-secondary text-warning">   
                            </a>  
                                Notícias sobre a temporada
                            </div>
                        </div>    
                    </div>        

                    <div class="col-md-4 text-center" id="DivCard2">
                        <div class="card col-md-12" id="Cards">
                            <div class="card-header bg-dark">
                            <a href="calendario.php">
                                <font class="TituloCard"> Calendário </font>     
                                </div>
                                <div class="card-body">     
                                    <img src="img/calendario.png" class="img-thumnail">
                                </div>
                                <div class="card-footer bg-secondary text-warning"> 
                                </a>    
                                Calendário de provas e eventos
                                   
                                </div>
                            </div>    
                        </div>

                        <div class="col-md-4 text-center" id="DivCard3">
                            <div class="card col-md-12" id="Cards">
                            <div class="card-header bg-dark">
                            <a href="equipes.php">
                                <font class="TituloCard" > Equipes </font>     
                                </div>
                                <div class="card-body">     
                                 <img src="img/equipe.png" class="img-thumnail">
                                </div>
                                <div class="card-footer bg-secondary text-warning">  
                                </a>   
                                Escuderias que buscam o título
                                    
                                </div>
                            </div>    
                        </div>
                    </div>
                </div></div>
                <div class="col-md-12" id="DivCards">
                    <br>
                </div>
                    <div class="container" >

                        <div class="row">

                    <div class="col-md-4 text-center" id="DivCard4">
                        <div class="card col-md-12" id="Cards">
                            <div class="card-header bg-dark">
                            <a href="pilotos.php">
                                <font class="TituloCard"> Pilotos </font>     
                                </div>
                                <div class="card-body">     
                                    <img src="img/piloto.png" class="img-thumnail">
                                </div>
                                <div class="card-footer bg-secondary text-warning">     
                                </a>
                                    Notícias e estatísticas
                                </div>
                            </div>    
                        </div>        
    
                        <div class="col-md-4 text-center" id="DivCard5">
                            <div class="card col-md-12" id="Cards">
                                <div class="card-header bg-dark">
                                <a href="classificacao.php">
                                    <font class="TituloCard"> Classificação </font>     
                                    </div>
                                    <div class="card-body">     
                                        <img src="img/campeonato.png" class="img-thumnail">
                                    </div>
                                    <div class="card-footer bg-secondary text-warning">  
                                    </a>   
                                    Classificação por equipe e pilotos
                                        
                                    </div>
                                </div>    
                            </div>
    
                            <div class="col-md-4 text-center" id="DivCard6">
                                <div class="card col-md-12" id="Cards">
                                <div class="card-header bg-dark">
                                <a href="social.php">
                                    <font class="TituloCard"> Social </font>     
                                    </div>
                                    <div class="card-body">     
                                     <img src="img/social.png" class="img-thumnail">
                                    </div>
                                    <div class="card-footer bg-secondary text-warning"> 
                                    </a>    
                                    Nos acompanhe pelas redes sociais
                                        
                                    </div>
                                </div>    
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        

                    </div>

                </div>
            </div>

        </div>
                    
        <div class="col-md-12" id="DivBanner">
        <br>
            <?php
                include "Rodape.php";
            ?>
            </div>
    </body>    
</html>