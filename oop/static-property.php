<?php

class KelasContoh {
	public static $staticProperty = 'Ini adalah properti statis';

	public function showStaticValues(){
		echo self::$staticProperty;
	}
}

class HitungLuasBangunDatar
{
    public static function segitiga(float $alas, float $tinggi)
    {
        return $alas*$tinggi*0.5;
    }

    public static function persegi(float $sisi)
    {
        return $sisi*$sisi;
    }

    public static function persegiPanjang(float $lebar, float $panjang)
    {
        return $panjang*$lebar;
    }

    public static function lingkaran(float $radius)
    {
        return 3.14*$radius*$radius;
    }

    public static function jajarGenjang(float $alas, $tinggi)
    {
        return $alas*$tinggi;
    }
}

//memanggil property statis
echo HitungLuasBangunDatar::jajarGenjang(2,4)."\n";
echo HitungLuasBangunDatar::persegi(4)."\n";
