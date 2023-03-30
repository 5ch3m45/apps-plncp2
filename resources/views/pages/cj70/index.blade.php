@extends('layouts.app')

@section('title') CJ70 @endsection

@section('content')
    <div>
        <h3><i class="bi bi-file-earmark-ruled"></i> CJ70</h3>
        <nav aria-label="breadcrumb mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">CJ70</li>
            </ol>
        </nav>

        <div class="card mb-4">
            <div class="card-body">
                <h5>Filter</h5>
                <form class="row">
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Cari</label>
                        <input type="text" name="search" class="form-control" placeholder="Cari" value="">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <label class="form-label">Urutkan</label>
                        <select name="sort" class="form-control" value="">
                            <option value="name">Nama</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mb-3">
                        <div>
                            <label class="form-label">&nbsp;</label>
                        </div>
                        <button type="submit" class="btn btn-primary me-2"><i class="bi bi-search"></i> Cari</button>
                        <a href="/cj70/create">
                            <button type="button" class="btn btn-success me-2">+ Baru</button>
                        </a>
                        <button type="button" class="btn btn-success me-2" data-bs-target="#import-cj70-modal" data-bs-toggle="modal"><i class="bi bi-cloud-arrow-up-fill"></i> Import</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive mb-3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">:</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Ref Document Number</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Reservation</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Cost Element</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Period</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Posting Date</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Rem.val.cnt.cur.</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Total quantity</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Document Header Text</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Unloading Point</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Capitalized to AuC</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Name</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Vendor</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Vendor Name</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Material Description</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">Material</td>
                                <td style="font-weight: bold;background: var(--bs-table-striped-bg);">WBS Element</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>5006646395</td>
                                <td>0</td>
                                <td>6106201000</td>
                                <td>12</td>
                                <td>16/12/2022</td>
                                <td>72912393</td>
                                <td>1</td>
                                <td>0038.SPBJ/D06040000/2022</td>
                                <td>0038.SPBJ/DAN.01.02/D0604</td>
                                <td>72912393</td>
                                <td>0038.SPBJ/2022-REHAB KUBIKEL LOT1-TERM1</td>
                                <td>400026046</td>
                                <td>WASIS UNGGUL WISESA, PT.</td>
                                <td></td>
                                <td></td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925194044</td>
                                <td>16113125</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>24/10/2022</td>
                                <td>40149188</td>
                                <td>2</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>40149188</td>
                                <td>0038/2022/PK3901 INST AB20B/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CUB;N ISO;LBS MOTORIZE;24KV;630A;16KA</td>
                                <td>000000002150173</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925194044</td>
                                <td>16113125</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>24/10/2022</td>
                                <td>21385504</td>
                                <td>1</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>21385504</td>
                                <td>0038/2022/PK3901 INST AB20B/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CUB;N ISO;TP;24KV;630A;16KA</td>
                                <td>000000002150605</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925200406</td>
                                <td>16113262</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>24/10/2022</td>
                                <td>40149189</td>
                                <td>2</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>40149189</td>
                                <td>0038/2022/PK3902 INST RM13/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CUB;N ISO;LBS MOTORIZE;24KV;630A;16KA</td>
                                <td>000000002150173</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925200406</td>
                                <td>16113262</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>24/10/2022</td>
                                <td>64156513</td>
                                <td>3</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>64156513</td>
                                <td>0038/2022/PK3902 INST RM13/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CUB;N ISO;TP;24KV;630A;16KA</td>
                                <td>000000002150605</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925200406</td>
                                <td>16113262</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>24/10/2022</td>
                                <td>9480510</td>
                                <td>90</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>9480510</td>
                                <td>0038/2022/PK3902 INST RM13/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CABLE PWR;N2XSY;1X35mm2;20kV;UG</td>
                                <td>000000003110010</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925211714</td>
                                <td>16113204</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>25/10/2022</td>
                                <td>60223783</td>
                                <td>3</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>60223783</td>
                                <td>0038/2022/PK3903 INST PS51/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CUB;N ISO;LBS MOTORIZE;24KV;630A;16KA</td>
                                <td>000000002150173</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925211714</td>
                                <td>16113204</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>25/10/2022</td>
                                <td>87946166</td>
                                <td>1</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>87946166</td>
                                <td>0038/2022/PK3903 INST PS51/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CUB;N ISO;CBOG MOT MTR;24KV;630A;16KA</td>
                                <td>000000002150599</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925211714</td>
                                <td>16113204</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>25/10/2022</td>
                                <td>4740255</td>
                                <td>45</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>4740255</td>
                                <td>0038/2022/PK3903 INST PS51/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CABLE PWR;N2XSY;1X35mm2;20kV;UG</td>
                                <td>000000003110010</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925222032</td>
                                <td>16127115</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>27/10/2022</td>
                                <td>20074594</td>
                                <td>1</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>20074594</td>
                                <td>0038/2022/PK3913 INST PS41/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CUB;N ISO;LBS MOTORIZE;24KV;630A;16KA</td>
                                <td>000000002150173</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/cj70/show/1">Detail</a>
                                </td>
                                <td>4925222032</td>
                                <td>16127115</td>
                                <td>6106100200</td>
                                <td>10</td>
                                <td>27/10/2022</td>
                                <td>4108221</td>
                                <td>39</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>0038.SPBJ/D06040000/202</td>
                                <td>4108221</td>
                                <td>0038/2022/PK3913 INST PS41/PT WASIS UNGGUL/2022</td>
                                <td></td>
                                <td></td>
                                <td>CABLE PWR;N2XSY;1X35mm2;20kV;UG</td>
                                <td>000000003110010</td>
                                <td>I.5489.22.09.0001.142.11</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-modal.import-cj70/>
@endsection