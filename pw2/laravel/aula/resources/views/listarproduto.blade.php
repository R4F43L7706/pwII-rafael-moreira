<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style/tabelas.css') }}">
    </head>

<body>

<div class="navegation">
    <nav>
        <ul>
        <a href="/"><li>Home</li></a>
        <a href="/listarprodutos"><li>Produtos</li></a>
        <a href="/listarcategoria"><li>Categoria</li></a>
        <a href="/listarcontato"><li>Contato</li></a>
        <a href="/listarfornecedor"><li>Fornecedor</li></a>
        </ul>
    </nav>
</div>

<!-- Inicio Filtro -->

<div class="search">
<form action="{{ route('produtos.index') }}" method="GET">
    <input class="box-search" type="text" name="search" placeholder="Pesquisar Produto">
    <input class="btn-search"type="submit" value="Pesquisar">
</form>
</div>
<!-- Fim Filtro -->

<div class="btn-adc">
    <button id="abrir">Adicionar item</button>

    <dialog>
        <h2>Formulario</h2>




        <button id="fechar">Fechar</button>
    </dialog>
</div>


<div class="titulo">
    <h1>Lista de Produtos</h1>
</div>

<div class="table-container">
    <table>
        <tr>
            <th>ID</th>
            <th>PRODUTO</th>
            <th>QUANTIDADE</th>
            <th>VALOR</th>
            <th>CATEGORIA</th>

        </tr>

        @foreach ($produto as $tbproduto)
        <tr>
            <td> {{ $tbproduto -> id_produto }} </td>
            <td> {{ $tbproduto -> name_produto }} </td>
            <td> {{ $tbproduto -> quantidade }} </td>
            <td> R$ {{ $tbproduto ->  valor }} </td>

        </tr>

        @endforeach

    </table>

</div>

<script src="{{ asset('script/index.js') }}"></script>
</body>
</html>