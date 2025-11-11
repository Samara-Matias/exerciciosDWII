<?php

spl_autoload_register( function ( string $classe ) {
    // Remove o namespace base 'cefet/banco/'
    $prefixo = 'cefet\\banco';
    $baseDir = 'src';

    // Obtém o caminho relativo da classe (src\modele\Aluno)
    $caminhoRelativo = str_replace( $prefixo, $baseDir, $classe );
    $caminhoRelativo = str_replace( '\\', DIRECTORY_SEPARATOR, $caminhoRelativo );

    // Substitui '\' por '/' e acrescenta a extensão .php (src/modelo/Aluno.php)
    $arquivo = $caminhoRelativo . '.php';

    // Carrega o arquivo, se existir
    if( file_exists($arquivo) )
        require_once $arquivo;

} );