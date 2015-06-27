<?php
/**
 * Created by PhpStorm.
 * User: albar
 * Date: 6/26/15
 * Time: 6:50 PM
 */

/**
 * @creator albar
 * @function_name cekNPM
 * @param $npm
 *  Parameter fungsi ini adalah NPM mahasiswa dengan tipe data String
 *  ex. cekNPM("12.11.6396");
 * @return array
 *  Return dari fungsi ini adalah array yang berisi:
 *      array dengan index 'jurusan' berisi nama jurusan mahasiswa bertipe String
 *      array dengan index 'angkatan' berisi tahun angkatan mahasiswa ertipe String
 *  ex. cekNPM("12.11.6396")['jurusan']; output: "S1 Teknik Informatika"
 *      cekNPM("12.11.6396")['angkatan']; output: "2012"
 */
function cekNPM($npm) {
    $kode_jurusan = array(
        "01" => "D3 Teknik Informatika",
        "02" => "D3 Manajemen Informasi",
        "11" => "S1 Teknik Informatika",
        "12" => "S1 Sistem Informasi",
        "21" => "S1 Teknik Informatika Transfer",
        "22" => "S1 Sistem Informasi Transfer",
        "61" => "Bachelor Informatic Technology",
        "62" => "Bachelor Information System"
    );

    $jurusan = substr($npm, 3, 2);
    foreach ($kode_jurusan as $key => $jur) {
        if ($jurusan == $key) {
            $jurusan = $jur;
            break;
        }
    }

    return array(
        "jurusan" => $jurusan,
        "angkatan" => "20".substr($npm, 0, 2)
    );
}
