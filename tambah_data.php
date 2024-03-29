<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;

        }

        body{
            padding: 50px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h5 class="card-header">Tambah Data Motor</h5>
        <div class="card-body">
            <form method="POST" action="simpan_tambah_data.php">
                <div class="form-group">
                    <label>Plat Nomor</label>
                    <input type="text" class="form-control" name="txtPlatNomor">
                </div>
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" class="form-control" name="txtMerk">
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="txtTahun">
                </div>
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input type="text" class="form-control" name="txtHarga">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
