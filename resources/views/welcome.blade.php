<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>

<body class="antialiased">

    <div class="container">
    <form action="/subject" method="post">
        @csrf
        <div class="form-group">
            <label for="subject">Enter name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="subject" placeholder="Subject">
        </div>
        <div class="form-group">
            <label for="subject">Enter Location</label>
            <input type="text" class="form-control" id="location" name="location" aria-describedby="subject" placeholder="Location">
        </div>
        <div class="form-group">
            <label for="subject">Enter Fees</label>
            <input type="text" class="form-control" id="fees" name="fees" aria-describedby="subject" placeholder="Fees">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>