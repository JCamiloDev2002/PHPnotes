<?php
// Comando de varias lineas

/*
PHP puede tratar una secuencia de varias lineas con el operador <<<
al que normalmente nos referimso como here-document o heredoc
*/

//primera forma
echo "developers, developers,
    developers.

    - $autor
";

//segunda forma
$text = "developers, developers,
    developers.
    - $autor
";

//tercera forma
echo<<<_END
    developers, developers,
    developers.
    - $autor.
_END;

//cuarta forma
$out = <<<_END
    normal people because
    if...
    - $autor.
_END;

echo $out;

/*
- Muestra el texto como comillas dobles pero no necesita caracteres de escape
- podemos usar el mismo nombre de etiqueta otra vez
-el cierre _END debe aparecer justo al comienzo de una nueva linea y debe ser lo unico que haya en esa linea ni siquiera un espacio o comentario
*/
?>