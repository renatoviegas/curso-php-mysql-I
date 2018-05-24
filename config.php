<?php

function isProduction() {

    $ponteiro = fopen ("config.cfg", "r");

    while (!feof ($ponteiro)) {
        $linha = fgets($ponteiro, 4096);
    }

    fclose ($ponteiro);

    return $linha == 'PROD';
}