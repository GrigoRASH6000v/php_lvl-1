<? 
    include "../config/config.php";
    $id =  isset($_POST['id']) ? strip_tags($_POST['id']):"";
    $price = isset($_POST['price']) ? strip_tags($_POST['price']):"";
    $name = isset ($_POST['name']) ? strip_tags($_POST['name']):"";
    $info = isset ($_POST['info']) ? strip_tags($_POST['info']):"";
    $photo = isset ($_FILES) ? $_FILES: "https://via.placeholder.com/150";
    $sql = "update shop set  name='".$name."', price=".$price.", info='".$info."' where id=".$id;
    mysqli_query($connect, $sql);
    header("Location: ../admin/editGood.php?id=".$id);
?>