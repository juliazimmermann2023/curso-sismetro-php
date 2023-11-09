<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    *{
    background-color:pink;
    }
    #bt{
        text-align: center;
        
    } 
</style>
<body>
    <div class="row mt-2">
        <div class="col-6 offset-3">
            <form method="post" action="formulario.php">
            <label>$posicao</label>
            <input name="nome" type="text" class="form-control"
            placeholder="sequencia de fibonacci"value="<?php if(isset($_POST["posicao"])) echo($_POST["posicao"]))/>

            

            <div id="bt">
            <button type="submit" class="btn btn-outline-primary" >enviar</button>
            
            </div>
        </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
