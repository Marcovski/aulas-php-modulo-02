{% apply spaceless %}<!--Comprime o cod-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Twig</title>
</head>
<body>
    <header>
        <h1>Olá {{VAR_NAME}}</h1>
    </header>
    <section>
        {% block body %}{% endblock %}
    </section>
 
        {% include 'footer.twig.php' %}<!--Chama o arq footer.twig.php-->
    
</body>
</html>
{% endapply %}<!--Comprime o cod-->