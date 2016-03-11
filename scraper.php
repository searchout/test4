<?php
// simple_html_dom.phpをインクルード
include_once('simple_html_dom.php');

// スクレイピングしたいURLを指定
$html = file_get_html( "http://hotel.travel.rakuten.co.jp/hotelinfo/plan/5255?f_sort=hotel&f_dai=japan&f_teikei=quick&f_page=1&f_hyoji=100&f_image=1&f_flg=PLAN" );

// 引っ張るものを指定してa.entry-link要素を$elementに代入
foreach($html->find('a[class="htlPlnRmTypPrc roomPrice"]') as $element)

// $element(a要素)のhrefの後ろにbrタグを入れて吐き出す
echo $element->href . '<br>';
?>
