<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data dosen</title>

    <style>
        @media print {
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>pendidikan</th>
                <th>fungsional</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($dafdos as $key) : 
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $key->nip ?></td>
                    <td><?php echo $key->nama_pegawai ?></td>
                    <td><?php echo $key->tingkat_pendidikan ?></td>
                    <td><?php echo $key->nama_unit ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <script type="text/javascript">
        window.print();
    </script>
    </table>
</body>
</html>
