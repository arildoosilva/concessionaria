{% extends '/concessionaria/template.php' %}
{% block content %}
<ol class="breadcrumb">
    <li>Início</li>
    <li class="active">Cadastro</li>
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
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" 
                    placeholder="Nome">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" 
                    placeholder="E-mail">
                </div>
            </div>
            <div class="form-group">
                <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="endereco" 
                    placeholder="Endereço">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tel" 
                    placeholder="Telefone">
                </div>
            </div>
            <div class="form-group">
                <label for="sexo" class="col-sm-2 control-label">Sexo</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="ofertas" class="col-sm-2 control-label">Deseja receber nossas ofertas por e-mail?</label>
                <div class="col-sm-10">
                    <div class="radio">
                    <label><input type="radio" name="optionsRadios" value="">Sim</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optionsRadios" value="">Não</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
{% endblock %}