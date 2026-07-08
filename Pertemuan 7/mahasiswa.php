<?php
// Array asosiatif: pasangan kunci => nilai
$mahasiswa = [
    "nama"  => "Chaerunisa Febryanti",
    "nim"   => "3337250105",
    "prodi" => "Informatika",
    "ipk"   => 3.88,
    "skill" => ["HTML", "CSS", "JavaScript", "PHP"],
];

// Akses nilai dengan key
echo $mahasiswa["nama"];   // Budi Santoso
echo $mahasiswa["ipk"];    // 3.85

// Array of arrays (daftar banyak mahasiswa)
$daftar = [
    ["nama" => "Budi",  "ipk" => 3.85],
    ["nama" => "Ani",   "ipk" => 3.72],
    ["nama" => "Citra", "ipk" => 3.91],
];

foreach ($daftar as $mhs) {
    echo "{$mhs['nama']} — IPK: {$mhs['ipk']}<br>";
}
?>
