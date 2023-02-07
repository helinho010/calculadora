<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/estilos.css") }}">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <div class="row calculadora">
            <div class="titulo">
                Calculadora Basica
            </div>
            <div class="cuerpo">
                <form id="calc">
                    @csrf
                    <div class="container text-center">
                        <div class="row">
                            <div class="input">
                                <input type="text" value="0" id="texto-expresion" aria-label="First name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-2"><button name="1">1</button></div>
                            <div class="col-2"><button name="2">2</button></div>
                            <div class="col-2"><button name="3">3</button></div>
                            <div class="col-2"><button name="+">+</button></div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-2"><button name="4">4</button></div>
                            <div class="col-2"><button name="5">5</button></div>
                            <div class="col-2"><button name="6">6</button></div>
                            <div class="col-2"><button name="-">-</button></div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-2"><button name="7">7</button></div>
                            <div class="col-2"><button name="8">8</button></div>
                            <div class="col-2"><button name="9">9</button></div>
                            <div class="col-2"><button name="*">*</button></div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-2"><button name="C">C</button></div>
                            <div class="col-2"><button name="0">0</button></div>
                            <div class="col-2"><button name="R">R</button></div>
                            <div class="col-2"><button name="/">/</button></div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row text-center btn-calcular">
                            <div class="input">
                                <button class="form-control" name="calcular">calcular</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script>
    $("button").click(function(e){
        e.preventDefault();
        var expresion=String($('#texto-expresion').val());
        if ($(this).attr('name') == "calcular"){
            $('#texto-expresion').attr('value',eval(expresion));
        }else if ($(this).attr('name') == "C") {
            $("#texto-expresion").attr("value","0");
        }else if ($(this).attr('name') == "R"){
            expresion=expresion.substring(0,expresion.length-1);
            if (expresion === ""){
              expresion="0";  
            }
            $('#texto-expresion').attr('value',expresion);
        }else{
            if (expresion === "0") 
            {
                expresion="";
            }
            expresion = expresion + $(this).attr('name');
            $('#texto-expresion').attr('value',expresion);
        }
        $('#texto-expresion').attr('value',expresion);
    });
</script>
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>