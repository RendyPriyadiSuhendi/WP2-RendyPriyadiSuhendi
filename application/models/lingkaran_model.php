<?php
class lingkaran_model extends CI_Model
{

    // mendefinisikan konstanta untuk nilai PI
    const PI = 3.14;

    // arribut model
    private $jarijari;

    // metode mentukan nilai $jarijari
    function set_jarijari($r)
    {
        $this->jarijari = $r;
    }

    public function get_jarijari()
    {
        return $this->jarijari;
    }

    // metode untuk menghitung luas lingkaran

    public function hitung_luas()
    {
        return self::PI * $this->jarijari * $this->jarijari;
    }

    // metode menghitung lingkarann
    public function hitung_keliling()
    {
        return 2 * self::PI * $this->jarijari;
    }
}
