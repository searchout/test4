<?php

include_once('simple_html_dom.php');

$html = file_get_html( "http://hotel.travel.rakuten.co.jp/hotelinfo/plan/5255?f_sort=hotel&f_dai=japan&f_teikei=quick&f_page=1&f_hyoji=100&f_image=1&f_flg=PLAN" );

foreach($html->find("aclass="htlPlnRmTypPrc roomPrice"]") as $element)

// $element(a要素)のhrefの後ろにbrタグを入れて吐き出す
echo $element->href . "<br>";
?>
