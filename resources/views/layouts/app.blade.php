<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAGEM DE PERSONAGENS DC</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }
    h1 {
        text-align: center;
        border: 1px solid #111;
        height: 50px;
        padding-top: 15px;
    }
    ul > li {
            list-style: none;
    }
    .lista__image {
        margin-right: 1rem;
    }
    .lista__name {
            font-weight: bold;
            font-size: 20px;
    }
    footer {
        text-align: center;
        border: 1px solid #111;
        height: 50px;
        padding-top: 15px;
        font-size: 20px;
    }
</style>
<body>
    <header>
        <h1>LISTAGEM DE PERSONAGENS DC</h1>
    </header>

    <mian>
    @yield('conteudo')
    </main>

    <footer>Laísa Rafaella Dias Coelho - 27 - 3A2</footer>
    
</body>
</html>