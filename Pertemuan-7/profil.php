<?php
// === DATA MAHASISWA ===
$mahasiswa = [
    "nama"    => "Chaerunisa Febryanti",
    "nim"     => "3337250105",
    "prodi"   => "Informatika",
    "angkatan"=> 2025,
    "ipk"     => 3.88,
    "email"   => "chrnsfebryanti@gmail.com",
    "github"  => "https://github.com/chaerfull",
    "skill"   => ["HTML", "CSS", "JavaScript", "PHP", "Git"],
    "bio"     => "Saya adalah mahasiswa Informatika UNTIRTA yang
                  bersemangat belajar teknologi web.",
];

// === FUNGSI HELPER ===
function badgeStatus($ipk) {
    if ($ipk >= 3.75) return "Cumlaude 🌟";
    if ($ipk >= 3.00) return "Sangat Memuaskan";
    return "Memuaskan";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?= $mahasiswa['nama'] ?></title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px;
               margin: 0 auto; padding: 20px; }
        header { background: #065A82; color: white; padding: 30px;
                 border-radius: 8px; text-align: center; }
        .badge { background: #21B0A7; color: white; padding: 4px 12px;
                 border-radius: 15px; font-size: 14px; }
        section { background: #f4f8fa; padding: 20px; margin: 16px 0;
                  border-radius: 8px; }
        .skill-tag { background: #065A82; color: white; padding: 4px 10px;
                     border-radius: 12px; margin: 3px; display: inline-block; }
    </style>
</head>
<body>

<header>
    <h1><?= $mahasiswa['nama'] ?></h1>
    <p><?= $mahasiswa['prodi'] ?> • Angkatan <?= $mahasiswa['angkatan'] ?></p>
    <span class="badge"><?= badgeStatus($mahasiswa['ipk']) ?></span>
</header>

<section>
    <h2>Tentang Saya</h2>
    <p><?= $mahasiswa['bio'] ?></p>
    <p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
    <p><strong>IPK:</strong> <?= $mahasiswa['ipk'] ?></p>
    <p><strong>Email:</strong> <?= $mahasiswa['email'] ?></p>
</section>

<section>
    <h2>Skill</h2>
    <?php foreach ($mahasiswa['skill'] as $skill): ?>
        <span class="skill-tag"><?= $skill ?></span>
    <?php endforeach; ?>
</section>

<section>
    <h2>Kondisional Berdasarkan IPK</h2>
    <?php if ($mahasiswa['ipk'] >= 3.75): ?>
        <p style="color:green;"><strong>Selamat! Anda meraih predikat Cumlaude.</strong></p>
    <?php elseif ($mahasiswa['ipk'] >= 3.0): ?>
        <p>Anda lulus dengan predikat Sangat Memuaskan.</p>
    <?php else: ?>
        <p>Anda lulus dengan predikat Memuaskan.</p>
    <?php endif; ?>
</section>

</body>
</html>
