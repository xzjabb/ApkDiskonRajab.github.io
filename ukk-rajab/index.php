<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body{
            color: #EFE9D5;
            background-color: #EFE9D5;
        }
        h2{
            color: black;
        }
        #form{
            background-color: #27445D;
        }
        p{
            color: black;
        }
        #hitung{
            background-color: #3674B5;
            color: #EFE9D5;
        }
        #hitung:hover{
            background-color: white;
            color: black;
        }
        #hapus{
            background-color: #C96868;
            color: #EFE9D5;
        }
        #hapus:hover{
            background-color: black;
            color: white;
        }
    </style>

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <marquee behavior="up" direction="scroll"><h2>Selamat Datang. Hello Guys</h2></marquee>
                <form method="post" class="border rounded p-2 mt-2" id="form">
                    <h5 class="text-center">Aplikasi Perhitungan Diskon</h5>
                    <label class="form-label">Harga (Rp.)</label>
                    <input type="number" class="form-control" name="harga" autocomplete="off" step="1" placeholder="Masukan Harga Barang.">
                    <label class="form-label">Diskon (%)</label>
                    <input type="number" class="form-control" name="diskon" autocomplete="off" step="1" placeholder="Masukan Harga diskon.">
                    <button type="submit" id="hitung" name="hitung" class="btn w-100 mt-2">HITUNG</button>
                

                <?php

                if(isset($_POST['hitung'])){
                    $harga = $_POST['harga'];
                    $diskon = $_POST['diskon'];

                    if($harga < 0){
                        echo "<script>alert('Harga tidak boleh Minus')</script>";
                    }elseif($diskon < 0 || $diskon > 100){
                        echo "<script>alert('Diskon hanya 1-100')</script>";
                    }else{
                        $nilai_diskon = $harga * ($diskon/100);
                        $total_harga = $harga - $nilai_diskon; ?>

                        <div class="border rounded bg-light p-2 mt-2" name="huspa">
                            <p>Harga : Rp. <?php echo number_format($harga,2,',','.')?></p>
                            <p>Diskon Harga : Rp. <?php echo number_format($nilai_diskon,2,',','.')?></p>
                            <p>Total Harga Setelah Diskon : Rp. <?php echo number_format($total_harga,2,',','.')?></p>
                        </div>
                        <button id="hapus" class="btn w-100 mt-2" onclick="hapus()">Hapus</button>

                  <?php  }
                }?>
               
            </div>
        </div>
    </div>
    </form>
    <p class="text-center" >&copy; UKK RPL 2025 || Rajab Supriyadin 22231318</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        function hapus(){
            var huspa = document.getElementsByName("huspa");
            huspa.remove();
        }
    </script>
</body>
</html>