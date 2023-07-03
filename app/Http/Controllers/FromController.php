<?php

class MikroTikAPI
{
    // Kode yang sama seperti sebelumnya

    public function addCommand($command)
    {
        $response = $this->executeCommand($command);
        return $response;
    }
}

// Contoh penggunaan:
$api = new MikroTikAPI('103.60.233.10', 'admin', 'rahasia');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai yang dikirim melalui form
    $interfaceName = $_POST['interfaceName'];
    $interfaceType = $_POST['interfaceType'];

    // Membuat perintah untuk menambahkan interface baru
    $command = '/interface add';
    $command .= ' name=' . $interfaceName;
    $command .= ' type=' . $interfaceType;

    // Mengirim perintah ke API MikroTik
    $response = $api->addCommand($command);

    // Menampilkan pesan berhasil atau gagal
    if (isset($response[0]['!trap'])) {
        echo "Gagal menambahkan interface: " . $response[0]['!trap'];
    } else {
        echo "Interface berhasil ditambahkan!";
    }
}
?>

<!-- Contoh form untuk input -->
<!-- <form method="POST" action="">
    <label for="interfaceName">Nama Interface:</label>
    <input type="text" id="interfaceName" name="interfaceName" required><br><br>

    <label for="interfaceType">Tipe Interface:</label>
    <input type="text" id="interfaceType" name="interfaceType" required><br><br>

    <input type="submit" value="Tambah Interface">
</form> -->