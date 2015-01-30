{% extends '/concessionaria/template.php' %}
{% block content %}
<ol class="breadcrumb">
    <li>Início</li>
    <li>Carros novos</li>
    <li class="active">Chevrolet</li>
</ol>
<!--################ PRISMA ##################-->
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div id="myCarousel" class="carousel slide carro" data-interval="3000" data-ride="carousel">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ url_for('static', filename='concessionaria/imgs/carros/prisma1.jpg') }}" alt="First slide">
                </div>
                <div class="item">
                    <img src="{{ url_for('static', filename='concessionaria/imgs/carros/prisma2.jpg') }}" alt="Second slide">
                </div>
                <div class="item">
                    <img src="{{ url_for('static', filename='concessionaria/imgs/carros/prisma3.jpg') }}" alt="Third slide">
                </div>
            </div>
        </div> 
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <h2>Prisma<small> A partir de R$43.000,00</small></h2>

        <div class="panel-group" id="accordion">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Motorização</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>
                            Tipo - Dianteiro transversal, Gasolina e Etanol<br/>
                            Número de cilindros - 4 em linha<br/>
                            Válvulas, total - 8 (SOHC)<br/>
                            Taxa de compressão - 12.6<br/>
                            Injeção eletrônica de combustível - M.P.F.I.<br/>
                            Potência Máxima Líquida - Etanol - 80 CV / Gasolina - 78 CV
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Transmissão</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>
                            Manual de 5 velocidades
                        </p>
                    </div>
                </div>
            </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Freios</a>
                        </h4>
                    </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>
                            Sistema - Hidráulico com duplo circuito distribuido em diagonal<br/>
                            Dianteiros - A disco ventilado<br/>
                            Traseiros - A tambor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!--################ ONIX ##################-->
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
        <h2>Onix<small> A partir de R$37.500,00</small></h2>

        <div class="panel-group" id="accordion2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">Motorização</a>
                    </h4>
                </div>
                <div id="collapseOne2" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>
                            Tipo - Dianteiro transversal, Gasolina e Etanol<br/>
                            Número de cilindros - 4 em linha<br/>
                            Válvulas, total - 8 (SOHC)<br/>
                            Taxa de compressão - 12.6<br/>
                            Injeção eletrônica de combustível - M.P.F.I.<br/>
                            Potência Máxima Líquida - Etanol - 80 CV / Gasolina - 78 CV
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">Transmissão</a>
                    </h4>
                </div>
                <div id="collapseTwo2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>
                            Manual de 5 velocidades
                        </p>
                    </div>
                </div>
            </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">Freios</a>
                        </h4>
                    </div>
                <div id="collapseThree2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>
                            Sistema - Hidráulico com duplo circuito distribuido em diagonal<br/>
                            Dianteiros - A disco ventilado<br/>
                            Traseiros - A tambor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div id="myCarousel" class="carousel slide carro" data-interval="3000" data-ride="carousel">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ url_for('static', filename='concessionaria/imgs/carros/onix1.jpg') }}" alt="First slide">
                </div>
                <div class="item">
                    <img src="{{ url_for('static', filename='concessionaria/imgs/carros/onix2.jpg') }}" alt="Second slide">
                </div>
                <div class="item">
                    <img src="{{ url_for('static', filename='concessionaria/imgs/carros/onix3.jpg') }}" alt="Third slide">
                </div>
            </div>
        </div> 
    </div>
</div>
{% endblock %}