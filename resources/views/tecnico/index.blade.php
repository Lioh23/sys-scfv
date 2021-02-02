<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">Cadastros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <h4 class="card-title mb-5">Técnicos Cadastrados</h4>
            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>Função</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <td>Teste cunha dias</td>
                    <td>Piscólogo</td>
                </tbody>
            </table>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>