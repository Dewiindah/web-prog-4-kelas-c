<?php
$data = array(
    "web-prog" => array(
        "rifai" => 7,
        "intana" => 8,
        "wulandari" => 6
    ),
    "kalkulus" => array(
        "bintang" => 9,
        "nala" => 8,
        "karend" => 5
    )
);

echo "Nilai web-prog untuk Intana : "
    .$data["web-prog"]["intana"] . "<br>";
echo "Nilai Kalkulus untuk Karend : "
    .$data["kalkulus"]["karend"];
?>