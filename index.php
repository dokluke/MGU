<html>
    <head>
        <!-- referencia do css -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <!-- configurações da página-->
        <meta charset="utf-8"> 
        <title> MGU - F1 Database </title>

    </head>

    <body> 
        <!-- Conteudo da pagina -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12" id="DivMenu">
                    <?php
                    include "menutopo.php";
                    ?>
                    
                </div>

            </div>


            <div class="row">

                <div class="col-md-13" id="DivBanner">
                    <img src="img/BANNER.jpg" width="100%">
                   <!--BANNER--> 
                </div>

            </div>
                <div class="container">
            <div class="row">  

                <div class="col-md-4 text-center" id="DivCard1">
                    <div class="card col-md-12" id="Cards">
                        <div class="card-header bg-dark">
                            <font class="TituloCard"> Notícias </font>     
                            </div>
                            <div class="card-body">     
                                <img src="img/news.png" class="ImgCard">
                            </div>
                            <div class="card-footer bg-white">     
                                Notícias sobre a temporada
                            </div>
                        </div>    
                    </div>        

                    <div class="col-md-4 text-center" id="DivCard2">
                        <div class="card col-md-12" id="Cards">
                            <div class="card-header bg-dark">
                                <font class="TituloCard"> Calendário </font>     
                                </div>
                                <div class="card-body">     
                                    <img src="img/calendario.png" class="ImgCard">
                                </div>
                                <div class="card-footer bg-white">     
                                Calendário de provas e eventos
                                    
                                </div>
                            </div>    
                        </div>

                        <div class="col-md-4 text-center" id="DivCard3">
                            <div class="card col-md-12" id="Cards">
                            <div class="card-header bg-dark">
                                <font class="TituloCard"> Equipes </font>     
                                </div>
                                <div class="card-body">     
                                 <img src="img/equipe.png" class="ImgCard">
                                </div>
                                <div class="card-footer bg-white">     
                                Escuderias que buscam o título
                                    
                                </div>
                            </div>    
                        </div>
                    </div>
                </div></div>
                <div class="col-md-12" id="DivCards">
                   .<!--O QUE PÕE NESSA PORRA?--> 
                </div>
                    <div class="container" >

                        <div class="row">

                    <div class="col-md-4 text-center" id="DivCard4">
                        <div class="card col-md-12" id="Cards">
                            <div class="card-header bg-dark">
                                <font class="TituloCard"> Pilotos </font>     
                                </div>
                                <div class="card-body">     
                                    <img src="img/piloto.png" class="ImgCard">
                                </div>
                                <div class="card-footer bg-white">     
                                    Notícias e estatísticas
                                </div>
                            </div>    
                        </div>        
    
                        <div class="col-md-4 text-center" id="DivCard5">
                            <div class="card col-md-12" id="Cards">
                                <div class="card-header bg-dark">
                                    <font class="TituloCard"> Classificação </font>     
                                    </div>
                                    <div class="card-body">     
                                        <img src="img/campeonato.png" class="ImgCard">
                                    </div>
                                    <div class="card-footer bg-white">     
                                    Classificação por equipe e pilotos
                                        
                                    </div>
                                </div>    
                            </div>
    
                            <div class="col-md-4 text-center" id="DivCard6">
                                <div class="card col-md-12" id="Cards">
                                <div class="card-header bg-dark">
                                    <font class="TituloCard"> Social </font>     
                                    </div>
                                    <div class="card-body">     
                                     <img src="img/social.png" class="ImgCard">
                                    </div>
                                    <div class="card-footer bg-white">     
                                    Nos acompanhe pelas redes sociais
                                        
                                    </div>
                                </div>    
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12" id="DivRodape">
                            Rodape
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </body>    
</html>