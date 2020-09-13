<?php
class kaktus
{
    private $bodlje;
    private $boja;

function __get($key_koji_odabiremo){
return $this->$key_koji_odabiremo;
}

function __set($properti_koji_odabiremo, $sta_stavljamo_u_key){
     $this->$properti_koji_odabiremo = $sta_stavljamo_u_key;

}
}
$k= new kaktus;
$k->bodlje = 15;
$k->boja = 'zelena';
echo "broj bodlji kaktuse je :" . $k->bodlje;
echo "<br>boja kaktusa je : " . $k->boja;


