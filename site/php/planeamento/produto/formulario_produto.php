<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <style type="text/css">
    .tijolo {
        background-color: tomato;
        color: white;
    }
    </style>
    <title>Registar_produto</title>
</head>

<body>

    <h2>Registo de produtos</h2>
    <div class="container">
        <form id="formProdutos" method="POST" action="cadastra_produto.php">
            <!-- Nome -->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="nomeProduto" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nomeProduto" name="nomeProduto"
                        placeholder="Insira nome do produto">
                </div>
            </div>

            <!-- Tipo de animal -->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="tipoAnimal" class="form-label">Tipo de Animal</label>
                    <select class="form-control" id="tipoAnimal" name="tipoAnimal" required>
                        <option value="Vaca">Vaca</option>
                        <option value="Frango">Frango</option>
                        <option value="Frango do Campo">Frango do Campo</option>
                        <option value="Pato">Pato</option>
                        <option value="Borrego">Borrego</option>
                        <option value="Cabrito">Cabrito</option>
                        <option value="Porco">Porco</option>
                    </select>
                </div>
            </div>

            <!-- Tipo de produto -->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="tipoProduto" class="form-label">Tipo de Produto</label>
                    <select class="form-control" id="tipoProduto" name="tipoProduto" required>
                        <option value="Granel">Granel</option>
                        <option value="Vácuo">Vácuo</option>
                    </select>
                </div>
            </div>

            <!-- Span caso campos não estejam preenchidos -->
            <span id="msgErro"></span>

            <div class="row">
                <div class="text-center">
                    <button type="submit" class="btn btn-success" style="margin: 10px;">Registar</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Validação do JavaScript -->
    <script src="../../../js/planeamento/valida_produto.js"></script>
</body>

</html>