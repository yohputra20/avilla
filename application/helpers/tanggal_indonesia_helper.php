<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('tanggal_indonesia')) {
  function tanggal_indonesia($tanggal) {
    $ubahTanggal = gmdate($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_panjang($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal.' '.$bulan.' '.$tahun;
  }
}
if ( ! function_exists('tanggal_indonesia_lengkap')) {
  function tanggal_indonesia_lengkap($tanggal) {
    $ubahTanggal = gmdate($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = $pecahTanggal[1];
    $tahun = $pecahTanggal[0];
    $namaHari = nama_hari(date('l', mktime(0, 0, 0, $bulan, $tanggal, $tahun)));
    return $namaHari.', '.bulan_panjang($bulan).' '.$tanggal.' '.$tahun;
  }
}
if ( ! function_exists('tanggal_indonesia_medium')) {
  function tanggal_indonesia_medium($tanggal) {
    $ubahTanggal = gmdate($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_pendek($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal.' '.$bulan.' '.$tahun;
  }
}
if ( ! function_exists('tanggal_indonesia_pendek')) {
  function tanggal_indonesia_pendek($tanggal) {
    $ubahTanggal = gmdate($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_angka($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal.'/'.$bulan.'/'.$tahun;
  }
}
if ( ! function_exists('bulan_panjang')) {
  function bulan_panjang($bulan) {
    switch ($bulan) {
      case 1:
        return 'January';
        break;
      case 2:
        return 'February';
        break;
      case 3:
        return 'March';
        break;
      case 4:
        return 'April';
        break;
      case 5:
        return 'May';
        break;
      case 6:
        return 'June';
        break;
      case 7:
        return 'Jully';
        break;
      case 8:
        return 'August';
        break;
      case 9:
        return 'September';
        break;
      case 10:
        return 'October';
        break;
      case 11:
        return 'November';
        break;
      case 12:
        return 'December';
        break;
    }
  }
}
if ( ! function_exists('bulan_pendek')) {
function bulan_pendek($bulan) {
    switch ($bulan) {
      case 1:
        return 'Jan';
        break;
      case 2:
        return 'Feb';
        break;
      case 3:
        return 'Mar';
        break;
      case 4:
        return 'Apr';
        break;
      case 5:
        return 'Mei';
        break;
      case 6:
        return 'Jun';
        break;
      case 7:
        return 'Jul';
        break;
      case 8:
        return 'Agu';
        break;
      case 9:
        return 'Sep';
        break;
      case 10:
        return 'Okt';
        break;
      case 11:
        return 'Nov';
        break;
      case 12:
        return 'Des';
        break;
    }
  }  
}
if ( ! function_exists('bulan_angka')) {
  function bulan_angka($bulan) {
    switch ($bulan) {
      case 1:
        return '01';
        break;
      case 2:
        return '02';
        break;
      case 3:
        return '03';
        break;
      case 4:
        return '04';
        break;
      case 5:
        return '05';
        break;
      case 6:
        return '06';
        break;
      case 7:
        return '07';
        break;
      case 8:
        return '08';
        break;
      case 9:
        return '09';
        break;
      case 10:
        return '10';
        break;
      case 11:
        return '11';
        break;
      case 12:
        return '12';
        break;
    }
  }
}
if ( ! function_exists('nama_hari')) {
  function nama_hari($hari) {
    if ($hari == 'Sunday') {
      return 'Sunday';
    } elseif ($hari == 'Monday') {
      return 'Monday';
    } elseif ($hari == 'Tuesday') {
      return 'Tuesday';
    } elseif ($hari == 'Wednesday') {
      return 'Wednesday';
    } elseif ($hari == 'Thursday') {
      return 'Thursday';
    } elseif ($hari == 'Friday') {
      return 'Friday';
    } elseif ($hari == 'Saturday') {
      return 'Saturday';
    }
  }
}
?>