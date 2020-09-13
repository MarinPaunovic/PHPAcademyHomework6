<?php

class biljka{
    private $podaci=[];

    public function __call($key_koji_odabiremo, $argument){
if(method_exists($this, $key_koji_odabiremo)){
    $this->$key_koji_odabiremo(...$argument); /// ...KOLIKO GOD ARGUMENATA DODALI.
}
}
public function getter($key_koji_odabiremo){
        return $this->podaci[$key_koji_odabiremo];
}
private function setter($key_koji_odabiremo, $vrijednost){
        $this->podaci[$key_koji_odabiremo]=$vrijednost;
}
}
$saguaro = new biljka;
var_dump($saguaro);
echo "<br>";
$saguaro->setter('Boja','Zelena');
$saguaro->setter('Visina', '190cm');
$saguaro->setter('Bodlje',  2400);
var_dump($saguaro);
echo "<br>";
echo "boja kaktusa saguaro je " . $saguaro->getter('Boja');
echo "<br>";
echo "visina kaktusa saguaro je " . $saguaro->getter('Visina');
echo "<br>";
echo "kaktus saguaro ima " . $saguaro->getter('Bodlje') . " bodlji";


