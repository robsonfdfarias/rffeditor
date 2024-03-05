<?php

//$pasta = filter_input(INPUT_GET, $_GET['pasta'], FILTER_SANITIZE_SPECIAL_CHARS);
$pasta2 = $_GET['pasta'];
$pasta = '../../'.$pasta2;

$pp1 = explode('/', $pasta2);
//print_r($pp);
$pp = array_filter($pp1, function($value){
    return ($value !==null && $value !== false && $value !== '' && $value !== ' ');
}); 
//print_r($pp);
$acumula = '';
for($i=0; $i<count($pp); $i++){
    if($i==0){
        $acumula.=$pp[$i];
    }else{
        $acumula.='/'.$pp[$i];
    }
    //echo '<span style="padding: 0 10px;"><a onclick="clickFile(\'pasta\', \''.$acumula.'\')">'.$pp[$i].'</a></span>';
    echo ' <a onclick="clickFile(\'pasta\', \''.$acumula.'\')">'.$pp[$i].'</a> ';
    if(count($pp)>1 && $i<(count($pp)-1)){
        echo ' <img src="./imgs/seta-para-a-direita.svg" height="20"> ';
    }
}

//echo '<h1>'.$pasta.'</h1><br>';

$dir = dir($pasta);

echo '<div style="max-width:100%;align-items: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; padding: 0px; padding: 20px;">';

while($arquivo=$dir->read()){
    //echo $arquivo."<br>";
    $cc = $pasta."/".$arquivo;
    if(is_dir($cc)){
        if($arquivo!="." && $arquivo!=".." && $arquivo!='' && $arquivo!=null && $arquivo!='undefined'){
            echo '<div id="containerObj" class="pasta" style="width:200px; padding:0px; word-break: break-all; margin: 0 15px; margin-bottom: 20px; box-shadow: 0px 0px 4px rgba(0,0,0,0.5); position:relative;">';
            echo '<div id="tituloTarja" style="position:absolute; padding:5px; background-color:#000; color:#fff;">Pasta</div>';
            echo '<div style="padding:5px; background-color:#a1f1ff;" class="imgFundo"><a onclick="clickFile(\'pasta\', \''.$pasta2.'/'.$arquivo.'\')"><img src="./imgs/pasta.png" width="80%"></a></div>';
            echo '<div style="width:calc(100% - 20px); background-color: #fff; padding:5px;">'.substr($arquivo, 0, 23).'</div>';
            echo '</div>';
        }else{
            //echo $arquivo.'<br>';
        }
    }else{
        if(!strpos($arquivo, '.txt') && !strpos($arquivo, '.php')){
            echo '<div id="containerObj" class="pasta" style="width:200px; padding:0px; word-break: break-all; margin: 0 15px; margin-bottom: 20px; box-shadow: 0px 0px 4px rgba(0,0,0,0.5); position:relative;">';
            echo '<div id="tituloTarja" style="position:absolute; padding:5px; background-color:#000; color:#fff;">'.getTypeFile($arquivo).'</div>';
            echo '<a onclick="clickFile(\'imagem\', \''.$pasta.'/'.$arquivo.'\'), fecharFoldersJan()"><div style="padding:5px; --rffeditor-bk-image: url(\''.$pasta.'/'.$arquivo.'\'); width:calc(100% - 10px); height: 150px;" class="imgFundo"></div></a>';
            echo '<div style="width:calc(100% - 20px); background-color: #fff; padding:5px; word-break: break-all;">'.substr($arquivo, 0, 23).'</div>';
            echo '</div>';
        }
    }
}

function getTypeFile($file){
    if(strpos($file, '.jpg') || strpos($file, '.jpeg')){
        return 'JPG';
    }else if(strpos($file, '.png')){
        return 'PNG';
    }else if(strpos($file, '.svg')){
        return 'SVG';
    }else if(strpos($file, '.gif')){
        return 'GIF';
    }else if(strpos($file, '.tiff')){
        return 'TIFF';
    }else if(strpos($file, '.tif')){
        return 'TIF';
    }else if(strpos($file, '.avif') || strpos($file, '.AVIF')){
        return 'AVIF';
    }else if(strpos($file, '.webp') || strpos($file, '.WEBP')){
        return 'WEBP';
    }else if(strpos($file, '.avi')){
        return 'AVI';
    }else if(strpos($file, '.mp4')){
        return 'MP4';
    }else{
        return 'ARQUIVO';
    }
}

echo '</div>';

?>