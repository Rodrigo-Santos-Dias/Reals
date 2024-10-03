<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Cadastro de Usuários</h1>
        <div class="mt-8">
            <form method="POST" action="">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="name" required>
                </div>

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>

                <div class="form-group">
                    <label for="data-nascimento">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="data-nascimento" name="birthdate" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="address" required>
                </div>

                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select class="form-control" id="estado" name="state" required>
                        <!-- Opções de estados -->
                    
                            <option value=""></option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <select class="form-control" id="cidade" name="city" required>
                        <!-- Opções de cidades serão carregadas aqui -->
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>    
    </div>
</body>
</html>