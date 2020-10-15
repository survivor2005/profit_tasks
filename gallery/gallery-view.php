<?php
require (__DIR__ . '/gallery-func.php');
$folder = __DIR__ . '/images';

$imgData = getImgFiles($folder);
?>

<div>
    <?php
        foreach($imgData as $img){
            ?> <img style="width:250px;" src="<?php echo '/lesson5/gallery/images/' . $img ?>"> <?php
        }
    ?>
</div>
<form style="margin-top:40px;" action="/lesson5/gallery/gallery-upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <button>Загрузить</button>
</form>
