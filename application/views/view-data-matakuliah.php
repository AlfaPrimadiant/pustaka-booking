<html>
<head>
    <title>Tampil Data MataKuliah</title>
</head>

<body>
    <center>
        <form action="<?=   base_url("index.php/matakuliah/cetak");   ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data MataKuliah
                </th>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>

            <tr>
                <th>Nama MTK</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>

            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                <?= $sks; ?>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                    </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>