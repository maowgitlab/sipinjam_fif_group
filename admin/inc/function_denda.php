<?php
	
	function terlambat($tgl_dateline, $tgl_pengembalian ){

		$tgl_dateline_pecah = explode("-", $tgl_dateline);
		$tgl_dateline_pecah = $tgl_dateline_pecah[2]."-".$tgl_dateline_pecah[1]."-".$tgl_dateline_pecah[0];

		$tgl_bayar_pecah = explode("-", $tgl_pengembalian);
		$tgl_bayar_pecah = $tgl_bayar_pecah[2]."-".$tgl_bayar_pecah[1]."-".$tgl_bayar_pecah[0];

		$selisih = strtotime($tgl_bayar_pecah)- strtotime($tgl_dateline_pecah);

		$selisih = $selisih/86400;

		if ($selisih>=1) {
			$hasi_tgl = floor($selisih);
		}else{
			$hasi_tgl = 0 ;
		}
		return $hasi_tgl;
		
	}
	
?>