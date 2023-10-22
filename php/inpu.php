<?php
if(isset($_POST['spn'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal-lahir'];
    $jenis_kelamin = $_POST['jenis-kelamin'];
    $Pesan = $_POST['Pesan'];
?>
<b>Hasil</b>
<table border="0">
    <tr>
        <td>nama</td>
        <td>tanggal lahir</td>
        <td>jenis kelamin</td>
        <td>Pesan</td>
    </tr>
    <tr>
        <td><?php echo $nama; ?></td>
        <td><?php echo $tanggal_lahir; ?></td>
        <td><?php echo $jenis_kelamin; ?></td>
        <td><?php echo $Pesan; ?></td>
    </tr>
</table>
<?php
}
?>
