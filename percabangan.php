<?php
// Variabel input (Contoh: Menentukan jadwal praktikum)
$hari = "Senin";

echo "--- Program Jadwal Kuliah (PHP) ---\n";
echo "Hari yang dipilih: " . $hari . "\n";

switch ($hari) {
    case "Senin":
        echo "Jadwal: Algoritma dan Pemrograman (Ruang 301)";
        break;
    case "Selasa":
        echo "Jadwal: Matematika Diskrit (Ruang 102)";
        break;
    case "Rabu":
        echo "Jadwal: Praktikum Basis Data (Lab Komputer)";
        break;
    case "Kamis":
        echo "Jadwal: Bahasa Inggris (Ruang 205)";
        break;
    case "Jumat":
        echo "Jadwal: Pendidikan Agama (Masjid Kampus)";
        break;
    default:
        echo "Jadwal: Libur atau Hari tidak valid!";
        break;
}
?>