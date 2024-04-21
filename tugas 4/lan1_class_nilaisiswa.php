<?php
class nilaisiswa
{
    public $nama;
    public $nilai;
    public $kuliah='STTNF';
    public function getHasil()
    {
        if ($this->nilai > 55) return 'Lulus';
        else return 'Tidak lulus';
    }
}

//objek
$ns1 = new nilaisiswa();
$ns1->nama = 'nazwa';
$ns1->nilai = 70;

echo $ns1->nama;
echo $ns1->nilai;
echo $ns1->kuliah;
echo $ns1->gethasil();
?>