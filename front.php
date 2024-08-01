<?= $this->extend('template'); ?>
<?php $year = date('Y') ?>  
<?php 
  $dataListDashboard = [
    (object) [
      'pengelola' => 'BPJN Aceh',
      'provinsi' => 'Aceh',
      'totalJalan' => '1.647',
      'panjang' => '25.754',
      'totalInspeksi' => '957',
      'dataInspeksi' => (object) [
        'rusakBerat' => 100,
        'rusakRingan' => 100,
        'sedang' => 100,
        'baik' => 100,
        'sangatBaik' => 100,
      ]
    ],
    (object) [
      'pengelola' => 'BBPJN Sumatera Utara',
      'provinsi' => 'Sumatera Utara',
      'totalJalan' => '1.244',
      'panjang' => '24.585',
      'totalInspeksi' => '873',
      'dataInspeksi' => (object) [
        'rusakBerat' => 100,
        'rusakRingan' => 100,
        'sedang' => 100,
        'baik' => 100,
        'sangatBaik' => 100,
      ]
    ],
    (object) [
      'pengelola' => 'BPJN Sumatera Barat',
      'provinsi' => 'Sumatera Barat',
      'totalJalan' => '823',
      'panjang' => '18.338',
      'totalInspeksi' => '672',
      'dataInspeksi' => (object) [
        'rusakBerat' => 100,
        'rusakRingan' => 100,
        'sedang' => 100,
        'baik' => 100,
        'sangatBaik' => 100,
      ]
    ],
    (object) [
      'pengelola' => 'BPJN Riau',
      'provinsi' => 'Riau',
      'totalJalan' => '452',
      'panjang' => '17.280',
      'totalInspeksi' => '392',
      'dataInspeksi' => (object) [
        'rusakBerat' => 100,
        'rusakRingan' => 100,
        'sedang' => 100,
        'baik' => 100,
        'sangatBaik' => 100,
      ]
    ],
    (object) [
      'pengelola' => 'BPJN Jambi',
      'provinsi' => 'Jambi',
      'totalJalan' => '450',
      'panjang' => '11.331',
      'totalInspeksi' => '265',
      'dataInspeksi' => (object) [
        'rusakBerat' => 100,
        'rusakRingan' => 100,
        'sedang' => 100,
        'baik' => 100,
        'sangatBaik' => 100,
      ]
    ],
  ];
?>

<?= $this->extend('template_front'); ?>

<?= $this->section('content'); ?>




<div id="pop-up" class="card position-absolute shadow-lg d-none" style=" z-index: 1000;
  position: absolute;  top: 0;
  left: 0; width: 360px;">
  <div class="card-header py-3 px-4">
    <h6 class="mb-0"><b>Inspeksi Cara Cepat Drainase Jalan: 32719</b></h6>
  </div>
  <div class="card-body pb-3 pt-2 px-4">
    <div class="row">
      <div class="col-6 small pe-0">Provinsi</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small">22 Jawa Barat</div>
    </div>
    <div class="row">
      <div class="col-6 small pe-0">No. Ruas Jalan</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small">038</div>
    </div>
    <div class="row">
      <div class="col-6 small pe-0">Nama Ruas Jalan</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small">Cileunyi</div>
    </div>
    <div class="row">
      <div class="col-6 small pe-0">Tanggal Survey</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small">Rabu, 14 Sep 2021 12:00:00 WIB</div>
    </div>
    <div class="row">
      <div class="col-6 small pe-0">Petugas</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small"></div>
    </div>
    <div class="row">
      <div class="col-6 small pe-0">&nbsp;&nbsp; a. Petugas Inspeksi</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small">Sandi, Dani, Gagan</div>
    </div>
    <div class="row">
      <div class="col-6 small pe-0">&nbsp;&nbsp; b. Penanggung Jawab</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small">Agus Setiawan</div>
    </div>
    <hr>
    <div class="row">
      <div class="col-6 small pe-0">&nbsp;&nbsp; Indeks Kondisi Drainase</div>
      <div class="col-1 small text-end px-0">:</div>
      <div class="col-5 small">0,4 <b>(Rusak Berat)</b></div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <div class="accordion" id="accordionPemeliharaan">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button py-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dataPemeliharaan" aria-expanded="true" aria-controls="dataPemeliharaan" style="font-size: 12px !important;">
                Program Pemeliharaan
              </button>
            </h2>
            <div id="dataPemeliharaan" class="accordion-collapse collapse py-2" data-bs-parent="#accordionPemeliharaan">
              <div class="accordion-body small">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Program Pemeliharaan</th>
                      <th>Nomor Mata Anggaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1) Galian untuk selokan drainase dan saluran air</td>
                      <td>2.1.(1)</td>
                    </tr>
                    <tr>
                      <td>2) Penggantian pasangan batu dengan mortar DS</td>
                      <td>2.2.(2);2.2.(3);2.2.(4);2.2.(5);2.2.(6);2.2.(7); 2.2.(8)</td>
                    </tr>
                    <tr>
                      <td>3) Perbaikan pasangan batu dengan mortar</td>
                      <td>10.1.(3)</td>
                    </tr>
                    <tr>
                      <td>4) Penggantian gorong-gorong pipa beton tanpa tulangan Ø 20 cm dan Ø 30 cm</td>
                      <td>2.3.(1); 2.3.(2)</td>
                    </tr>
                    <tr>
                      <td>5) Penggantian gorong-gorong pipa beton bertulang Ø 40, 60, 80, 100, 120 dam 150 cm</td>
                      <td>2.3.(3);2.3.(4a);2.3.(4b);2.3.(4c);2.3.(5a); 2.3.(5b);2.3.(5c);2.3.(6a);2.3.(6b);2.3.(6c);2.3.(7);2.3.(8)</td>
                    </tr>
                    <tr>
                      <td>6) Penggantian Gorong-gorong pipa baja bergelombang</td>
                      <td>2.3.(9)</td>
                    </tr>
                    <tr>
                      <td>7) Gorong-gorong kotak beton bertulang</td>
                      <td>2.3.(10);2.3.(11);2.3.(12);2.3.(13);2.3.(14a);2.3.(14b);2.3.(15);2.3.(16);2.3.(17);2.3.(18);2.3.(19);2.3.(20)</td>
                    </tr>
                    <tr>
                      <td>8) Saluran U Pracetak Tipe DS</td>
                      <td>2.3.(21a);2.3.(21b);2.3.(22a);2.3.(22b);2.3.(22c);2.3.(22d);2.3.(23a);2.3.(23b);2.3.(23c);2.3.(23d);2.3.(23e);2.3.(24c);2.3.(24d);2.3.(25c)2.3.(25d);2.3.(27);2.3.(28);2.3.(29);2.3.(30a);2.3.(30b);2.3.(31a)2.3.(31b)</td>
                    </tr>
                    <tr>
                      <td>9) Saluran U Tipe DS</td>
                      <td>2.3.(24a);2.3.(24b);2.3.(25a);2.3.(25b);2.3.(26a);2.3.(26b)</td>
                    </tr>
                    <tr>
                      <td>10) Catchbasin tipe DC</td>
                      <td>2.3.(32a);2.3.(32b);2.3.(32c);2.3.(32d);2.3.(32e);2.3.(32f);2.3.(32g);2.3.(32h);</td>
                    </tr>
                    <tr>
                      <td>11) inlet drain tipe DI</td>
                      <td>2.3.(33a);2.3.(33b);2.3.(33c)</td>
                    </tr>
                    <tr>
                      <td>12) outlet drain tipe DO</td>
                      <td>2.3.(34a);2.3.(34b);2.3.(34c)</td>
                    </tr>
                    <tr>
                      <td>13) Bahan drainase porous atau penyaring (filter)</td>
                      <td>2.4.(1);3.5.(1);3.5.(2a);3.5.(2b);3.5.(2c);3.5.(3)</td>
                    </tr>
                    <tr>
                      <td>14) Pipa Berlubang Banyak (Perforated Pipe) untuk Pekerjaan Drainase Bawah Permukaan, Ø 4,5,6,8 inch</td>
                      <td>2.4.(2); 2.4.(3);2.4.(4);2.4.(5)</td>
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


<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
        <div class="d-sm-flex d-block align-items-center justify-content-between mb-4">
            <div class="mb-4 mb-sm-0">
              <h5 class="card-title fw-semibold"><i class="ti ti-map fs-6"></i>Peta Inspeksi</h5>
            </div>
            <?php if (isset($_SESSION['message'])) { ?>
                            <script type="text/javascript">
                            window.setTimeout(function() {
                                $(".alert").alert('close');
                            }, 3000);
                            </script>
                            <div class="alert alert-success">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                            <?php } ?>
                            <?php if (isset($_SESSION['err'])) { ?>
                            <script type="text/javascript">
                            window.setTimeout(function() {
                                $(".alert").alert('close');
                            }, 5000);
                            </script>
                            <div class="alert alert-error">
                                <strong>Warning! </strong><?php echo $_SESSION['err']; ?>
                            </div>
                            <?php } ?>
                            <div class="row">
                              <div class="col-sm-11">
                                  <div class="form-group row">
                                    
                                      <label class="control-label text-start text-md-end col-md-2" for="periode">Tahun</label>
                                      <div class="col-md-4">
                                          <input type="text" class="form-control" name="periode" id="periode" value="<?= date('Y') ?>">
                                      </div>
                                      

                                      <label class="control-label text-start text-md-end col-md-2" for="balai">Balai</label>
                                      <div class="col-md-4">
                                          <select id="balai" name="balai" class="custom-select select2">
                                              <option value="">-  -</option>
                                              <?php foreach ($list_nama_balai as $r) : ?>
                                                  <option value="<?= $r->id ?>"><?= $r->nama_balai ?></option>
                                              <?php endforeach ?>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-1 text-end">
                                  <button class="btn btn-primary ms-3" id="btn-filter"> <i class="fa fa-filter"></i> Filter</button>
                                  <!-- <button type="button" id="btn-reset" class="btn btn-warning m-s-5" title="Reset Filter"
                                      data-bs-toggle="tooltip" data-bs-placement="top"><i class="fa fa-history"></i></button> -->
                              </div>
                          </div>
                
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
              <select class="form-select d-none">
                <option value="1" selected>Semua Tipe Jalan</option>
                <option value="2">Jalan Khusus</option>
                <option value="3">Jalan Standard</option>
              </select>
            </div>
          </div>
          <hr>
          <div class="position-relative">
            <div id="map-canvas" class="w-100" style="height: 700px"></div>
            <img class="dummy-map-legend position-absolute" style="z-index:400" src="assets/front/images/map-legend.png" alt="Legenda Peta">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-none">
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table align-middle text-nowrap mb-0">
              <thead>
                <tr class="text-muted fw-bold">
                  <th rowspan="2" scope="col" class="bg-warning text-dark">Pengelola</th>
                  <th rowspan="2" scope="col" class="bg-warning text-dark">Provinsi</th>
                  <th rowspan="2" scope="col" class="bg-warning text-dark">Panjang (m)</th>
                  <th colspan="5" scope="col" class="bg-warning text-dark text-center">Total Inspeksi</th>
                </tr>
                <tr>
                  <th scope="col" class="bg-warning text-dark">Rusak Berat</th>
                  <th scope="col" class="bg-warning text-dark">Rusak Ringan</th>
                  <th scope="col" class="bg-warning text-dark">Sedang</th>
                  <th scope="col" class="bg-warning text-dark">Baik</th>
                  <th scope="col" class="bg-warning text-dark">Sangat Baik</th>
                </tr>
              </thead>
              <tbody class="border-top">
                <?php for ($i = 0; $i < count($dataListDashboard); $i++) : ?>
                <tr>
                  <td><?= $dataListDashboard[$i]->pengelola ?></td>
                  <td><?= $dataListDashboard[$i]->provinsi ?></td>
                  <td><?= $dataListDashboard[$i]->panjang ?></td>
                  <td><?= $dataListDashboard[$i]->dataInspeksi->rusakBerat ?></td>
                  <td><?= $dataListDashboard[$i]->dataInspeksi->rusakRingan ?></td>
                  <td><?= $dataListDashboard[$i]->dataInspeksi->sedang ?></td>
                  <td><?= $dataListDashboard[$i]->dataInspeksi->baik ?></td>
                  <td><?= $dataListDashboard[$i]->dataInspeksi->sangatBaik ?></td>
                </tr>
                <?php endfor; ?>
              </tbody>
              <tfoot>
                <tr class="text-dark bg-warning">
                  <th colspan="2" class="text-end">Total</th>
                  <th>97.288</th>
                  <th>500</th>
                  <th>500</th>
                  <th>500</th>
                  <th>500</th>
                  <th>500</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>

<script src="assets/front/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="script/inspeksi/inspeksi_cepat/index.js"></script>
<script src="assets/front/js/dashboard.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
  const popupMap = document.getElementById('popup-map');
  // const mapCanvas = document.getElementById('map-canvas');

  // mapCanvas.addEventListener('click', (e) => {
  //   e.stopPropagation();

  //   popupMap.style.top = `${e.clientY + window.scrollY}px`;
  //   popupMap.style.left = `${e.clientX}px`;
  //   popupMap.classList.remove('d-none');
  // })

  // popupMap.addEventListener('click', (e) => {
  //   e.stopPropagation();
  // })

  // document.body.addEventListener('click', () => {
  //   popupMap.classList.add('d-none');
  // })
  $("#periode").datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years",
    autoclose: true 
  });
</script>
<script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</script>
<?= $this->endSection('script'); ?>