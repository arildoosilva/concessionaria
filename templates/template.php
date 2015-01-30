<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/bootstrap.min.css') }}" media="screen">
        <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/bootstrap-responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/custom.css') }}">
        
        <script src="{{ url_for('static', filename='js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ url_for('static', filename='js/bootstrap.min.js') }}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proativ Cars</title>
    </head>
	<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li><img class="imglogo" src="{{ url_for('static', filename='imgs/logos/logo.jpg') }}" alt="Proativ Cars"/></li>
                    <li><a href="/">Início</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Novos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ford">Ford</a></li>
                            <li><a href="/chevrolet">Chevrolet</a></li>
                            <li><a href="/volkswagen">Volkswagen</a></li>
                            <li><a href="/fiat">Fiat</a></li>
                            <li><a href="/honda">Honda</a></li>
                            <li><a href="/jac">Jac Motors</a></li>
                            <li><a href="/lifan">Lifan</a></li>
                            <li><a href="/nissan">Nissan</a></li>
                            <li><a href="/peugeot">Peugeot</a></li>
                            <li><a href="/aston">Aston Martin</a></li>
                            <li><a href="/audi">Audi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Semi-novos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/ford">Ford</a></li>
                            <li><a href="/chevrolet">Chevrolet</a></li>
                            <li><a href="/volkswagen">Volkswagen</a></li>
                            <li><a href="/fiat">Fiat</a></li>
                            <li><a href="/honda">Honda</a></li>
                            <li><a href="/jac">Jac Motors</a></li>
                            <li><a href="/lifan">Lifan</a></li>
                            <li><a href="/nissan">Nissan</a></li>
                            <li><a href="/peugeot">Peugeot</a></li>
                            <li><a href="/aston">Aston Martin</a></li>
                            <li><a href="/audi">Audi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Serviços <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/revisao">Revisão</a></li>
                            <li><a href="/acessorios">Acessórios</a></li>
                            <li><a href="/manuais">Manuais</a></li>
                        </ul>
                    </li>
				</ul>
				<form role="search" class="navbar-form navbar-right">
					<div class="form-group">
					<input type="text" placeholder="Digite sua busca" class="form-control">&nbsp;
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/cadastro">Cadastro</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="bs-example">
            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="active item carousel-img1">
                        <h2 class="h2-carousel">Proativ Cars</h2>
                    </div>
                    <div class="item carousel-img2">
                        <h2 class="h2-carousel">Proativ Cars</h2>
                    </div>
                    <div class="item carousel-img3">
                        <h2 class="h2-carousel">Proativ Cars</h2>
                    </div>
                </div>
            </div>
        </div>
        <br/>
				{% block content %}
				{% endblock %}
		<hr>
        <div class="row">
            <div class="col-sm-12">
                <footer>
						<ul class="nav navbar-nav">
							<li><a href="#">Desenvolvido por Proativ - Copyright © 2015</a></li>
                            <li><a href="#">Sobre Nós</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Contato</a></li>
						</ul>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>