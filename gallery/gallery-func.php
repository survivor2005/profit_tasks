<?php
function getImgFiles($folder){
    $files = scandir($folder); //содержимое папки присваиваем в переменную $files в качестве массива
    $imgData = [];
    foreach($files as $file){ 
        if (is_file($folder .'/' . $file) ){ //если содержимое массива является файлом
            if(pathinfo($file)['extension'] == 'jpg' || pathinfo($file)['extension'] == 'png'){ //если у этих файлов расширение "jpg ||png"
                $imgData[]=$file; //в новый массив запиши название файлов с расширением "jpg || png"
            }
        }
    }
   return $imgData; 
}