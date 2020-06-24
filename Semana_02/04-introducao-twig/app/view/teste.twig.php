{% extends "main.twig.php" %}<!--Torna o conteudo desse arq extensivel-->

{% block body %}
<div>

<h1>{{data | date(DATE_FORMAT)}}</h1><!--Chamou a var global-->

{% if mensagem | length <= 35 %}

<h1>{{ mensagem | slice(0,23)}}</h1><!--Exiba de 0 ate o 23 caracter-->

{% endif %}

<ul>

    {% set indice = 1 %}<!--Cria a var-->

    {% for cid in cidades %}
    
    <li>{{indice}} - {{cid}}</li>

    {% set indice = indice + 1 %}<!--Incremento-->

    {% endfor %}
</ul>

<hr>

{{VAR_NAME}}

{% if idade >= 18 %}

<p>Pode entrar {{nome}}!</p>

{% else %}

<p>Não pode entrar sozinho.</p>

{% endif %}
</div>
{% endblock %}