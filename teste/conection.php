<?php
    $host = 'sql653.main-hosting.eu';
    $dbname = 'u271991299_modelos';
    $username = 'u271991299_gerente';
    $password = 'T3xe9GG:kY+6';
    $link = mysqli_connect($host, $username, $password, $dbname);

    if (!$link) {
        die('Erro ao conectar ao banco: ' . mysql_error());
    }
    $execbanco=mysqli_query($link,$sql);
    echo $execbanco;
    echo 'Conectado com sucesso';
    mysql_close($link);
?>