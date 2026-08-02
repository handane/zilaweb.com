<?php
require('./koneksi.php');

$hp = trim($_POST['hp']);

if (empty($hp)) {
    die("Nomor WhatsApp wajib diisi.");
}

// $stmt = $conn->prepare("INSERT INTO orders (hp, created_at) VALUES (?, NOW())");
// $stmt->bind_param("s", $hp);

// if (!$stmt->execute()) {
//     die("Gagal menyimpan data.");
// }

$token = "9m75UqfRweBMgEy6Jj6Z";
$admin = "6285821175905";

$pesan = "🛒 ORDER BARU\n\n";
$pesan .= "Nomor WA Customer : ".$hp."\n";
$pesan .= "Waktu : ".date("d-m-Y H:i:s");

$data = [
    "target"  => $admin,
    "message" => $pesan
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.fonnte.com/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => [
        "Authorization: $token"
    ]
]);

$response = curl_exec($curl);
curl_close($curl);

// =======================
// Redirect
// =======================
header("Location: sukses.php");
exit;
?>