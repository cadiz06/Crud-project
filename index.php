<?php
    include('connect.php');

    $select = "SELECT * FROM users";
    $sqlSelect = mysqli_query($connect, $select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Project</title>
    <style>
        body{
            display: block;
            margin: 8px;
            background-color: beige;
        }
        a{
            font-size: 50px;
            background-color: green;
            color: #eee;
            text-decoration: none;
        }
        table, th, td{
            border: 1px solid black;
            font-family: cursive;
            font-size: 4rem;
            margin-left:auto ;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;
            padding: 1rem;
        }
        button{
            font-size: 30px;
            cursor: pointer;
        }
        .btn{
            border: none;
            font-size: 30px;
            cursor: pointer;
            padding: 2rem;

        }
        .edit{
            background-color: blue;
        }
        .delete{
            background-color: purple;
            
        }
    </style>
</head>
<body>
    <a type="button" id="add" href="add.php">Add+</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>

        <?php foreach($sqlSelect as $result => $value) {  ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['age'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input class="btn edit" type="submit" value="Edit" name="edit">
                        <input type="hidden" name="edId" value="<?= $value['id'] ?>">
                        <input type="hidden" name="edName" value="<?= $value['name'] ?>">
                        <input type="hidden" name="edAge" value="<?= $value['age'] ?>">
                        <input type="hidden" name="edAddress" value="<?= $value['address'] ?>">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delID" value="<?= $value['id'] ?>">
                        <input class="btn delete" type="submit" value="Delete" name="delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>