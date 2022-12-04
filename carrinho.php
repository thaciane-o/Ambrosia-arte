<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produtos = valida($_POST["select"]);
}
function valida($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$ids = [];
    switch ($produtos) {
        case 'Tinta aquarelável - R$19,99':
                $ids[0] = '1';
            break;
            case 'Paleta de pintura - R$37,80':
                $ids[1] = '2';
                break;
            case 'Tinta a óleo - R$25,00':
                $ids[2] = '3';
            break;
            case 'Sketchbook - R$60,00':
                $ids[3] = '4';
            break;
            case 'Conjunto de lápis de cor profissional - R$90,00':
                $ids[4] = '5';
            break;
            case 'Conjunto de pincéis - R$25,00':
                $ids[5] = '6';
            break;
            case 'Folhas para desenho - R$20,00':
                $ids[6] = '7';
            break;
            case 'Quadro de pintura - R$22,00':
                $ids[7] = '8';
            break;
        default:
            break;
    }

print_r($ids);


?>