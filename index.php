<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <div class="container p-4">
    <h1 class="p-4 mb-4 text-center">Genera la tua password</h1>

    <form action="./index.php" method="GET">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Inserisci la lunghezza della password da generare</label>
            <input type="text" name="choosepsw" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>

    </div>
    
</body>
</html>