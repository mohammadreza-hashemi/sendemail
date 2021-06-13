<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<h1>Hello, world!</h1>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


<div class="container">
    <form action="" method="POST">
        @csrf

        <label for="name" class="form-label">Your name</label>
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" aria-label="Text input with checkbox">
        </div>

        <label for="email" class="form-label">Email</label>
        <div class="input-group mb-3">
            <input type="text" name="email" class="form-control" aria-label="Text input with radio button">
        </div>

        <label for="query" class="form-label">Enter Query</label>
        <div class="input-group mb-3">
            <textarea name="text" class="form-control" cols="5" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-success">send</button>
    </form>
</div>
</body>
</html>
