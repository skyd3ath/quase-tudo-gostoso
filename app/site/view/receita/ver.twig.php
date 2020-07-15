{% extends 'partials/body.twig.php' %}
{% block title %} - {{receita.titulo}}{% endblock %}

{% block body %}


<div class="max-width mt-3">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0" nonce="1Ib9m381"></script>
    <h1>{{receita.titulo}}</h1>
    <p>Publicado em: {{receita.dataPublicacao | date(DATE_TIME) }}</p>
    <hr>
    <div>
        {{receita.conteudo | raw}}
    </div>


    <hr>
    <div>Tags:
        {% for t in tags %}

        <span class="badge badge-danger"> {{t}}</span>

        {% endfor %}
    </div>

    <hr>

    <div class="fb-comments" data-href="{{HOST}}?url=ver&amp&id={{id}}" data-numposts="5" data-width="100%"></div>
</div>

{% endblock %}