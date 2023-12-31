<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <style type="text/css">
    .tijolo {
        background-color: tomato;
        color: white;
    }
    </style>
    <title>Tela de Registo</title>
</head>

<body>
    <h2>Registo</h2>
    <div id="form_utilizadores" class="container">
        <form id="formUtilizadores" method="POST" action="cadastrar_utilizador.php">
            <!--nome-->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o seu nome">
                </div>

                <!-- idade -->
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label for="idade" class="form-label">Idade</label>
                        <input type="text" class="form-control" id="idade" name="idade"
                            placeholder="Insira a sua idade">
                    </div>

                    <!-- morada -->
                    <div class="row">
                        <div class="col">
                            <label for="morada" class="form-label">Morada</label>
                            <input type="text" class="form-control" id="morada" name="morada"
                                placeholder="Insira a sua morada">
                        </div>
                    </div>

                    <!-- contacto -->
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="contacto" class="form-label">Contacto</label>
                            <input type="text" class="form-control" id="contacto" name="contacto"
                                placeholder="Insira o seu contacto">
                        </div>

                        <!-- email -->
                        <div class="row">
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Insira o seu email">
                            </div>
                        </div>

                        <!-- funcao -->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label for="funcao" class="form-label">Função</label>
                                <select class="form-control" id="funcao" name="idFuncao" required>
                                    <option value="1">Supervisor qualidade</option>
                                    <option value="2">Técnico qualidade</option>
                                    <option value="3">Supervisor picking</option>
                                    <option value="4">Pessoal picking</option>
                                    <option value="5">Supervisor planeamento</option>
                                </select>
                            </div>

                            <!-- login -->
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="nome" class="form-label">Nome de Utilizador</label>
                                    <input type="text" class="form-control" id="loginUtilizadores" name="nomeUtilizador"
                                        placeholder="Insira o seu nome de utilizador">
                                </div>

                                <!-- Pass -->
                                <div class="col-md-6 col-sm-12">
                                    <label for="pass" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="passCadastro" name="pass"
                                        placeholder="Crie a sua password">
                                </div>
                            </div>

                            <!--Span caso campos não estejam preenchidos-->
                            <span id="msgErro"></span>

                            <div class="row">
                                <div class="" style="display: flex; justify-content: center;">
                                    <button type="submit" class="btn btn-success"
                                        style="margin: 10px;">Registar</button>
                                </div>
                            </div>
        </form>
    </div>
    <!--Validação do js-->
    <script src="../../../js/planeamento/valida_utilizador.js"></script>
</body>

</html>