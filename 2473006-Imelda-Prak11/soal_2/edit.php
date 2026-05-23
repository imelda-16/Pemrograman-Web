<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM siswa WHERE id='$id'");
$data = $query->fetch_array();
?>
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
            background-color: #f9f9f9; 
            padding-top: 50px; 
        }
        .card { 
            width: 450px; 
            margin: 0 auto; 
            background: white; 
            padding: 25px; 
            border-radius: 8px; 
            border: 1px solid #e0e0e0; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
        }
        h3 { 
            text-align: center; 
            margin-top: 0; 
            margin-bottom: 20px; 
            color: #333; 
        }
        label { 
            display: block; 
            margin-bottom: 8px; 
            font-size: 14px; 
            color: #666; 
            text-align: left; 
        }
        input[type="text"] { 
            width: 100%; 
            padding: 8px; 
            margin-bottom: 20px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            box-sizing: border-box; 
        }
        .btn-update { 
            background-color: #5cb85c; 
            color: white; 
            padding: 8px 16px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            width: 20%; 
            font-size: 14px; 
            margin-bottom: 10px; 
        }
        .btn-kembali { 
            background-color: #0275d8; /* Diubah jadi biru sesuai gambar soal */
            color: white; 
            padding: 8px 16px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            width: 20%; 
            font-size: 14px; 
            text-align: center; 
            display: block; 
            text-decoration: none; 
            box-sizing: border-box; 
        }
    </style>
</head>
<body class="override-body">

<div class="card">
    <h3>Edit Data Siswa</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
        
        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?php echo htmlspecialchars($data['kelas']); ?>" required>
        
        <button type="submit" class="btn-update">Update</button>
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>

</body>
</html>