<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $.getJSON('_json/produtos.json',function(data){
                var elemento;
                elemento = "<ul>";
                $.each(data, function (i, valor) {
                    elemento += "<li>"+ "ID: " + valor.produtoID + "</li>";
                    elemento += "<li>"+ "Nome do Produto: " +  valor.nomeproduto + "</li>";
                    elemento += "<li>"+ "Preço: " + valor.precounitario + "</li>";
                    elemento += "<li>"+ "Tempo de Entrega: " + valor.tempoentrega + "</li>" + "<br>";
                });
                elemento += "</ul>";

                $('div#listagem').html(elemento);
            });
        </script>
    </body>
</html>