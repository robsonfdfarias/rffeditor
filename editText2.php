<!DOCTYPE html>
<html lang="en">

<head>

<title>Editor de Texto JavaScript ::: Linha de Código (Robson Farias)</title>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" 
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script> -->
    <link rel="stylesheet" type="text/css" href="rffeditor/editorRobsonFarias.css" />
    <link rel="stylesheet" type="text/css" href="rffeditor/janMovEdiExc.css" />
<style>
    .tabela tr td{
        padding: 10px;
    }
    .table{
        margin:0px;
    }
 

    #typefontface option:nth-child(2){
        font-family: 'monospace';
    }

    #typefontface option:nth-child(3){
        font-family: 'Arial';
    }

    #typefontface option:nth-child(4){
        font-family: 'Courier';
    }

    #typefontface option:nth-child(5){
        font-family: 'Verdana';
    }

    #typefontface option:nth-child(6){
        font-family: 'Tahoma';
    }

    #typefontface option:nth-child(7){
        font-family: 'Inter';
    }

    #typefontface option:nth-child(8){
        font-family: 'Bebas Neue';
    }

    #texto{
        /* min-height: 300px; */
        height: 300px;
        width: calc(100%-20px);
        box-shadow: 0 0 2px rgba(0,0,0,0.5);
        border:0px solid #000;
        padding: 15px;
        border-radius: 10px;
        resize: vertical;
        overflow: auto;
        box-sizing: border-box;
    }
    

    #cores{
        background-color: green;
        cursor: pointer;
        /*opacity: 0.0;*/
        position:relative !important;
        opacity: 1;
        width: 35px !important;
        height: 35px !important;
        margin-top: 25px;
    }
    #divCorText{
        display:none;
        flex-direction: column;
        position: absolute;
        width: 300px;
        min-height: 200px;
        top: 50px;
        background-color: white;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    #topCorText{
        display:flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
    }
    #fecharDivCorText{
        padding: 5px 10px;
        background-color: #0c852c;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
    }
    #fecharDivCorText:hover{
        background-color: rgb(32, 254, 47);
        color: #000;
    }


    #coresDestaque{
        background-color: green;
        cursor: pointer;
        /*opacity: 0.0;*/
        position:relative !important;
        opacity: 1;
        width: 35px !important;
        height: 35px !important;
        margin-top: 25px;
    }
    #divCorDestText{
        display:none;
        flex-direction: column;
        position: absolute;
        width: 300px;
        min-height: 200px;
        top: 50px;
        background-color: white;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    #topCorDestText{
        display:flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
    }
    #fecharDivCorDestText{
        padding: 5px 10px;
        background-color: #0c852c;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
    }
    #fecharDivCorDestText:hover{
        background-color: rgb(32, 254, 47);
        color: #000;
    }


    #geralInseriImagem{
        width:100%;
        height: 100%;
        /*display:flex;*/
        display:none;
        text-align: center;
        position: absolute;
        top:0;
        left:0;
        background: rgba(0,0,0,0.0);
    }

    #inseriImagemCentro{
        width: 600px;
        height: 400px;
        background-color: #fff;
        border: 1px solid #000;
        margin: auto;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
        border-radius: 10px;
        padding: 40px;
        z-index: 10;
    }

    #inseriImagemCentro input, button{
        padding: 10px;
        font-size: 1.1rem;
    }


    #inseriEditCentro{
        width: 600px;
        height: 400px;
        background-color: #fff;
        border: 1px solid #000;
        margin: auto;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
        border-radius: 10px;
        padding: 40px;
        z-index: 10;
    }

    #editImagemCentro input, button{
        padding: 10px;
        font-size: 1.1rem;
    }


    input[type="file"]{
        padding: 20px;
        border: 1px solid #cfcfcf;
        font-size: 1.1rem;
    }
    #preview{
        display:none;
    }
    #porcento{
        width:100%;
        height: 260px;
        display: none;
    }
    input[type="text"]{
        width:150px;
    }

    #ferramentas img{
        height: 40px; /* 2rem; */
        transition: ease-in-out 0.2s;
        border: 0px solid #cfcfcf;
        cursor: pointer;
        margin:4px 2px;
    }
    
    #ferramentas img:hover{ 
        /* height: 2.2rem; */
        /* filter: invert(25%) sepia(11%) saturate(4040%) hue-rotate(99deg) brightness(93%) contrast(91%); */
        /* border: 1px solid #cfcfcf; */
        transition: ease-in-out 0.2s;
    }
    .p::first-letter {
        font-size: 2.5rem;
        font-weight: bold;
        color: #0c582c;
        float: left;
        margin: -5px 5px;
    }

    #efeitosTexto {
        width: 100%;
        position: absolute;
        margin: auto;
        background-color: white;
        padding: 20px;
        height: 70%;
        /* overflow-y: auto; */
        display: none;
        flex-direction: column;
        border: 1px solid #dfdfdf;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        border-radius: 8px;
    }
    #topEfeitoTexto{
        display: flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
        border-bottom: 1px solid #dfdfdf;
    }
    #listaEfeitoTexto{
        overflow-y: auto;
        display: flex;
        flex-direction: column;
    }
    #listaEfeitoTexto button{
        background-color: white;
        border: none;
    }
    #tituloEfeitoTexto{
        font-size: 40px;
        font-weight: 900;
    }
    #fecharEfeitosTexto{
        padding: 10px 15px;
        font-size: 20px;
        font-weight: 900;
        background-color: #0c852c;
        margin-bottom: 10px;
        border-radius: 4px;
        color: white;
        cursor: pointer;
    }
    #fecharEfeitosTexto:hover{
        background-color: rgb(21, 206, 77);
    }
    
    #ferramentas {
        /* align-items: center; */
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        /* justify-content: center; */
        margin-bottom: 10px;
    }
    #ferramentas select{
        padding: 5px;
        border: 1px solid #dfdfdf;
        border-radius: 4px;
        font-size: 20px;
    }
    

    #emotions {
        width: 100%;
        position: absolute;
        margin: auto;
        background-color: white;
        padding: 20px;
        height: 70%;
        /* overflow-y: auto; */
        display: none;
        flex-direction: column;
        border: 1px solid #dfdfdf;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        border-radius: 8px;
    }
    #topEmotions{
        display: flex;
        flex-direction: row;
        width: 100%;
        justify-content: space-between;
        border-bottom: 1px solid #dfdfdf;
    }
    #listaEmotions{
        overflow-y: auto;
        display: flex;
        flex-direction: column;
    }
    #listaEmotions button{
        background-color: white;
        border: none;
    }
    #tituloEmotions{
        font-size: 40px;
        font-weight: 900;
    }
    #fecharEmotions{
        padding: 10px 15px;
        font-size: 20px;
        font-weight: 900;
        background-color: #0c852c;
        margin-bottom: 10px;
        border-radius: 4px;
        color: white;
        cursor: pointer;
    }
    #fecharEmotions:hover{
        background-color: rgb(21, 206, 77);
    }

    .emotionsList{
        padding:20px;
        word-break: break-all;
        margin: 0 5px;
    }
    
    .emotionsList img{
            width:100px;
        }

    @media screen and (max-width: 500px){
        .emotionsList{
            width:auto;
            padding:5px;
            word-break: break-all;
            margin: 0 3px;
        }
        #emotions{
            margin: 0;
        }
        #tituloEmotions{
            font-size: 30px;
        }
        .emotionsList img{
            width:40px;
        }
    }





    .payment-methods {
        list-style: none;
        margin: 10px 0;
        padding: 0;
        padding-bottom: 30px;
    }

    .payment-methods:after {
        content: "";
        clear: both;
    }

    .payment-method {
        border: 1px solid #ccc;
        box-sizing: border-box;
        float: left;
        height: 50px;
        position: relative;
        width: 50px;
    }

    .payment-method label {
        background: #fff no-repeat center center;
        bottom: 1px;
        cursor: pointer;
        display: block;
        font-size: 0;
        left: 1px;
        position: absolute;
        right: 1px;
        text-indent: 100%;
        top: 1px;
        white-space: nowrap;
    }

    .payment-method + .payment-method {
        margin-left: 8px;
        display: inline-flex;
    }

    .breakTextLeft label {
        color: #000;
        /* background-image: url(https://dl.dropbox.com/s/yvzrr9o54s2llkr/uol.png); */
        background-image: url(rffeditor/imgEditor/alignMedia-breakText-left.svg);
    }

    .breakTextCenter label {
        color: #000;
        /* background-image: url(https://dl.dropbox.com/s/yvzrr9o54s2llkr/uol.png); */
        background-image: url(rffeditor/imgEditor/alignMedia-breakText-center.svg);
    }

    .breakTextRight label {
        color: #000;
        /* background-image: url(https://dl.dropbox.com/s/yvzrr9o54s2llkr/uol.png); */
        background-image: url(rffeditor/imgEditor/alignMedia-breakText-right.svg);
    }

    .esquerda label {
        /* background-image: url(https://dl.dropbox.com/s/i4z39zy2mtb7xq1/paypal.png); */
        background-image: url(rffeditor/imgEditor/alignMedia-float-left.svg);
    }

    .direita label {
        /* background-image: url(https://dl.dropbox.com/s/myj41602bom0g8p/bankslip.png); */
        background-image: url(rffeditor/imgEditor/alignMedia-float-right.svg);
    }

    .payment-methods input:focus + label {
        outline: 2px dotted #21b4d0;
    }

    .payment-methods input:checked + label {
        outline: 4px solid #21b4d0;
    }

    .payment-methods input:checked + label:after {
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8dGl0bGU+Y2hlY2tlZDwvdGl0bGU+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyBpZD0iY2hlY2tlZCIgZmlsbC1ydWxlPSJub256ZXJvIj4KICAgICAgICAgICAgPHBhdGggZD0iTTEwLjAwNDkyODUsMjAgQzE1LjQ5NTMxNzksMjAgMjAsMTUuNDkzMDk2NiAyMCwxMCBDMjAsNC40OTcwNDE0MiAxNS40OTUzMTc5LDAgOS45OTUwNzE0NiwwIEM0LjUwNDY4MjExLDAgMCw0LjQ5NzA0MTQyIDAsMTAgQzAsMTUuNDkzMDk2NiA0LjUwNDY4MjExLDIwIDEwLjAwNDkyODUsMjAgWiIgZmlsbD0iIzIxQjREMCI+PC9wYXRoPgogICAgICAgICAgICA8cGF0aCBkPSJNOS4wNDQ0MDE1NCwxNiBDOC41OTA3MzM1OSwxNiA4LjIzMzU5MDczLDE1Ljc3NDM1OSA3Ljk1MzY2Nzk1LDE1LjQyNTY0MSBMNS4zMzc4Mzc4NCwxMi4xNjQxMDI2IEM1LjA5NjUyNTEsMTEuODc2OTIzMSA1LDExLjYxMDI1NjQgNSwxMS4yOTIzMDc3IEM1LDEwLjYyNTY0MSA1LjUzMDg4ODAzLDEwLjA5MjMwNzcgNi4xNDg2NDg2NSwxMC4wOTIzMDc3IEM2LjUwNTc5MTUxLDEwLjA5MjMwNzcgNi43ODU3MTQyOSwxMC4yNTY0MTAzIDcuMDM2Njc5NTQsMTAuNTUzODQ2MiBMOS4wMjUwOTY1MywxMy4wNTY0MTAzIEwxMi44MTg1MzI4LDYuNjg3MTc5NDkgQzEzLjA5ODQ1NTYsNi4yMzU4OTc0NCAxMy40MTY5ODg0LDYgMTMuODMyMDQ2Myw2IEMxNC40NDAxNTQ0LDYgMTUsNi40ODIwNTEyOCAxNSw3LjE0ODcxNzk1IEMxNSw3LjQwNTEyODIxIDE0LjkwMzQ3NDksNy42OTIzMDc2OSAxNC43MzkzODIyLDcuOTU4OTc0MzYgTDEwLjEyNTQ4MjYsMTUuMzY0MTAyNiBDOS44NjQ4NjQ4NiwxNS43NTM4NDYyIDkuNDY5MTExOTcsMTYgOS4wNDQ0MDE1NCwxNiBaIiBpZD0iUGF0aCIgZmlsbD0iI0ZGRkZGRiI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+);
        bottom: -10px;
        content: "";
        display: inline-block;
        height: 20px;
        position: absolute;
        right: -10px;
        width: 20px;
    }

    @-moz-document url-prefix() {
        .payment-methods input:checked + label:after {
            bottom: 0;
            right: 0;
            background-color: #21b4d0;
        }
    }



    


    #editVideo {
        min-width: 200px;
        max-width: 400px;
        position: fixed;
        /* position: sticky; */
        /* position: absolute; */
        top: 100px;
        left: 0px;
        margin: auto;
        background-color: white;
        padding: 20px;
        /* height: 70%; */
        /* overflow-y: auto; */
        display: none;
        flex-direction: column;
        border: 1px solid #dfdfdf;
        box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        border-radius: 8px;
        z-index: 10001;
        padding-top: 50px;
        background-image: url('rffeditor/imgEditor/arrastar.png');
        background-size: 100% 8%;
        background-repeat: repeat-x;
    }

    #editVideo input[type="number"]{
        width: calc(100% - 20px) !important;
        /* margin-bottom: 10px; */
    }
    #editVideo #addCaption{
        /* margin-top: 10px; */
    }

    #editVideo table tr td{
        justify-content: center;
        padding-bottom: 10px;
    }


    #editVideo {
        -webkit-user-select: none;
        -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        /* position: absolute; */
    }

    #pages #footer{
        background-color: white;
    }
    
</style>
<script language="JavaScript">

</script>

</head>

<body>
    

<div id="editVideo" onmousedown="getEventDrag(this)">
    <table width="100%" onmousedown="removeDrag()">
        <tr style="margin">
            <td width="50"><img src="rffeditor/imgEditor/config-tam-width.svg" alt="Largura" title="Largura" width="100%" hieght="100%"></td>
            <td style="width: calc(100% - 50px);"><input type="number" name="larg" id="larg"></td>
        </tr>
        <tr>
            <td width="50"><img src="rffeditor/imgEditor/config-tam-height.svg" alt="Altura" title="Altura" width="100%" hieght="100%"></td>
            <td style="width: calc(100% - 50px);"><input type="number" name="alt" id="alt"></td>
        </tr>
        <tr>
            <td width="50"><img src="rffeditor/imgEditor/config-resource-alt.svg" alt="Recurso alt" title="Recurso alt" width="100%" hieght="100%"></td>
            <td style="width: calc(100% - 50px);"><input type="text" name="resourceAlt" id="resourceAlt" title="Adicionar recurso de alt" alt="Adicionar recurso de alt"></td>
        </tr>
        <tr>
            <td width="50"><img src="rffeditor/imgEditor/config-resource-title.svg" alt="Recurso title" title="Recurso title" width="100%" hieght="100%"></td>
            <td style="width: calc(100% - 50px);"><input type="text" name="resourceTitle" id="resourceTitle" title="Adicionar recurso de title" alt="Adicionar recurso de title"></td>
        </tr>
    </table>
    
    <button onclick="getSetCaption()" id="addCaption" onmousedown="removeDrag()">Adicionar Caption</button>
    <ul class="payment-methods" onmousedown="removeDrag()">
        <li class="payment-method esquerda">
            <input name="payment_methods" type="radio" id="esquerda">
            <label for="esquerda">esquerda</label>
        </li>

        <li class="payment-method direita">
            <input name="payment_methods" type="radio" id="direita">
            <label for="direita">direita</label>
        </li>

        <li class="payment-method breakTextLeft">
            <input name="payment_methods" type="radio" id="breakTextLeft">
            <label for="breakTextLeft">solto</label>
        </li>

        <li class="payment-method breakTextCenter">
            <input name="payment_methods" type="radio" id="breakTextCenter">
            <label for="breakTextCenter">breakTextCenter</label>
        </li>

        <li class="payment-method breakTextRight">
            <input name="payment_methods" type="radio" id="breakTextRight">
            <label for="breakTextRight">breakTextRight</label>
        </li>
    </ul><br>
    <span id="tipoObj" style="display:none;"></span>
    <button onclick="salveUpdateIframe()" onmousedown="removeDrag()">alterar</button>
    <button onclick="cancelEditMedia()" onmousedown="removeDrag()">Cancelar</button>
</div>

<div id="efeitosTexto">
    <div id="topEfeitoTexto">
        <div id="tituloEfeitoTexto">Efeitos de texto</div>
        <div id="fecharEfeitosTexto" onclick="fechaJanEfeitosTexto()">X</div>
    </div>
        <button id="testeSel" onclick="fechaJanEfeitosTexto(), delElement()">Remover efeito</button>
    <div id="listaEfeitoTexto">
        <button onClick="insertTagsNew('rffEfeitoBGText'), fechaJanEfeitosTexto()"><rffEfeitoBGText>rff Efeito BG Text 1</rffEfeitoBGText></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText2'), fechaJanEfeitosTexto()"><rffEfeitoBGText2>rff Efeito BG Text 2</rffEfeitoBGText2></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText3'), fechaJanEfeitosTexto()"><rffEfeitoBGText3>rff Efeito BG Text 3</rffEfeitoBGText3></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText4'), fechaJanEfeitosTexto()"><rffEfeitoBGText4>rff Efeito BG Text 4</rffEfeitoBGText4></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText5'), fechaJanEfeitosTexto()"><rffEfeitoBGText5>rff Efeito BG Text 5</rffEfeitoBGText5></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText6'), fechaJanEfeitosTexto()"><rffEfeitoBGText6>rff Efeito BG Text 6</rffEfeitoBGText6></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText7'), fechaJanEfeitosTexto()"><rffEfeitoBGText7>rff Efeito BG Text 7</rffEfeitoBGText7></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText8'), fechaJanEfeitosTexto()"><rffEfeitoBGText8>rff Efeito BG Text 8</rffEfeitoBGText8></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText9'), fechaJanEfeitosTexto()"><rffEfeitoBGText9>rff Efeito BG Text 9</rffEfeitoBGText9></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText10'), fechaJanEfeitosTexto()"><rffEfeitoBGText10>rff Efeito BG Text 10</rffEfeitoBGText10></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText11'), fechaJanEfeitosTexto()"><rffEfeitoBGText11>rff Efeito BG Text 11</rffEfeitoBGText11></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText12'), fechaJanEfeitosTexto()"><rffEfeitoBGText12>rff Efeito BG Text 12</rffEfeitoBGText12></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText13'), fechaJanEfeitosTexto()"><rffEfeitoBGText13>rff Efeito BG Text 13</rffEfeitoBGText13></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText14'), fechaJanEfeitosTexto()"><rffEfeitoBGText14>rff Efeito BG Text 14</rffEfeitoBGText14></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText15'), fechaJanEfeitosTexto()"><rffEfeitoBGText15>rff Efeito BG Text 15</rffEfeitoBGText15></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText16'), fechaJanEfeitosTexto()"><rffEfeitoBGText16>rff Efeito BG Text 16</rffEfeitoBGText16></button><br>
        <button onClick="insertTagsNew('rffEfeitoBGText17'), fechaJanEfeitosTexto()"><rffEfeitoBGText17>rff Efeito BG Text 17</rffEfeitoBGText17></button>
        <button onClick="insertTagsNew('rffEfeitoBGText18'), fechaJanEfeitosTexto()"><rffEfeitoBGText18>rff Efeito BG Text 18</rffEfeitoBGText18></button>
        <button onClick="insertTagsNew('rffEfeitoBGText19'), fechaJanEfeitosTexto()"><rffEfeitoBGText19>rff Efeito BG Text 19</rffEfeitoBGText19></button>
    </div>
</div>



<div id="emotions">
    <div id="topEmotions">
        <div id="tituloEmotions">Efeitos de texto</div>
        <div id="fecharEmotions" onclick="fechaJanEmotions()">X</div>
    </div>
    <div id="listaEmotions">
        <?php
            include_once("./rffeditor/class/list-file.class.php");
            $emotions = new ListFile();
            $emotions->listFiles('rffeditor/icones');
        ?>
    </div>
</div>

<!-- <div id="editVideo">
    <input type="text" name="larg" id="larg">
    <input type="text" name="alt" id="alt">
    <button onclick="salveUpdateIframe()">alterar</button>
    <button onclick="cancelEditMedia()">Cancelar</button>
</div> -->

<div id="ferramentas">
    <!-- <button id="testeSel" onclick="merge('row', 'add')">Mesclar com a do lado</button>
    <button id="testeSel" onclick="merge('column', 'add')">Mesclar com a debaixo</button>
    <button id="testeSel" onclick="merge('row', 'remove')">UnMerge com a do lado</button>
    <button id="testeSel" onclick="merge('column', 'remove')">UnMerge com a debaixo</button> -->
    <!-- <button id="testeSel" onclick="getWindowBckgroundColorTDsel()">backGroundColorTdSel</button>
    <button id="testeSel" onclick="borderTdSel('sc')">borderTdSel</button>
    <button id="testeSel" onclick="rotateTdSel('sc')">rotateTdSel</button> -->
    <!-- <button id="testeSel" onclick="insertCellLeft()">insertCellLeft</button>
    <button id="testeSel" onclick="insertCellRight()">insertCellRight</button>
    <button id="testeSel" onclick="removeCell()">removeCell</button> -->
    <!-- <button id="testeSel" onclick="getTags()">getTags</button> -->
    <!-- <button id="testeSel" onclick="insertBreakPage()">Inserir quebra de página</button> -->
    <!-- <button id="testeSel" onclick="printPDF()">Imprimir</button> -->

    <select name="typefontface" id="typefontface">
        <option value="padrao" name="padrao" id="padrao"  disabled selected>Font</option>
        <option value="monospace" name="monospace" id="monospace">Monospace</option>
        <option value="Arial" name="Arial" id="Arial">Arial</option>
        <option value="Courier" name="Courier" id="Courier">Courier</option>
        <option value="Verdana" name="Verdana" id="Verdana">Verdana</option>
        <option value="Tahoma" name="Tahoma" id="Tahoma">Tahoma</option>
        <option value="Inter" name="Inter" id="Inter">Inter</option>
        <option value="Bebas Neue" name="Bebas Neue" id="Bebas Neue">Bebas Neue</option>
    </select>
    
    
    <img src="rffeditor/imgEditor/bold.svg" title="Colocar em Negrito" onClick="negrito(), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" unselectable="on" spaw_state="true" id="negrito" />
    <img src="rffeditor/imgEditor/italic.svg" title="Colocar em Itálico" onClick="italico(), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="italico" />
    <img src="rffeditor/imgEditor/underline.svg" title="Colocar em Sublinhado" onClick="sublinhado(), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="sublinhado" />
    <img src="rffeditor/imgEditor/strikeout.svg" title="Adicionar linha riscada" onClick="addStrikeThrough(), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="strike" />
    <img src="rffeditor/imgEditor/alignright.svg" title="Alinhar a direita" onClick="alinharDireita()" />
    <img src="rffeditor/imgEditor/alignleft.svg" title="Alinhar a esquerda" onClick="alinharEsquerda()" />
    <img src="rffeditor/imgEditor/alignhorizontalcenter.svg" title="Centralizar" onClick="alinharCentro()" />
    <img src="rffeditor/imgEditor/alignblock.svg" title="Justificar" onClick="justificar()" />
    <select name="tamFont" id="tamFont">
        <?php
            for($i=1; $i<8; $i++){
                echo '<option value="'.$i.'"  name="'.$i.'" id="'.$i.'">'.$i.'</option>';
            }
        ?>
        <option value="padrao" name="padrao" id="padrao" disabled selected>Size</option>
    </select>
    
    <img src="rffeditor/imgEditor/defaultbullet.svg" title="Marcador" onClick="unOrdenarLista()" />
    <img src="rffeditor/imgEditor/defaultnumbering.svg" title="Numeração" onClick="ordenarLista()" />
    

    <img src="rffeditor/imgEditor/color.svg" title="Mudar a cor do texto" onclick="window.open('rffeditor/windowColorText.php', 'janela', 'height=350, width=500, top=50, left=100, scrollbar=no, fullscreen=no')" />
    
    <img src="rffeditor/imgEditor/backcolor.svg" title="Cor de destaque do texto" onClick="window.open('rffeditor/windowColorBackGroundText.php', 'janela', 'height=350, width=500, top=50, left=100, scrollbar=no, fullscreen=no')" />

    <img src="rffeditor/imgEditor/resetattributes.svg" title="Remover formatação" onClick="removeFormatT()" />
    <img src="rffeditor/imgEditor/subscript.svg" title="Colocar em subescrito" onClick="addSubScript(), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="subescrito" />
    <img src="rffeditor/imgEditor/superscript.svg" title="Colocar em superescrito" onClick="addSuperScript(), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="superescrito" />
    <img src="rffeditor/imgEditor/changecasetoupper.svg" title="Deixar texto em caixa alta" onClick='insertTag("span", "style=\"text-transform:uppercase;\"")' />
    <img src="rffeditor/imgEditor/changecasetolower.svg" title="Deixar texto em caixa baixa" onClick='insertTag("span", "style=\"text-transform:lowercase;\"")' />
    <img src="rffeditor/imgEditor/capitalize.svg" title="Deixar iniciais das palavras em caixa alta" onClick='insertTag("span", "style=\"text-transform:capitalize;\"")' />
    <img src="rffeditor/imgEditor/capitular.svg" title="Inserir capitular" onClick='insertTag("p", "class=\"p\""), this.setAttribute("style", "background-color:#cdcdcd;"), selectElem()' id="p" />
    <img src="rffeditor/imgEditor/insertShadowText.svg" title="Inserir sombra no texto" onClick="insertTagsNew('rffTextShadow'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="rffTextShadow" />
    <img src="rffeditor/imgEditor/insertNeonText.svg" title="Inserir um neon no texto" onClick="insertTagsNew('rffNeonText'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="rffNeonText" />
    <img src="rffeditor/imgEditor/insertNeonTextEColorWhite.svg" title="Inserir um neon no texto e deixar o texto transparente" onClick="insertTagsNew('rffNeonTextEColorWhite'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="rffNeonTextEColorWhite" />
    
    
    <img src="rffeditor/imgEditor/rffText3D.svg" title="rffText3D" onClick="insertTagsNew('rffText3D'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="rffText3D" />
    <img src="rffeditor/imgEditor/rffTextSimples.svg" title="rffText3DSimples" onClick="insertTagsNew('rffText3DSimples'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="rffText3DSimples" />
    <img src="rffeditor/imgEditor/rffTextExtreme.svg" title="rffText3DExtreme" onClick="insertTagsNew('rffText3DExtreme'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="rffText3DExtreme" />
    <img src="rffeditor/imgEditor/rffTextDegrade.svg" title="rffTextDegrade" onClick="insertTagsNew('rffTextDegrade'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="rffTextDegrade" />
    <img src="rffeditor/imgEditor/coroa2.svg" title="rffEfeitoBGText" onClick="abreJanEfeitosTexto()" />
    
    <select name="formatH" id="formatH">
        <option value="h1">H1</option>
        <option value="h2">H2</option>
        <option value="h3">H3</option>
        <option value="h4">H4</option>
        <option value="h5">H5</option>
        <option value="reset">Normal</option>
        <option value="padrao" disabled selected name="padrao" id="padrao">Hs</option>
    </select>
    <img src="rffeditor/imgEditor/hangingindent.svg" title="Identar linha" onClick="addIdent()" />
    <img src="rffeditor/imgEditor/hangingindentremove.svg" title="Remove a identação" onClick="addOutIdent()" />

    <img src="rffeditor/imgEditor/copy.svg" title="Copiar" onClick="copiar()" />
    <img src="rffeditor/imgEditor/paste.svg" title="Colar" onClick="colar()" />
    <img src="rffeditor/imgEditor/cut.svg" title="Recortar" onClick="recortar()" />

    <img src="rffeditor/imgEditor/redo.svg" title="Refazer" onClick="refazer()" />
    <img src="rffeditor/imgEditor/undo.svg" title="Desfazer" onClick="desfazer()" />
    <img src="rffeditor/imgEditor/insertvideo.svg" title="Inserir Vídeo" onClick="openWindowInsertVideo()" />
    <img src="rffeditor/imgEditor/graphic.svg" title="Inserir Imagem" onClick="openWindowInsertImage()" />
    <img src="rffeditor/imgEditor/editImage.svg" title="Acrescentar a função de editar as imagens" onClick="funcBtImg()" />
    <img src="rffeditor/imgEditor/inserttable.svg" title="Inserir tabela" onClick="insertTable()" />
    <!-- <img src="rffeditor/imgEditor/inserttableColumnAfter.svg" title="Inserir coluna depois da coluna selecionada" onClick="insertTdAfter()" unselectable="on" spaw_state="true"/>
    <img src="rffeditor/imgEditor/inserttableColumnBefore.svg" title="Inserir coluna antes da coluna selecionada" onClick="insertTdBefore()" unselectable="on" spaw_state="true"/>
    <img src="rffeditor/imgEditor/inserttableRowAfter.svg" title="Inserir linha depois da linha selecionada" onClick="insertTrAfter()" unselectable="on" spaw_state="true"/>
    <img src="rffeditor/imgEditor/inserttableRowBefore.svg" title="Inserir linha antes da linha selecionada" onClick="insertTrBefore()" unselectable="on" spaw_state="true"/>
    <img src="rffeditor/imgEditor/deleteTableColumn.svg" title="Excluir coluna selecionada" onClick="delTd()" unselectable="on" spaw_state="true"/>
    <img src="rffeditor/imgEditor/deleteTableRowAfter.svg" title="Excluir linha selecionada" onClick="delTr()" unselectable="on" spaw_state="true"/> -->

    <!-- <img src="rffeditor/imgEditor/inserthyperlinkcontrol.svg" title="Inserir hiperlink" onClick="openWindowLink(), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="insertHyperLink" /> -->
    <img src="rffeditor/imgEditor/inserthyperlinkcontrol.svg" title="Inserir hiperlink" onClick="openWindowLink()" id="insertHyperLink" />
    <img src="rffeditor/imgEditor/removehyperlink.svg" title="Remover hiperlink" onClick="unlink()" />

    <img src="rffeditor/imgEditor/emotions.svg" title="Inserir emotions" style="width:40px; height:auto;" onClick="abreJanEmotions()" />
    <img src="rffeditor/imgEditor/citacao.png" title="Inserir uma citação" onClick="insertTagsNew('cite'), this.setAttribute('style', 'background-color:#cdcdcd;'), selectElem()" id="cite" />
    

    <img src="rffeditor/imgEditor/breakPage.svg" title="Inserir quebra de página" onClick="insertBreakPage()" unselectable="on" spaw_state="true" id="breakPage" />
    <img src="rffeditor/imgEditor/summary.svg" title="Inserir/remover Sumário" onClick="setOrRemoveHeading()" unselectable="on" spaw_state="true" id="sumario" />
    <!-- <img src="rffeditor/imgEditor/print.svg" title="Imprimir" onClick="printPageDiv()" unselectable="on" spaw_state="true" id="print" /> -->
    <img src="rffeditor/imgEditor/print.svg" title="Imprimir" onClick="pdf()" id="print" />
    <!-- <img src="rffeditor/imgEditor/print.svg" title="Imprimir" onClick="printPageDiv()" unselectable="on" spaw_state="true" id="print" /> -->
    <img src="rffeditor/imgEditor/pastTextWordWeb.svg" title="Colar um conteúdo tirado da WEB ou do Word" onClick="openPasteContentOfWeb()" unselectable="on" spaw_state="true" id="pasteContentOfWeb" />
    
    
</div>
<div id="conteiner">
    <div id="texto" contenteditable="true" autofocus required autocomplete="off" spellcheck="true" class="box"><div>Digite o seu artigo aqui...</div></div>
    
</div>


        <div id="preview"></div>
        <div id="porcento"></div>
<script src="rffeditor/upload.js"></script>
<script src="rffeditor/func.editor.robson.js"></script>
<script src="rffeditor/dragDrop.js"></script>
<script src="rffeditor/simplePDF.js"></script>
<script>
    var janEfeitoTexto = document.getElementById("efeitosTexto");
    function fechaJanEfeitosTexto(){
        janEfeitoTexto.setAttribute("style", "display:none;");
    }
    function abreJanEfeitosTexto(){
        janEfeitoTexto.setAttribute("style", "display:flex;");
    }

    
    var emotions = document.getElementById("emotions");
    function fechaJanEmotions(){
        emotions.setAttribute("style", "display:none;");
    }
    function abreJanEmotions(){
        emotions.setAttribute("style", "display:flex;");
    }

    var divCorText = document.getElementById('divCorText');
    function openWindowsColorText(){
        divCorText.setAttribute('style', 'display:flex;');
    }
    function closeWindowsColorText(){
        divCorText.setAttribute('style', 'display:none;');
    }

    var divCorDestText = document.getElementById('divCorDestText');
    function openWindowsColorDestText(){
        divCorDestText.setAttribute('style', 'display:flex;');
    }
    function closeWindowsColorDestText(){
        divCorDestText.setAttribute('style', 'display:none;');
    }

    var nodePai = '';    

    function editVideo(ob, event, tipoObj){
        let resourceAlt = document.getElementById('resourceAlt');
        let resourceTitle = document.getElementById('resourceTitle');
        document.getElementById('tipoObj').innerHTML = tipoObj;
        const janVideoEdit = document.getElementById('editVideo');
        // console.log(ob)
        let pai = ob.parentNode;
        // console.log(pai)
        let paipai = pai.parentNode;
        // console.log(paipai)
        let position = paipai.getBoundingClientRect();
        // console.log(position)
        janVideoEdit.setAttribute('style', 'display:block; top:'+position.y+'px; left:'+position.x+'px;');
        resourceAlt = paipai.getAttribute('alt');
        resourceTitle = paipai.getAttribute('title');
        // let ifr = paipai.children[1]
        // console.log(paipai.getAttribute('style'))
        let valores = paipai.getAttribute('style');
        valores = valores.split(';');
        let l='';
        let a='';
        // console.log('------------'+valores)
        for(let i=0; i<valores.length;i++){
            let item = valores[i].split(':');
            // console.log(item)
            if(item[0].includes("width")){
                l=item[1].replace(' ', '').replace('px', '');
            }else if(item[0].includes("height")){
                a=item[1].replace(' ', '').replace('px', '');
            }
            if(item[0].includes("float")){
                if(item[1].includes('left')){
                    document.getElementById('esquerda').checked = true;
                }else if(item[1].includes('right')){
                    document.getElementById('direita').checked = true;
                }
            }
            if(item[0].includes('margin')){
                if(item[1].includes('auto')){
                    document.getElementById('breakTextCenter').checked = true;
                }else if(item[1].includes('0px')){
                    document.getElementById('breakTextLeft').checked = true;
                }else if(item[1].includes('0px 0px 0px auto')){
                    document.getELementById('breakTextRight').checked = true;
                }
            }
        }
        let mediaAndCaption = paipai.children[1];
        let captionMedia = mediaAndCaption.children[1];
        // console.log(captionMedia.nodeName);
        if(captionMedia!=null){
            document.getElementById('addCaption').innerHTML = 'Remover caption';
        }else{
            document.getElementById('addCaption').innerHTML = 'Adicionar caption';
        }
        document.getElementById('larg').value = l;
        document.getElementById('alt').value = a;
        nodePai = paipai;
    }

    function cancelEditMedia(){
        document.getElementById('editVideo').setAttribute('style', 'display:none;')
        
        let ttt = nodePai.children[1].children[0];
        console.log(ttt)
        console.log(ttt.clientWidth)
        console.log(ttt.clientHeight)
    }

    function salveUpdateIframe(){
        // console.log('....................................................................')
        let larg = document.getElementById('larg').value;
        let alt = document.getElementById('alt').value;
        if(document.getElementById('tipoObj').innerHTML=='img'){
            if(alt==''){
                alt='auto'
            }else{
                alt=alt+'px'
            }
            if(larg==''){
                larg='auto'
            }else{
                larg=larg+'px'
            }
        }else{
            larg=larg+'px'
            alt=alt+'px'
        }
        nodePai.setAttribute('style', 'width: '+larg+'; height: '+alt+';');
        let esquerda = document.getElementById('esquerda');
        let breakTextLeft = document.getElementById('breakTextLeft');
        let breakTextRight = document.getElementById('breakTextRight');
        let breakTextCenter = document.getElementById('breakTextCenter');
        let direita = document.getElementById('direita');
        let resourceAlt = document.getElementById('resourceAlt');
        let resourceTitle = document.getElementById('resourceTitle');
        let direcao = null;
        let margin = null;
        let order = null;
        if(esquerda.checked){
            direcao='left';
            // nodePai.style.marginRight='20px';
            margin='0 20px 0 0';
            order='none';
        }else if(direita.checked){
            direcao='right';
            // nodePai.style.marginLeft='20px';
            margin='0 0 0 20px';
            order='none';
        }else if(breakTextLeft.checked){
            direcao='none';
            // nodePai.style.margin='0';
            margin='0';
            order='none';
        }else if(breakTextCenter.checked){
            direcao='none';
            // nodePai.style.margin='auto';
            margin='auto';
            order='none';
        }else if(breakTextRight.checked){
            direcao='none';
            // nodePai.style.margin='0';
            margin='0 0 0 auto';
            order=1;
        }
        nodePai.style.margin=margin;
        nodePai.style.order=order;
        nodePai.style.width=larg;
        nodePai.style.height=alt;
        nodePai.style.float=direcao;
        nodePai.setAttribute('alt', resourceAlt.value);
        nodePai.setAttribute('title', resourceTitle.value);
        document.getElementById('editVideo').setAttribute('style', 'display:none;')
        cancelEditMedia()
    }
    window.addEventListener('load', function(){
        selectBtSumario();
    })

    function pdf(){
        let pdf = new SimplePDF();
        pdf.setBookName('Meu primeiro livro');
        console.log(pdf.bookName)
        pdf.toGenerateCleanPage('<center><h1>Livro Show de bola</h1></center>')
        pdf.toGenerateCleanPage('<center><h2>SUMMARY</h2></center>')
        pdf.header(pdf.bookName+' - Cabeçalho da página', '25px 25px 10px 25px');
        pdf.getContent(document.getElementById('texto'));
        pdf.footer('rodapé das páginas', '10px 70px 35px 70px', 'alternado');
        pdf.toGeneratePDF();
    }

    
</script>
</body>
</html>