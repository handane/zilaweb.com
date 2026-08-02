<?php
$id_web = $_GET['id_web'] ?? '';
$domain = $_POST['domain'];

$extensions = [".my.id", ".web.id", ".com", ".net", ".id", ".org", ".co.id", ".or.id", ".ac.id", ".sch.id", ".ponpes.id"];

$prices = [
    ".my.id" => "25.000",
    ".web.id" => "75.000",
    ".com" => "229.000",
    ".net" => "239.000",
    ".id" => "265.000",
    ".org" => "219.000",
    ".co.id" => "349.000",
    ".or.id" => "85.000",
    ".ac.id" => "95.000",
    ".sch.id" => "95.000",
    ".ponpes.id" => "95.000"
];

$apiKey = "dsk_aadb0e94575570bb799e18c363ae03cc47c7a49f1345729907ea76c580300125";
// $apiKey = "key_asli_ada_atas";

// ==============================
// 🔥 BULK CHECK (1x REQUEST)
// ==============================
function cekDomainBulk($domain, $extensions, $apiKey) {

    // ubah .com jadi com
    $tlds = array_map(function($ext) {
        return ltrim($ext, '.');
    }, $extensions);

    $tldsString = implode(",", $tlds);

    $url = "https://domscan.net/v1/status?name=" . $domain . "&tlds=" . $tldsString;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer " . $apiKey
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    if (!$response) return false;

    $data = json_decode($response, true);

    if (!isset($data['results'])) return false;

    $result = [];

    foreach ($data['results'] as $item) {
        $result[$item['domain']] = $item['available'] ? "inactive" : "active";
    }

    return $result;
}

// ==============================
// 🔥 JALANKAN BULK API
// ==============================
$results = cekDomainBulk($domain, $extensions, $apiKey);

// ==============================
// 🔥 LOOP HASIL (BUKAN API LAGI)
// ==============================
foreach ($extensions as $ext) {

    $fullDomain = $domain . $ext;
    $price = $prices[$ext];

    // ambil dari hasil API
    $status = $results[$fullDomain] ?? false;

    // fallback kalau API gagal
    if ($status === false) {
        $status = checkdnsrr($fullDomain, "ANY") ? "active" : "inactive";
    }

    if ($status == "inactive") {
        $encryptedPrice = base64_encode($price);
        echo "
            <div class='domain-box tersedia-box'>
                <div>
                    <span class='tersedia'>✅ $fullDomain</span><br>
                    <small class='text-success'>Tersedia</small>
                </div>

                <div class='text-end'>
                    <div class='harga'>Rp $price</div>
                    <a href='./order?domain=" . urlencode($fullDomain) . "&id_web=" . $id_web . "&price=" . urlencode($encryptedPrice) . "' class='btn btn-success btn-sm mt-1'>Pilih</a>
                </div>
            </div>
            ";

    } else {

        echo "
        <div class='domain-box tidak-box'>
            <div>
                <span class='tidak'>❌ $fullDomain</span><br>
                <small class='text-danger'>Tidak tersedia</small>
            </div>

            <div class='text-end'>
                <div class='harga text-muted'>-</div>
            </div>
        </div>
        ";
    }
}
?>