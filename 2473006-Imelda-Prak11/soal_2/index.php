<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>2473006-Imelda</title>
    <script src="jquery-4.0.0.min.js"></script>
    <style>
        body { 
            font-family: 'Times New Roman', Times, serif; 
            padding: 20px; 
        }
        .input-box { 
            border: 1px solid #000; 
            padding: 10px; 
            width: 400px; 
            margin-bottom: 20px; 
        }
        .input-box input { 
            width: 95%; 
            margin-bottom: 5px; 
        }
 
        .portal-container { 
            border: 1px solid #999; 
            width: 700px; 
            display: none; 
        }
        
        .header-portal { 
            text-align: center; 
            border-bottom: 1px solid #999; 
            padding: 15px; 
        } 
    </style>

    <style>
        .override-body { 
            font-family: Arial, sans-serif; 
            margin: 0;
            background-color: #f9f9f9; 
            padding-top: 50px;
            color: #333; 
        }
        .container { 
            width: 550px; 
            margin: 0 auto; 
            text-align: center; 
            background: white;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        h2 { 
            margin-top: 0;
            margin-bottom: 20px; 
            font-weight: bold; 
            font-size: 22px;
        }
        .btn-tambah { 
            background-color: #5cb85c; 
            color: white; 
            padding: 6px 14px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 14px; 
            float: left; 
            margin-bottom: 15px; 
            text-decoration: none; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            background-color: #fff; 
            margin-top: 10px;
        }
        th { 
            background-color: #f5f5f5; 
            color: #333; 
            font-weight: bold; 
            padding: 12px 10px; /* Header tetep longgar biar bagus */
            border-bottom: 2px solid #ddd; 
            font-size: 14px; 
            text-align: left;
        }
        td { 
            padding: 4px 10px; /* Diubah jadi 4px biar barisnya menciut mepet ke tombol */
            border-bottom: 1px solid #eee;
            font-size: 14px; 
            text-align: left;
            color: #333;
        }
        th:nth-child(1), td:nth-child(1),
        th:nth-child(3), td:nth-child(3) {
            text-align: left;
            padding-left: 10px;
        }
        
        .btn-edit { 
            background-color: #2c91ea; 
            color: white; 
            border: none; 
            padding: 8px 14px; 
            border-radius: 4px; 
            cursor: pointer; 
            text-decoration: none; 
            margin-right: 5px; 
            display: inline-block;
            font-size: 14px;
        }
        .btn-hapus { 
            background-color: #d9534f; 
            color: white; 
            border: none; 
            padding: 8px 14px; 
            border-radius: 4px; 
            cursor: pointer; 
            text-decoration: none; 
            display: inline-block;
            font-size: 14px;
        }
    </style>
</head>
<body class="override-body">

<div class="container">
    <h2>Data Siswa</h2>
    
    <a href="tambah.php" class="btn-tambah">Tambah Data</a>
    
    <table>
        <thead>
            <tr>
                <th width="8%">ID</th>
                <th width="42%">Nama</th>
                <th width="15%">Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = $koneksi->query("SELECT * FROM siswa");
            if ($query && $query->num_rows > 0) {
                while ($data = $query->fetch_array()) {
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".htmlspecialchars($data['nama'])."</td>";
                    echo "<td>".htmlspecialchars($data['kelas'])."</td>";
                    echo "<td>
                            <a href='edit.php?id=".$data['id']."' class='btn-edit'>Edit</a> 
                            <a href='hapus.php?id=".$data['id']."' class='btn-hapus' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align:center;'>Belum ada data siswa.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>