<?php
function lastlogin($date)
{

	$value=$date;

	$hari=date('l',strtotime($value));
	$tanggal=date('d',strtotime($value));

	$hari_indonesia = array(
		'Monday'    => 'Senin',
		'Tuesday'   => 'Selasa',
		'Wednesday' => 'Rabu',
		'Thursday'  => 'Kamis',
		'Friday'    => 'Jumat',
		'Saturday'  => 'Sabtu',
		'Sunday'    => 'Minggu');

	$nbulan= array(
		'01' =>"januari" ,
		'02' =>"februari", 
		'03' =>"maret",
		'04' =>"april",
		'05' =>"mei",
		'06' =>"juni",
		'07' =>"juli",
		'08' =>"agustus",
		'09' =>"september",
		'10' =>"oktober",
		'11' =>"november",
		'12' =>"desember");
	$bulan=date('m',strtotime($value));
	$tahun=date('Y',strtotime($value));
	$jam=date('H:i',strtotime($value));
	return $hari_indonesia[$hari].', '.$tanggal.' '.$nbulan[$bulan].' '.$tahun.' '.$jam;

}

function getDataUser($mail)
{
	$CI =& get_instance();
	$data=$CI->db->get_where('users', ['email'=>$mail])->row();
	return $data;
}

?>