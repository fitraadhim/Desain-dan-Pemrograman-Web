<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang l;ulus: " . implode(', ', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
echo "<br><br><br>";
$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar Karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', 
$karyawanPengalamanLimaTahun); 

echo "<br><br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br><br><br>";

$daftarNilaiMatematika = [
    ['Alice',85],
    ['Bob',92,],
    ['Charlie',78],
    ['David',64],
    ['Eva',90]
];

$total = 0;
$count = count($daftarNilaiMatematika);
foreach ($daftarNilaiMatematika as $item) {
    $total += $item[1];
}
$rataRata = $count ? $total / $count : 0;

$siswaDiAtasRata = [];
foreach ($daftarNilaiMatematika as $item) {
    if ($item[1] > $rataRata) {
        $siswaDiAtasRata[] = $item[0] . " (" . $item[1] . ")";
    }
}

echo "Rata-rata kelas: " . number_format($rataRata, 2) . "<br>";
if (!empty($siswaDiAtasRata)) {
    echo "Siswa yang nilainya di atas rata-rata: " . implode(', ', $siswaDiAtasRata);
} else {
    echo "Tidak ada siswa dengan nilai di atas rata-rata.";
}

?>