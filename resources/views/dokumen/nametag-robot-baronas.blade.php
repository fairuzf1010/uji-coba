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
    <title>Generate Kartu Peserta</title>

    <style>
        /*
        1.atas
        2.
        3.
        4.kanan
    */


        @page {
            margin: 0 0 0 0;
            size: 370pt 370pt;
        }

        .page2,
        .page3,
        .page4 {
            page-break-before: always;
        }
    </style>
</head>

<body>


    <div class="page1">
        <img class="" src="img/dokumen/nametag_robot.jpeg" alt="" style="width: 510px; top: 0; left: 0;position: absolute; z-index: -99">

        <!-- <p style="position: absolute; z-index: 99; top: 445px; left: 100px; font-size: 23px; font-family: poppinsbold, sans-serif">2. Nama Anggota</p> -->
        @if($kategori =='SD')
        <p style="position: absolute; z-index: 99; top: 365px; left: 218px; font-size: 23px; font-family: poppinsbold, sans-serif">SD_00{{$id}}_<?php Str::substr($nomor_hp, 9) ?></p>


        @elseif($kategori =='SMP')
        <p style="position: absolute; z-index: 99; top: 365px; left: 208px; font-size: 23px; font-family: poppinsbold, sans-serif">SMP_00{{$id}}_<?php Str::substr($nomor_hp, 9) ?></p>


        @elseif($kategori =='SMA')
        <p style="position: absolute; z-index: 99; top: 365px; left: 208px; font-size: 23px; font-family: poppinsbold, sans-serif">SMA_00{{$id}}_<?php Str::substr($nomor_hp, 9) ?></p>


        @elseif($kategori =='UMUM')
        <p style="position: absolute; z-index: 99; top: 365px; left: 202px; font-size: 23px; font-family: poppinsbold, sans-serif">Umum_00{{$id}}_<?php Str::substr($nomor_hp, 9) ?></p>
        @endif

        <p style="color: white; position: absolute; z-index: 99; top: 640px; left: 56px; font-size: 13px; font-family: poppinsbold, sans-serif">Nama Sponsor</p>
        <p style="color: white; position: absolute; z-index: 99; top: 640px; left: 260px; font-size: 13px; font-family: poppinsbold, sans-serif">Nama Media Partner</p>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
