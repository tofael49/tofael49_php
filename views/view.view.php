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
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>email</th>
                <th>Phone</th>
                <th>Adress</th>
                <th>Class</th>
                <th>Password</th>
                <th>Roll</th>
                <th>Action</th>
            </tr>
            <tr>
            <?php foreach($students as $student): ?>
              <tr>
                <td><?= $student->id ?></td>
                <td><?= $student->name ?></td>
                <td><?= $student->email ?></td>
                <td><?= $student->phone ?></td>
                <td><?= $student->adress ?></td>
                <td><?= $student->class ?></td>
                <td><?= $student->password ?></td>
                <td><?= $student->roll ?></td>
                <td>
                    <button class="btn btn-success">edit</button>
                    <button class="btn btn-denger">delete</button>
                </td>
              
              </tr>
            <?php endforeach; ?>
            </tr>
        </table>
    </div>
</body>
</html>