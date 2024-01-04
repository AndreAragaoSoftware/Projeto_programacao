<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>

    <?php include "cabecalho_equipa.php"?>
    <span id="msgAlerta"></span>

    <!--Criando tabela para exibir utilizadores-->
    <div class=" table-resposive">
        <table class=" table table-striped table-hover table-bordered">
            <tr>
                <Th>Nome</Th>
                <Th>Idade</Th>
                <Th>Morada</Th>
                <Th>Contacto</Th>
                <Th>Email</Th>
                <Th>Função</Th>
            </tr>
            <?php
        
        //Conexão com banco de dados
            include '../../ligaBD.php';
        
            // Buscando os campos das tabelas utilizadores, funcao(Só seleciona as ligadas a qualidade)
            $query = "SELECT utilizadores.*, funcao.nomeFuncao, login.nomeUtilizador, login.pass FROM  utilizadores
                        JOIN 
                            funcao ON utilizadores.idFuncao = funcao.idFuncao
                        JOIN 
                            login ON utilizadores.idLogin = login.idLogin
                        WHERE 
                            utilizadores.idFuncao IN (1, 2);";
            $sql_query = mostraDados($query) or die("Falha na execução do código SQL");
        
            // Colocando os dados na tabela
            while ($rows = mysqli_fetch_assoc($sql_query)) {
                echo "<tr><td>" . $rows['nome'] . "</td>";
                echo "<td>" . $rows['idade'] . "</td>";
                echo "<td>" . $rows['morada'] . "</td>";
                echo "<td>" . $rows['contacto'] . "</td>";
                echo "<td>" . $rows['email'] . "</td>";
                echo "<td>" . $rows['nomeFuncao'] . "</td></tr>";
            }
        
        ?>
            <!--Fim da tabela-->
        </table>
    </div>

</body>

</html>