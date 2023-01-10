<?php

require_once '../config/config.php';
require_once '../utylitys/utylitys.php';

//klasy
require_once '../libs/Database.php';
require_once '../libs/Template.php';
require_once '../libs/Posts.php';
require_once '../libs/Images.php';



if(ADMIN){

    require_once '../templates/include/header.php';

    $error = array();

    if(isset($_POST['title']) and isset($_POST['content'])){

        if( $_POST['title'] == "" ){
            $error['title'] = "Nie podałeś tytułu!";
        }
        if( $_POST['content'] == "" ){
            $error['content'] = "Nie podałeś treści postu!";
        }
        if($_FILES['file']['error']){
            $error['file'] = "Nie wybrałeś pliku!";
        }

        if( empty($error) ){
            $image = new Images();
            $img_url = $image->uploadImage();

            $posts = new Posts();
            $posts->addPost($_POST['title'], $_POST['content'], 2, $img_url);
            header('Location: /apk/blog');
        }
    }

}else{
    header('Location: /apk');
}

?>

<form id="form" method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Tytuł posta...">
    <?php echo isset($error['title']) ? $error['title'] : '' ?>
    <textarea tyle="text" name="content" placeholder="Treść posta..."></textarea>
    <?php echo isset($error['content']) ? $error['content'] : '' ?>
    <input type="file" name="file">
    <?php echo isset($error['file']) ? $error['file'] : '' ?>
    <button>Zapisz</button>
</form>

