<?php
if(isset($_POST['getir'])){
    $link = $_POST['link'];

    header('Content-type:image/png');
    $link = str_replace('', 'https://www.shutterstock.com/tr/', $link);
    $a = file_get_contents('https://j2shutterstock.com/tr/'.$link);

    echo $a;
}
?>
<form action="" method="POST">
<input type="text" name="link" />
<button type="submit" name="getir">Getir</button>
</form>