<?php 

require_once "config.php";

$sql = "SELECT * FROM cars";
$cars = $db->query($sql);
$i = 0;

?>

<html>
    <link rel="stylesheet" href="./styles.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <body class="container">   
    <div class="col-md-12">
        <div class="mt-5 mb-3 clearfix">
        <h2 class="pull-left">Car Details</h2>
        <a href="create.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Car</a>
        <table class="table mt-4">
            <thead>
                <th>#</th>
                <th>Car</th>
                <th>Model</th>
                <th>Color</th>
                <th>Actions</th>
            </thead>
            <tbody>
            <?php
            if ($cars != false):
                while ($row = $cars->fetch_assoc()):
                $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['car'] ?></td>
                <td><?php echo $row['model'] ?></td>
                <td><?php echo $row['color'] ?></td>
                <td><a href="remove.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" >Remove</button><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update</button></td>
            </tr>
            <?php endwhile; ?>
            <?php endif; ?>
            </tbody>
        </table>
        </div>
    </div>
    </body>
</html>