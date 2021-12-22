<?php

$id = $_GET['id'];
if (!isset($id))
{
    header("Location: index.php");
}

require_once("config.php");

$sql = "SELECT * from cars where id = $id";
$result = $db->query($sql)->fetch_assoc();

if (isset($_POST['car'])) 
{
    $car = $_POST['car'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $sql = "UPDATE cars SET car='$car', model='$model', color='$color' WHERE id=$id";
    if ($db->query($sql) === TRUE)
    {
        header("Location: index.php");
    }
    else
    {
        echo $db->error;
    }
}

?>

<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <body>
    <div class="d-flex justify-content-center">
            <div class="card pt-4 mt-4" style="width:700px;">
                <div class="card-body">
                    <h3 class="card-title">Update Car</h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="pb-4">
                        <input class="form-control mt-3" name="car" value="<?php echo $result['car'] ?>" placeholder="Car...">
                        <input class="form-control mt-3" name="model" value="<?php echo $result['model'] ?>" placeholder="Model...">
                        <input class="form-control mt-3" name="color" value="<?php echo $result['color'] ?>" placeholder="Color...">
                        <button type="submit" class="btn btn-primary mt-5" style="width: 140px;">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>