<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dak bg-dark">
    <a href="#" class="navbar-brand">Calculator</a>
</nav>
    <div class="container py-4 bg-secondary mt-5">
        <form action="calc.php" class="form-group" methor="POST">
            <input type="text" class="form-control mt-3" placeholder="Enter first number....">
            <input type="text" class="form-control mt-3" placeholder="Enter Second number....">
            <select id="none" class="form-control mt-3">
                <option value="select" class="form-control">Select from drop down</option>
                <option name="add" value="add" class="form-control">Add two value</option>
                <option name="sub" value="sub" class="form-control">Substract from first number</option>
                <option name="mul" value="mul" class="form-control">Multiply two number</option>
            </select>
            <button class="btn btn-outline-info mt-3" type="submit"> Calculate </button>
        </form>
    </div>
    
</body>
</html>