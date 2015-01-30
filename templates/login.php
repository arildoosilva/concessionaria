{% extends '/template.php' %}
{% block content %}
<ol class="breadcrumb">
    <li>Início</li>
    <li class="active">Login</li>
</ol>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="usuario" class="col-sm-2 control-label">Nome de usuário</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="usuario" 
                    placeholder="Nome de usuário">
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="senha" 
                    placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Permanecer conectado
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
{% endblock %}