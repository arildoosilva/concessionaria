{% extends '/concessionaria/template.php' %}
{% block content %}
<ol class="breadcrumb">
    <li class="active">Início</li>
</ol>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h2>Ofertas</h2>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of1.jpg') }}" alt="Oferta 1" class="img-rounded">
            <h3 class="oferta-texto">Celta 2014<br/>R$ 25.000</h3>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of4.jpg') }}" alt="Oferta 2" class="img-rounded">
            <h3 class="oferta-texto">Qashqai 2014<br/>R$ 110.000</h3>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of3.jpg') }}" alt="Oferta 3" class="img-rounded">
            <h3 class="oferta-texto">Audi A8 2014<br/>R$ 550.000</h3>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of2.jpg') }}" alt="Oferta 4" class="img-rounded">
            <h3 class="oferta-texto">Gol 2014<br/>R$ 30.000</h3>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of4.jpg') }}" alt="Oferta 1" class="img-rounded">
            <h3 class="oferta-texto">Qashqai 2014<br/>R$ 110.000</h3>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of2.jpg') }}" alt="Oferta 2" class="img-rounded">
            <h3 class="oferta-texto">Gol 2014<br/>R$ 30.000</h3>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of1.jpg') }}" alt="Oferta 3" class="img-rounded">
            <h3 class="oferta-texto">Celta 2014<br/>R$ 25.000</h3>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 oferta">
        <a href="#">
            <img src="{{ url_for('static', filename='concessionaria/imgs/of3.jpg') }}" alt="Oferta 4" class="img-rounded">
            <h3 class="oferta-texto">Audi A8 2014<br/>R$ 550.000</h3>
        </a>
    </div>

</div>
<hr>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centro">
        <h3>Siga o Proativ Cars nas redes sociais</h3>
        <a href="#"><img src="{{ url_for('static', filename='concessionaria/imgs/redes/fb.png') }}" alt="Facebook"/></a>
        <a href="#"><img src="{{ url_for('static', filename='concessionaria/imgs/redes/gp.png') }}" alt="Google+"/></a>
        <a href="#"><img src="{{ url_for('static', filename='concessionaria/imgs/redes/tt.png') }}" alt="Twitter"/></a>
        <a href="#"><img src="{{ url_for('static', filename='concessionaria/imgs/redes/ins.png') }}" alt="Instagram"/></a>
        <a href="#"><img src="{{ url_for('static', filename='concessionaria/imgs/redes/yt.png') }}" alt="YouTube"/></a>
    </div>
</div>
{% endblock %}