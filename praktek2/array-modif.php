<?php
$data = array(
    "nama" => "rifai abdul gani",
    "usia" => 30,
    "single" => true,
    0.1 => 5
);

echo "NAMA : " . $data["nama"] . "<br>";
echo "USIA : " . $data["usia"] . "<br>";
echo "STATUS SINGLE : " . $data["single"] . "<br>";
echo " data lain : " . $data[0.1];
?>