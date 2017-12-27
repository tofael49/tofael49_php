<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


</head>
<body class="bg-info">
    <div class="container">
    <nav>
        <ul>
            <li><a href="/">home</a></li>
            <li><a href="/view.php">view</a></li>
        </ul>
    </nav>
        <div class="card">
            <div class="card-header">
                <h1>Register</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-control">
                        <label for="name">NAME:</label>
                        <input type="text" name="name" class="from-control">
                    </div>
                    <div class="form-control">
                        <label for="email">EMAIL:</label>
                        <input type="email" name="email">
                    </div>
                    <div class="form-control">
                        <label for="phone">PHONE:</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <div class="form-control">
                        <label for="adress">ADDRESS:</label>
                        <input type="text" name="adress" id="adress">
                    </div>
                    <div class="form-control">
                        <label for="class">CLASS:</label>
                        <select name="class" id="class">
                            <option value="">class</option>
                            <option value="1">one</option>
                            <option value="2">two</option>
                            <option value="3">three</option>
                            <option value="4">four</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="password">PASSWORD:</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form-control">
                        <label for="roll">ROLL:</label>
                        <input type="text" name="roll" id="roll">
                    </div>
                    <div class="form-control">
                        <input type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>