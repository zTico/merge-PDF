<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="topo">
        <h2>Junte seus PDFS</h2>
        <p>de forma rápida e fácil</p>
    </div>
    <div class="meio">
    <form method="post" action="merge.php" enctype="multipart/form-data">

    <div class="mb-3">
        <label  class="form-label edicao">Anexe o primeiro documento</label>
        <input class="form-control" type="file" name="arquivo" multiple>
    </div>

    <div class="mb-3">
        <label  class="form-label edicao">Anexe o segundo documento</label>
        <input class="form-control" type="file" name="arquivo2" multiple>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>