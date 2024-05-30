<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
include "./libray.php";

$a = ['a', 'b', 'c', 'd', 'e'];
$b = [
    'name' => 'lin',
    'num' => '1130011',
    'math' => '90',
    'chinese' => '100',
    'english' => '99'
];

dd($a);
dd($b);

stars();
stars('矩形', 11);
stars('菱形', 11);

?>