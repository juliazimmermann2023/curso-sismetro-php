<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: rgb(255, 190, 241);
            background: radial-gradient(circle, rgba(255, 190, 241, 1) 0%, rgba(240, 90, 214, 1) 100%);
            height: 100vh;
        }

        @import url('https://fonts.googleapis.com/css2?family=Agbalumo&display=swap');
        
  @import url('https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:ital,wght@1,300&display=swap');

        body {
            text-align: center;
        }

        .formulario {
            width: 100%;
            margin: auto;
            padding: 25px;
            border: solid 1px;
        }

        img {
            width: 1%;
        }
h2{
   font-family: 'Roboto+Mono';
 
            text-align: center;
            font-size: 3em;
         
}
        h1 {
            font-family: 'Agbalumo', serif;
            text-align: center;
            font-size: 3em;
            background-color: rgba(245, 123, 214, 0.952);
            margin-bottom: 30px;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    function isPrimo($posicao)
    {
        $primos = array(2);
        $num = 3;
        while (count($primos) < $posicao) {
            $v_primo = true;
            foreach ($primos as $primo) {
                if ($num % $primo == 0) {
                    $v_primo = false;
                }
            }
            if ($v_primo) {
                $primos[] = $num;
            }
            $num++;
        }
        return $primos[$posicao - 1];
    }



    ?>


    <h1> Calculadora de Números Primos</h1>
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

                    <h2> Resultado: </h2>
                    <div class="row text-center">
                        <div class="col-3">
                            <small>Valor:</small>
                            <h3><?php echo isPrimo($_POST["posicao"]); ?> </h3>
                        </div>



                    <?php
                }
                    ?>


            </form>
            <img src="https://media.tenor.com/V3k1aFw8wNQAAAAi/monica-cebolinha.gif">
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>