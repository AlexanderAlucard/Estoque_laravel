<html>
<head>
<script src="https://kit.fontawesome.com/e36ab9cf49.js"></script>
    <link href="/css/app.css" rel = "stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title> Controle de estoque</title>
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
        
        <div class="navbar-header">
            <a class="navbar-brand"href="/produtos">
                Estoque Laravel
            </a>
        </div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{action('ProdutoController@lista')}}">
                        Listagem
                    </a>
                </li>
                <li>
                    <a	href="{{action('ProdutoController@novo')}}">
                        Novo
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
        @yield('conteudo')

    <footer class="footer">
        <p>©	Sistema de estoque para treinamento em laravel.</p>
    </footer>

    </div>
</body>
</html>