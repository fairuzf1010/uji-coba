<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- font poppins  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Generate Kuitansi Baronas</title>


</head>

<body>









    @if($kategori == 'SD')
    <?php $x = 1; ?>
    @endif

    @if($kategori == 'SMP')
    <?php $x = 2; ?>
    @endif

    @if($kategori == 'SMA')
    <?php $x = 3; ?>
    @endif


    @if($kategori == 'UMUM')
    <?php $x = 4; ?>
    @endif


    <img class="" src="img/dokumen/kwitansi-baronas.jpeg" alt="" style="width: 530px; margin-top: 13px; margin-left: 90px; position: relative; z-index: -99">


    <p style="position: absolute; z-index: 100; top: 102px; left: 227px; font-size: 16px; font-family: poppinsbold, sans-serif">0</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 250px; font-size: 16px; font-family: poppinsbold, sans-serif">0</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 295px; font-size: 16px; font-family: poppinsbold, sans-serif">1</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 318px; font-size: 16px; font-family: poppinsbold, sans-serif">0</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 340px; font-size: 16px; font-family: poppinsbold, sans-serif">0</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 388px; font-size: 16px; font-family: poppinsbold, sans-serif">0</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 412px; font-size: 16px; font-family: poppinsbold, sans-serif">{{$x}}</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 433px; font-size: 16px; font-family: poppinsbold, sans-serif">0</p>
    <p style="position: absolute; z-index: 100; top: 102px; left: 478px; font-size: 16px; font-family: poppinsbold, sans-serif">{{$id}}</p>


    <p style="position: absolute; z-index: 99; top: 152px; left: 275px; font-size: 12px; font-family: poppinsbold, sans-serif">{{$kategori}}</p>
    <p style="position: absolute; z-index: 99; top: 182px; left: 275px; font-size: 12px; font-family: poppinsbold, sans-serif">{{$nama_tim}}</p>
    <p style="position: absolute; z-index: 99; top: 210px; left: 275px; font-size: 12px; font-family: poppinsbold, sans-serif">{{$nama_ketua}}</p>
    <p style="position: absolute; z-index: 99; top: 237px; left: 275px; font-size: 12px; font-family: poppinsbold, sans-serif">{{$nama_anggota}}</p>
    <p style="position: absolute; z-index: 99; top: 265px; left: 275px; font-size: 12px; font-family: poppinsbold, sans-serif">{{$biaya}}</p>
    <p style="position: absolute; z-index: 99; top: 292px; left: 275px; font-size: 12px; font-family: poppinsbold, sans-serif">Register Baronas</p>

    <p style="position: absolute; z-index: 99; top: 45px; left: 135px; font-size: 14px; font-family: poppinsbold, sans-serif">085745488051 (Andhika Arya)</p>










    <!-- </div> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

</body>

</html>
