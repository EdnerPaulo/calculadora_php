<html>
    <head> 
        <title>Calcula</title>
    </head>
    <body>
        Aqui é um codigo em PHP <br>
    <?php
    print("Aqui é um código em php");
    $n1 = $_POST["txtN1"];
    $n2 = $_POST["txtN2"];

    $soma = $n1 + $n2;
    
    print("<br> O Resultado da soma é $soma");
    
    $divi = $n1 / $n2;
    print("<br> O Resultado da divisão é $divi");

        
    $mult = $n1 * $n2;
    print("<br> O Resultado da multiplicação é $mult");
        
    $subt = $n1 - $n2;
    print("<br> O Resultado da subtração é $subt");
    ?>

    </body>
    </html>