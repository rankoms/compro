<?php

use Illuminate\Support\Facades\Route;

/**
 * Format response.
 */
function areActiveRoutes(array $routes, $output = " open")
{
    $output = session('theme') == 'dark' ? 'active-dark open' : 'active-light open';
    foreach ($routes as $route) {
        if (Route::currentRouteName() == $route) return $output;
    }
}

function tgl_indo($tanggal)
{
    $tanggal = date('Y-m-d', strtotime($tanggal));
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}


function tgl_jam_indo($tanggal)
{
    $jam = date('H:i', strtotime($tanggal));
    $tanggal = date('Y-m-d', strtotime($tanggal));
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0] . ' ' . $jam;
}

function penjelasan_singkat($x, $length)
{
    if (strlen($x) <= $length) {
        return $x;
    } else {
        $y = substr($x, 0, $length) . '...';
        return $y;
    }
}

function convert_extension($extension)
{
    $data = [
        'docx' => 'doc',
        'doc' => 'doc',
        'pdf' => 'pdf',
        'xls' => 'xls',
        'xlsx' => 'xls',
        'ppt' => 'ppt',
        'pptx' => 'ppt',
        'txt' => 'txt',
    ];

    return isset($data[$extension]) ? $data[$extension] : $extension;
}

function format_document()
{
    $format_document = [
        'pdf' => 'PDF',
        'doc' => 'Word',
        'ppt' => 'Power Point',
        'xls' => 'Excel',
    ];
    return $format_document;
}

function color_threads($angka)
{
    $hasil = fmod($angka, 3);
    switch ($hasil):
        case 0:
            $warna = 'orange';
            break;
        case 1:
            $warna = 'blue';
            break;
        case 2:
            $warna = 'green';
            break;
        default:
            $warna = 'orange';
    endswitch;
    return $warna;
}

function ambil_gambar($name_file)
{
    $name_file = explode('.', $name_file);
    $ext = array_pop($name_file);
    switch ($ext) {
        case 'docx':
            return asset(config('image_file.docx'));
            break;
        case 'doc':
            return asset(config('image_file.doc'));
        case 'pdf':
            return asset(config('image_file.pdf'));
        case 'xls':
            return asset(config('image_file.xls'));
        case 'xlsx':
            return asset(config('image_file.xlsx'));
        case 'ppt':
            return asset(config('image_file.ppt'));
        case 'pptx':
            return asset(config('image_file.pptx'));
        default:
            return asset(config('image_file.docx'));
    }
}
