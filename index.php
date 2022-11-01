<?php 
$tarih_ilk      = strtotime(date("d.m.Y"));
$tarih_son      = strtotime('31.12.'.date('Y'));
 
$tarih_fark     = $tarih_son - $tarih_ilk;
$tarih_fark     = floor($tarih_fark / (24*60*60)); 

for ($i=0; $i<=$tarih_fark; $i++)
{
    $tarih = $tarih_ilk + ($i*24*60*60); 
    $gun   = date('w', $tarih);
    if ($gun != 0 && $gun != 6)
    {
        // 0 pazar
        // 1 pazartesi
        // 2 salı
        // 3 çarşamba
        // 4 perşembe
        // 5 cuma
        // 6 cumartesi
        echo date('Y-m-d', $tarih),'<br />';
    }
}
?>