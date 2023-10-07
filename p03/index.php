<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>

    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        $_myvar = 'hola';
        echo '$_myvar es correcta porque la variable empieza con un guion bajo.<br>';

        $_7var = 123;
        echo '$_7var es correcta <br>';

       // myvar = 'funciona?';
        echo 'myvar no es correcto debido a que no tiene el simbolo $ al inicio de su declaracion<br>';

        $myvar = 'funciona?';
        echo '$myvar es correcta <br>';

        $var7 = '48';
        echo '$var7 es correcta <br>';

        $_element1 = ':D';
        echo '$_element1 es correcta <br>';

        //$house*5 ='profe';
        echo '$house*5 debido a que tiene un simbolo de operacion al declarar la operacion';
    ?>
     <h2>Inciso 2</h2>
    <p>2. Proporcionar los valores de $a, $b, $c como sigue: <br/>
    $a = “ManejadorSQL”; <br/>
    $b = 'MySQL’; <br/>
    $c = &amp;$a;<br/>
    </p>

   <?php
   
   $a = "ManejadorSQL";
   $b = 'MySQL';
   $c = &$a;

    echo 'a. Ahora muestra el contenido de cada variable <br> <br>';

    echo 'Valor de $a: '.$a.'<br>';
    echo 'Valor de $b: '.$b.'<br>';
    echo 'Valor de $c: '.$c.'<br> <br>';


    echo 'b. Agrega al código actual las siguientes asignaciones: <br>
    $a = “PHP server”; <br>
    $b = &$a; <br> <br>';

    $a = "PHP server";
    $b = &$a;


    echo 'c. Vuelve a mostrar el contenido de cada uno <br> <br>';

    echo 'Valor de $a: '.$a.'<br>';
    echo 'Valor de $b: '.$b.'<br>';
    echo 'Valor de $c: '.$c.'<br> <br>';

    echo 'd. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de <br>
    asignaciones <br> <br>';

    echo '$b y $c tienen el mismo valor que $a, ya que estos estan asignados por referencia a la variable $a';
    unset($a,$b,$c);
   ?>
    <h2>Inciso 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación, <br />
    verificar la evolución del tipo de estas variables (imprime todos los componentes de los <br />
    arreglo): <br /></p>

    <?php
    
    $a = "PHP5";
    echo 'Valor de $a: '.$a.'<br>';

    $z[] = &$a;
    echo 'Valor de $z: ';
    print_r ($z);
    echo '<br>';

    $b = "5a version de PHP";
    echo 'Valor de $b: '.$b.'<br>';

    @$c = $b*10;
    echo 'Valor de $c: '.$c. '<br>';

    $a .= $b;
    echo 'Valor de $a: '.$a.'<br>';

    $b *= $c;
    echo 'Valor de $b: '.$b.'<br>';

    $z[0] = "MySQL";
    print_r ($z);
    echo '<br>';
    ?>

<h2>Inciso 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de <br />
    la matriz $GLOBALS o del modificador global de PHP.</p>
    <?php
    function prueba(){
        global $a, $b, $c, $z;
    echo 'Valor de $a: '.$a.'<br>';
    echo 'Valor de $b: '.$b.'<br>';
    echo 'Valor de $c: '.$c.'<br>';
    echo 'Valor de $z: ';
    print_r ($z);
    }
    
prueba();

    echo '<br>';
    ?>

<h2>Inciso 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script: <br />
    $a = “7 personas”; <br/>
    $b = (integer) $a; <br/>
    $a = “9E3”; <br/>
    $c = (double) $a; <br/></p>

    <?php
    $a = "7 personas";
    echo 'Valor de $a: '.$a.'<br>';
    $b = (integer) $a;
    echo 'Valor de $b: '.$b.'<br>';
    $a = "9E3";
    echo 'Valor de $a: '.$a.'<br>';
    $c = (double) $a;
    echo 'Valor de $c: '.$c.'<br>';
    ?>
     <h2>Inciso 6</h2>
    <p>
    Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas <br />
    usando la función var_dump(&lt;'datos'>). <br />

    </p>

    <?php
    $a = TRUE;
    $b = FALSE;
    $c = TRUE;
    $d = FALSE;
    $e = TRUE;
    $f = FALSE;

    var_dump($a, $b, $c, $d, $e, $f);

    echo '<br><br>Después investiga una función de PHP que permita transformar el valor booleano de $c y $e <br>
    en uno que se pueda mostrar con un echo: <br> <br>
    $a = “0”; <br>
    $b = “TRUE”; <br>
    $c = FALSE; <br>
    $d = ($a OR $b); <br>
    $e = ($a AND $c); <br>
    $f = ($a XOR $b); <br> <br>';

    unset($a, $b, $c, $d, $e, $f);

    $a = "0";
    $b = "TRUE";
    $c = FALSE;
    $d = ($a OR $b);
    $e = ($a AND $c);
    $f = ($a XOR $b);

    echo 'Valor de $a: '.$a.'<br>';
    echo 'Valor de $b: '.$b.'<br>';
    settype($c, "integer");
    echo ' Valor de $c: '.strval($c).'<br>';
    echo 'Valor de $d: '.$d;
    settype($e, "integer");
    echo '<br> Valor de $e: '.$e.'<br>';
    echo 'Valor de $f: '.$f.'<br>';
    ?>
    <h2>Inciso 7</h2>
    <p>Usando la variable predefinida $_SERVER, determina lo siguiente: <br />
    a. La versión de Apache y PHP, <br />
    b. El nombre del sistema operativo (servidor), <br />
    c. El idioma del navegador (cliente). <br /></p>

    <?php
    echo 'Version de Apache y PHP: ';
    echo $_SERVER['SERVER_SIGNATURE'];
    echo '<br>Nombre del sistema operativo (servidor): ';
    echo $_SERVER['SERVER_NAME'];
    echo '<br>Idioma del navegador (cliente): ';
    echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    ?>
    <p> 
    <a href="http://validator.w3.org/check?uri=referer"><img 
      src="http://www.w3.org/Icons/valid-xhtml11" alt="Válido XHTML 1.1" altura="31" ancho="88" /></a> 
  </p>
</body>
</html>