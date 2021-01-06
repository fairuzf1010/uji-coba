@extends('layout/template-admin')

@section('title', 'Vote GS Evolve | Evolution 2021')

@section('container')

<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home" style="color: #172B4D"></i></a></li>
                            <li class="breadcrumb-item"><a href="#" style="color: #172B4D">Vote GS Evolve Sementara</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-12" style="width: 100%;">
            <div class="card" style="width: 100%;">
                <!-- <img src="/img/brand/ELECTRA.png" class="card-img-top p-2" alt="Logo Electra" style="width: 50%; margin: 0 auto;"> -->
                <div class="card-body">
                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">
                        <img src="/img/brand/EVOLVE_FULL.png" alt="">
                    </h5>

                    <div class="row">
                        <div class="col">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No </th>
                                                    <th>Nama Artis</th>
                                                    <th>Jumlah Vote Sementara</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Tiger Nixon</td>
                                                    <td>30</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Garrett Winters</td>
                                                    <td>100</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ashton Cox</td>
                                                    <td>34</td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Cedric Kelly</td>
                                                    <td>77</td>

                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Airi Satou</td>
                                                    <td>50</td>

                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Brielle Williamson</td>
                                                    <td>21</td>

                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Herrod Chandler</td>
                                                    <td>44</td>

                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Rhona Davidson</td>
                                                    <td>90</td>

                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Colleen Hurst</td>
                                                    <td>43</td>

                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Sonya Frost</td>
                                                    <td>11</td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    @endsection