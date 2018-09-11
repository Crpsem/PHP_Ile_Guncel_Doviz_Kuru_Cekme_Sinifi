<?php

require_once("DovizKurlari.Class.php");
$DovizKurlari = new DovizKurlari();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Döviz Kuru Çekme Sınıfı</title>

        <style type="text/css">

            table {background: #eee; margin: 0 auto; margin-top: 200px}
            table tr td {border: 1px solid #aeaeae}

        </style>

    </head>
    <body>

        <table border="0" cellpadding="10" cellspacing="0" width="250">
            <tr>
                <td></td>
                <td>USD</td>
                <td>EURO</td>
            </tr>
            <tr>
                <td>ALIŞ</td>
                <td><?php echo $DovizKurlari->usd_buy; ?></td>
                <td><?php echo $DovizKurlari->eur_buy; ?></td>
            </tr>
            <tr>
                <td>SATIŞ</td>
                <td><?php echo $DovizKurlari->usd_sell; ?></td>
                <td><?php echo $DovizKurlari->eur_sell; ?></td>
            </tr>
        </table>

    </body>
</html>
