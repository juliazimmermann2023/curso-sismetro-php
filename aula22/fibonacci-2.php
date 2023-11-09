<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(148, 187, 233, 1) 100%);
            height: 100vh;
        }


        body {
            text-align: center;
        }

        .formulario {
            width: 100%;
            margin: auto;
            padding: 25px;
            border: solid 1px;
        }
    </style>
</head>

<body>
<?php
//sequencia fibonacci

function fibonacci($fibon){
 $fibonacci = array();
 $fibonacci[0]= 1;
 $fibonacci[1]= 1;
    for ($valor = 2; $valor < $fibon; $valor++) {
        $fibonacci[$valor] = $fibonacci[$valor - 1] + $fibonacci[$valor - 2];
        
    }
    return $fibonacci[$fibon - 1];
    
}

?>

    <h1> Calculadora Fibonacci</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">





            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Posição:</label>
                </div>


                <div class="mb-3">
                    <input type="text" name="posicao" class="form-control" placeholder="posicao da sequencia de fibonacci" value="<?php if (isset($_POST["posicao"])) echo $_POST["posicao"]; ?>">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
 
                <?php              
if (isset($_POST["posicao"])) {
?>
 
                <h2> Resultado </h2>
                <div class="row text-center">
                    <div class="col-3">
                        <small>Valor:</small>
                        <h3><?php echo fibonacci($_POST["posicao"]); ?> </h3>
                    </div>

                        
               
                <?php
                }
                ?>


            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>