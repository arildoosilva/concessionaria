{% extends '/template.php' %}
{% block content %}
<ol class="breadcrumb">
  <li>Início</li>
  <li>Serviços</li>
  <li class="active">Revisão</li>
</ol>
<!--################ PRISMA ##################-->
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <h2>Agende sua revisão</h2>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-12">
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="ano" class="col-sm-2 control-label">Ano do carro</label>
        <div class="col-sm-10">
          <select id="ano" class="form-control">
            {% for x in range(1990, 2016) %}
              <option>{{x}}</option>
            {% endfor %}
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="marca" class="col-sm-2 control-label">Marca</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="marca" 
          placeholder="Marca">
        </div>
      </div>
      <div class="form-group">
        <label for="modelo" class="col-sm-2 control-label">Modelo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="modelo" 
          placeholder="Modelo">
        </div>
      </div>
      <div class="form-group">
        <label for="data" class="col-sm-2 control-label">Datas disponíveis para revisão</label>
        <div class="col-sm-5">
          <select id="data" class="form-control">
            <option>Dias</option>
          </select>
        </div>
        <div class="col-sm-5">
          <select id="data" class="form-control">
            <option>Horários</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Agendar</button>
        </div>
      </div>
    </form>
  </div>
</div>
{% endblock %}