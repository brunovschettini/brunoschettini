<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Freelancer">
        <meta name="author" content="Bruno">
        <link rel="icon" href="ni.ico">

        <title>Bruno Schettini</title>

        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?= $this->Html->css('ie10-viewport-bug-workaround.css') ?>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]>
        <?= $this->Html->script('ie8-responsive-file-warning.js') ?>
            <![endif]-->
        <?= $this->Html->script('ie-emulation-modes-warning.js') ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <?= $this->Html->css('carousel.css') ?>
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <div class="navbar-wrapper">
            <div class="container">

                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Bruno Schettini</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#about">Sobre</a></li>
                                <li><a href="#contact">Contato</a></li>
                                <!-- 
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                                -->
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>



        <?= $this->Flash->render() ?>

        <div>
            <?= $this->fetch('content') ?>
        </div>


        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017 Schettini, Bruno. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
        </footer>

    </div><!-- /.container -->

    <div class="row" style="margin-top: 15px; border-top: 1px solid red">
        <div class="columns large-12">
            <h3>Inicie seu formulário aqui</h3>
            <form class="sweet-form" name="home">
                <!-- <input type="text" name="User[login]" placeholder="Escreva algo aqui" value="<?php // echo Param::get('user')->login; ?>"/> -->
                <!-- --data-listener="{'request':'Welcome','action':'listener'}" -->
                <input type="submit" data-controller="home" data-action="ola" value="Contato" data />
                <input type="submit" data-action="redirect" value="" />
            </form>
            <span class="returnAjax" style="color: red;">Seu retorno do ajax aqui!</span>
            <br />
            <br />
            <input type="submit" name="action" value="Clique aqui 1!!!" id="idCliqueAqui"/>
            <br />
            <br />
            <input class="sweet-click" type="submit" name="action" value="Página 2" data-config="{'request':'Welcome','dataAction':'getpage2'}"/>
        </div>
    </div>    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?= $this->Html->script('holder.min.js') ?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?= $this->Html->script('ie10-viewport-bug-workaround.js') ?>
    <?= $this->Html->script('sweetphp.js') ?>
</body>
</html>