<?= $this->extend('template_front') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="assets/front/css/ezi.css">
<?= $this->endSection('style') ?>


<?= $this->section('content') ?>

<?= $this->include('layout/front/_modals_confirm') ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<?= $this->include('layout/front/_navbar_brand') ?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
			aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="login/postLogout" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a href="#" class="nav-link"><span class="fa fa-user-circle"></span>&nbsp; sulaksana34@gmail.com</a>
					<ul class="dropdown-menu">
						<li class="nav-item active"><a href="javascript:void(0)" class="nav-link"><span class="fa fa-user-o"></span> Profil</a>
						</li>
						<li class="nav-item"><a href="./" class="nav-link"><span class="fa fa-sign-out"></span> Logout</a></li>
					</ul>
				</li> -->
			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->

<section class="ftco-section bg-light section_form_asesmen">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="row no-gutters">
						<div class="col-lg-4 col-md-5 align-items-stretch d-none">
							<div class="info-wrap bg-primary w-100 p-md-5 p-4">
								<div class="row">
									<div class="col-12">
										<div class="nav flex-column nav-pills data_asesmen_pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link " id="v-pills-cycle1-tab" data-toggle="pill" href="#v-pills-cycle1" role="tab" aria-controls="v-pills-cycle1" aria-selected="true">Identitas Responden</a>
											<a class="nav-link m--t-10" id="v-pills-cycle2-tab" data-toggle="pill" href="#v-pills-cycle2" role="tab" aria-controls="v-pills-cycle2" aria-selected="false">Unit Layanan dan Informasi Jenis Layanan</a>
											<a class="nav-link m--t-10" id="v-pills-cycle3-tab" data-toggle="pill" href="#v-pills-cycle3" role="tab" aria-controls="v-pills-cycle3" aria-selected="false">Survey Persepsi Kualitas Pelayanan (SPKP)</a>
											<a class="nav-link m--t-10" id="v-pills-cycle4-tab" data-toggle="pill" href="#v-pills-cycle4" role="tab" aria-controls="v-pills-cycle4" aria-selected="false">Survey Persepsi Anti Korupsi (SPAK)</a>
											<a class="nav-link active m--t-10" id="v-pills-cycle5-tab" data-toggle="pill" href="#v-pills-cycle5" role="tab" aria-controls="v-pills-cycle5" aria-selected="false">Evaluasi Perbaikan</a>
											<a class="nav-link m--t-10" id="v-pills-cycle6-tab" data-toggle="pill" href="#v-pills-cycle6" role="tab" aria-controls="v-pills-cycle6" aria-selected="false">Selesai</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						

						<div class="col-md-12 d-flex align-items-stretch">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show <?php if($kategori == 1) echo 'active';?>" id="v-pills-cycle1" role="tabpanel" aria-labelledby="v-pills-cycle1-tab">
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-info">
													<p class="small mb-0 text-justify">Dimohon untuk menjawab setiap pertanyaan dengan benar dan jujur. Informasi yang Bapak/Ibu/Saudara berikan dijamin kerahasiaanya. Atas perhatian dan kerjasamanya diucapkan terima kasih.</p>
												</div>
											</div>
										</div>
										<form id="formBiodata" method="post" action="<?= base_url('/form_biodata') ?>">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="nama_lengkap">Nama Lengkap</label>
														<?php
														echo form_input($nama);
														?>
														<div class="invalid-feedback">
															Nama lengkap harap di isi !
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="jenis_kelamin">Jenis Kelamin</label>
														<?php
														$selectedmod = '';
														if (isset($member->jk) && trim($member->jk) != '') $selectedmod = $member->jk;
														$js = 'id="jenis_kelamin" class="form-control select2" data-placeholder="-- Pilih Jenis Kelamin --" required ';
														echo form_dropdown('jenis_kelamin', $list_jenis_kelamin, $selectedmod, $js);
														?>

														<div class="invalid-feedback">
															Harap pilih Jenis Kelamin
														</div>

														<?php if ($selectedmod == '') : ?>
														<!-- <script>
															document.getElementById("jenis_kelamin").value = null;
														</script> -->
														<?php endif; ?>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="no_handphone">No. Handphone/WhatsApp</label>
														<?php
														echo form_input($no_telp);
														?>
														<div class="invalid-feedback">
															No Telephone harap di isi !
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
														<?php
															$selectedmod = '';
															if (isset($member->pendidikan_terakhir) && trim($member->pendidikan_terakhir) != '') $selectedmod = $member->pendidikan_terakhir;
															$js = 'id="pendidikan_terakhir" class="form-control select2" data-placeholder="-- Pilih Pendidikan Terakhir --" required ';
															echo form_dropdown('pendidikan_terakhir', $list_pendidikan_terakhir, $selectedmod, $js);
															?>

														<div class="invalid-feedback">
															Harap pilih Pendidikan Terakhir
														</div>

														<?php if ($selectedmod == '') : ?>
														<!-- <script>
															document.getElementById("pendidikan_terakhir").value = null;
														</script> -->
														<?php endif; ?>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="alamat_email">Alamat Email</label>
														<?php
														echo form_input($email);
														?>
														<div class="invalid-feedback">
															Email harap di isi !
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="pekerjaan_utama">Pekerjaan Utama</label>
														<?php
															$selectedmod = '';
															if (isset($member->pekerjaan_utama) && trim($member->pekerjaan_utama) != '') $selectedmod = $member->pekerjaan_utama;
															$js = 'id="pekerjaan_utama" class="form-control select2" data-placeholder="-- Pilih Pekerjaan Utama --" required ';
															echo form_dropdown('pekerjaan_utama', $list_pekerjaan_utama, $selectedmod, $js);
														?>
														<div class="invalid-feedback">
															Harap pilih Pekerjaan Utama
														</div>

														<?php if ($selectedmod == '') : ?>
														<!-- <script>
															document.getElementById("pekerjaan_utama").value = null;
														</script> -->
														<?php endif; ?>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="umur_user">Umur</label>
														<?php
															echo form_input($umur);
														?>
														<div class="invalid-feedback">
															Umur harap di isi !
														</div>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="nama_instansi">Nama Instansi</label>
														<?php
															echo form_input($instansi);
														?>
														<div class="invalid-feedback">
															Nama Instansi harap di isi !
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" id="btn_biodata" class="btn btn-primary">Selanjutnya</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>

									<div class="tab-pane fade show <?php if($kategori == 2) echo 'active';?>" id="v-pills-cycle2" role="tabpanel" aria-labelledby="v-pills-cycle2-tab">
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-info">
													<p class="small mb-3 text-justify">Kami membutuhkan informasi Pelayanan yang Anda terima. Pelayanan dapat berupa Barang, Jasa, ataupun Administrasi.</p>
													<p class="small mb-3 text-justify">*Barang = Pelayanan yang menghasilkan berbagai bentuk/jenis barang yang digunakan untuk publik, misalnya penyediaan jaringan irigasi, drainase, jalan, jembatan, air minum, dan perumahan.</p>
													<p class="small mb-3 text-justify">*Jasa = Pelayanan yang menghasilkan berbagai bentuk jasa, misalnya penyelenggaraan sertifikasi & pelatihan, konsultasi, dan pemilihan penyedia barang dan jasa.</p>
													<p class="small mb-0 text-justify">*Administrasi = Pelayanan yang menghasilkan berbagai bentuk dokumen resmi yang dibutuhkan publik, misalnya izin penggunaan & pengusahaan sumber daya air, izin pemanfaatan & penggunaan bagian jalan, izin penghunian rumah negara, izin usaha jasa konstruksi.</p>
												</div>
											</div>
										</div>
										
										<form id="formLayanan" method="post" action="<?= base_url('/form_layanan') ?>">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="unit_kerja">Unit Kerja Pemberi Layanan</label>
														<?php
															echo form_input($unit_kerja);
														?>
														</select>
													</div>
												</div>
												<!-- <div class="col-md-12">
													<div class="form-group">
														<input type="text" name="unit_kerja_lainnya" class="form-control" id="unit_kerja_lainnya" placeholder="Ketikkan nama unit kerja"></input>
													</div>
												</div> -->
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="jenis_layanan">Jenis Pelayanan yang Anda Terima</label>
														<?php
															echo form_textarea($jenis_layanan);
														?>
														<small>*Mohon untuk dituliskan secara rinci dan jelas</small>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="persentase_tahapan_opt">Persentase Tahapan Penyelesaian Layanan</label>
														<?php
															$selectedmod = '';
															if (isset($header->id_persentase_penyelesaian) && trim($header->id_persentase_penyelesaian) != '') $selectedmod = $header->id_persentase_penyelesaian;
															$js = 'id="persentase_layanan" class="form-control select2" data-placeholder="-- Pilih Persentase Pelayanan --" required ';
															echo form_dropdown('persentase_layanan', $list_persentase_penyelesaian, $selectedmod, $js);
															?>

														<div class="invalid-feedback">
															Harap pilih Persentase Tahapan Penyelesaian Layanan
														</div>

														<?php if ($selectedmod == '') : ?>
														<!-- <script>
															document.getElementById("persentase_layanan").value = null;
														</script> -->
														<?php endif; ?>
													</div>
												</div>
												<!-- <div class="col-md-12">
													<div class="form-group">
														<input type="text" name="persentase_tahapan_layanan" class="form-control d-none" id="persentase_tahapan_layanan" placeholder="Ketikkan persentase tahapan penyelesaian layanan"></input>
													</div>
												</div> -->
											</div>

											<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" id="btn_back_layanan" class="btn btn-dark" data-toggle="pill" href="#v-pills-cycle1">Sebelumnya</button>
														<button type="button" class="btn btn-primary" id="btn_layanan">Selanjutnya</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>

									<div class="tab-pane fade show <?php if($kategori == 3) echo 'active';?>" id="v-pills-cycle3" role="tabpanel" aria-labelledby="v-pills-cycle3-tab">
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-info">
													<p class="small mb-0 text-justify">Pernyataan-pernyataan ini disampaikan untuk menilai kualitas pelayanan yang telah Bapak/Ibu/Saudara dapatkan melalui Unit Layanan di Kementerian PUPR.</p>
												</div>
											</div>
										</div>

										<div id="stepper_cycle3" class="row cycle_parent">
											<div class="col-md-12 stepper_col">
												<?php 
												$count 	= count($kuesioner_SPKP);

												for($x=1;$x<=$count;$x++){ ?>
												<?php if ($x < 2): ?>
												<span class="stepper active" data-no_pertanyaan= <?php echo $x; ?>><?= $x ?></span>
												<?php else: ?>
												<span class="stepper " data-no_pertanyaan= <?php echo $x; ?>><?= $x ?></span>
												<?php endif; ?>
												<?php } ?>
											</div>
										</div>

										<?php 
										$no 	= 1 ;
										$count 	= count($kuesioner_SPKP);

										foreach($kuesioner_SPKP as $row) { ?>
										
										<?php if ($no < 2): ?>
										<div class="kuesioner_SPKP<?php echo $row->id; ?> cycle3" data-no_pertanyaan= <?php echo $no; ?> <?php echo 'id="cycle3_step' . $no.'"' ?> >
										<?php else: ?>
										<div class="kuesioner_SPKP<?php echo $row->id; ?> cycle3" data-no_pertanyaan= <?php echo $no; ?> <?php echo 'id="cycle3_step' . $no.'"' ?> >
										<?php endif; ?>
											<p class="text-dark"><?php echo $row->pertanyaan; ?></p>
											<div class="star-rating">
												<?php
												$element 	= ".kuesioner_SPKP$row->id";
												$notes 		= ".star-notes$row->id";
												$skala 		= "#Q$row->id";
												$id_kuesioner = $row->id;
												?>

												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" id ="img_star_1" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=1>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" id ="img_star_2" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=2>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" id ="img_star_3" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=3>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" id ="img_star_4" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=4>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" id ="img_star_5" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=5>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" id ="img_star_6" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=6>
												<span class="m--l-10"><span class="star-count">6</span>/6</span>

												<input type="hidden" class="id_kuesioner" <?php echo 'id="id_Q' . $no.'"' ?> <?php echo 'name="Q' . $no.'"' ?> value="<?php echo $row->id; ?>">

												<input type="hidden" class="kuesioner" <?php echo 'id="Q' . $row->id.'"' ?> <?php echo 'name="Q' . $row->id.'"' ?> value="6">

												<div class="row mt-4 star-notes<?php echo $row->id ?> d-none">
													<div class="col-md-12">
														<div class="form-group">
															<label class="label">Catatan</label>
															<input type="text" class="form-control" <?php echo 'id="keterangan' . $row->id.'"' ?> placeholder="Ketikkan uraian catatan">
														</div>
													</div>
												</div>
											</div>

											<?php
											$no_prev 	= $no - 1;
											$no_next 	= $no + 1;
											$prev 		= "'prev'";
											$next 		= "'next'";
											$step 		= "'cycle3_step$no'";
											$step_prev 	= "'cycle3_step$no_prev'";
											$step_next 	= "'cycle3_step$no_next'";
											$status 	= "'cycle3'";
											?>
											

											<?php if ($no >= 2 AND $no < $count): ?>
											<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" class="btn btn-dark btn_back_spkp" data-toggle="pill" id="btn_back_spkp" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?>>Sebelumnya</button>
														<button type="button" class="btn btn-primary btn_next_spkp" id="btn_next_spkp" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?> >Selanjutnya</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
											<?php elseif ($no == $count): ?>
												<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" class="btn btn-dark btn_back_spkp" data-toggle="pill" 
														data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?> >Sebelumnya</button>
														<button type="button" class="btn btn-primary" id="btn_next_spkp_end" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?> data-count= <?php echo $count; ?>>Selanjutnya</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
											<?php else: ?>
											<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" class="btn btn-dark" data-toggle="pill" href="#v-pills-cycle2" id="btn_back_spkp_start" >Sebelumnya</button>
														<button type="button" id="btn_next_spkp_start" class="btn btn-primary btn_next_spkp" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?>>Selanjutnya</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
											<?php endif; ?>

										</div>
										<?php $no++ ?>
										<?php } ?>
										
										<div class="row mt-2">
											<div class="col-md-12">
												<p class="small">
													Skala nilai yang digunakan adalah skala angka 1-6. Masing-masing skala nilai menggambarkan:<br>
													1 - Sangat Tidak Setuju/Sangat Tidak Mudah<br>
													2 - Tidak Setuju/Tidak Mudah<br>
													3 - Kurang Setuju/Kurang Mudah<br>
													4 - Cukup Setuju/Cukup Mudah<br>
													5 - Setuju/ Mudah<br>
													6 - Sangat Setuju/Sangat Mudah
												</p>
											</div>
										</div>
									</div>

									<div class="tab-pane fade show <?php if($kategori == 4) echo 'active';?>" id="v-pills-cycle4" role="tabpanel" aria-labelledby="v-pills-cycle4-tab">
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-info">
													<p class="small mb-0 text-justify">Pernyataan-pernyataan ini disampaikan untuk menilai perilaku anti korupsi pada Unit Layanan ini. Pernyataan dibawah ini harap dijawab dengan sejujur-jujurnya berdasarkan persepsi dan pengalaman Bapak/Ibu/Saudara.</p>
												</div>
											</div>
										</div>

										<div id="stepper_cycle4" class="row cycle_parent">
											<div class="col-md-12 stepper_col">
												<?php 
												$count 	= count($kuesioner_SPAK);

												for($x=1;$x<=$count;$x++){ ?>
												<?php if ($x < 2): ?>
												<span class="stepper active" data-no_pertanyaan= <?php echo $x; ?>><?= $x ?></span>
												<?php else: ?>
												<span class="stepper " data-no_pertanyaan= <?php echo $x; ?>><?= $x ?></span>
												<?php endif; ?>
												<?php } ?>
											</div>
										</div>

										<?php 
										$no = 1;
										$count 	= count($kuesioner_SPAK);
										$countSpkp 	= count($kuesioner_SPKP);

										foreach($kuesioner_SPAK as $row) { ?>
										
										<?php if ($no < 2): ?>
										<div class="kuesioner_SPAK<?php echo $row->id; ?> cycle4" data-no_pertanyaan= <?php echo $no; ?> <?php echo 'id="cycle4_step' . $no.'"' ?> >
										<?php else: ?>
										<div class="kuesioner_SPAK<?php echo $row->id; ?> cycle4" data-no_pertanyaan= <?php echo $no; ?> <?php echo 'id="cycle4_step' . $no.'"' ?> >
										<?php endif; ?>
											<p class="text-dark"><?php echo $row->pertanyaan; ?></p>
											<div class="star-rating">
												<?php
												$element 	= "'.kuesioner_SPAK$row->id '";
												$notes 		= "'.star-notes$row->id'";
												$skala 		= "'#Q$row->id'";
												?>

												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=1>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=2>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=3>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=4>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=5>
												<img src="assets/front/images/ic-star-1.png" alt="Icon Star" class="star-ent" height="40px" data-id_kuesioner= <?php echo $row->id; ?> data-element= <?php echo $element; ?> data-value=6>
												<span class="m--l-10"><span class="star-count">6</span>/6</span>

												<input type="hidden" class="id_kuesioner" <?php echo 'id="id_Q' . $no.'"' ?> <?php echo 'name="Q' . $no.'"' ?> value="<?php echo $row->id; ?>">

												<input type="hidden" class="kuesioner" <?php echo 'id="Q' . $row->id.'"' ?> <?php echo 'name="Q' . $row->id.'"' ?> value="6">

												<div class="row mt-4 star-notes<?php echo $row->id ?> d-none">
													<div class="col-md-12">
														<div class="form-group">
															<label class="label">Catatan</label>
															<input type="text" class="form-control" <?php echo 'id="keterangan' . $row->id.'"' ?> placeholder="Ketikkan uraian catatan">
														</div>
													</div>
												</div>
											</div>

											<?php
											$no_prev 	= $no - 1;
											$no_next 	= $no + 1;
											$prev 		= "'prev'";
											$next 		= "'next'";
											$step 		= "'cycle4_step$no'";
											$step_prev 	= "'cycle4_step$no_prev'";
											$step_next 	= "'cycle4_step$no_next'";
											$status 	= "'cycle4'";
											?>
											<?php if ($no >= 2 AND $no < $count): ?>
											<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" class="btn btn-dark btn_back_spak" data-toggle="pill" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?>>Sebelumnya</button>
														<button type="button" class="btn btn-primary btn_next_spak" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?> >Selanjutnya</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
											<?php elseif ($no == $count): ?>
												<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" class="btn btn-dark btn_back_spak" data-toggle="pill" 
														data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?> >Sebelumnya</button>
														<button type="button" class="btn btn-primary" id="btn_next_spak_end" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?> data-count= <?php echo $count; ?>>Selanjutnya</button>
														<div class="submitting"></div>
													</div>
												</div>
											</div>
											<?php else: ?>
											<div class="row">
												<div class="col-md-12 m--t-30 text-right">
													<div class="form-group">
														<button type="button" class="btn btn-dark" data-toggle="pill" href="#v-pills-cycle3" id="btn_back_spak_start" data-count= <?php echo $countSpkp; ?>>Sebelumnya</button>
														<button type="button" id="btn_next_spak_start" class="btn btn-primary btn_next_spak" data-no_pertanyaan= <?php echo $no; ?> data-id_kuesioner= <?php echo $row->id; ?>>Selanjutnya</button>
													</div>
												</div>
											</div>
											<?php endif; ?>

										</div>
										<?php $no++ ?>
										<?php } ?>

										<div class="row mt-2">
												<div class="col-md-12">
													<p class="small">
														Skala nilai yang digunakan adalah skala angka 1-6. Masing-masing skala nilai menggambarkan:<br>
														1 - Sangat Tidak Setuju/Sangat Tidak Mudah<br>
														2 - Tidak Setuju/Tidak Mudah<br>
														3 - Kurang Setuju/Kurang Mudah<br>
														4 - Cukup Setuju/Cukup Mudah<br>
														5 - Setuju/ Mudah<br>
														6 - Sangat Setuju/Sangat Mudah
													</p>
												</div>
											</div>
									</div>

									<div class="tab-pane fade show" id="v-pills-cycle5" role="tabpanel" aria-labelledby="v-pills-cycle5-tab">
										<div class="row">
											<div class="col-md-12">
												<div class="alert alert-info">
													<p class="small mb-0 text-justify">Mohon untuk mengisikan penilaian serta saran perbaikan berdasarkan persepsi & pengalaman Bapak/Ibu/Saudara/i.</p>
												</div>
											</div>
										</div>

										<div class="row">
											<?php 
											class FilterById {
												private $id;

												function __construct($id) {
														$this->id = $id;
												}
												function test_odd($obj){ 
												
													return $obj->id_kuesioner === $this->id;
												}
											}

											foreach($kuesioner_evaluasi_pilihan as $row) { ?>
											<div class="col-md-12 mb-3">
												<label class="label" for="evaluasi_pilihan"><?= $row->pertanyaan ?></label>
												<input type="hidden" class="evaluasi_pilihan" <?php echo 'id="evaluasi_pilihan' . $row->id.'"' ?> name="evaluasi_pilihan" value="<?php echo $row->id; ?>">
											</div>
											
											<?php 
											
											$filtered = array_filter($perbaikan, array(new FilterById("$row->id"), "test_odd"));
											foreach($filtered as $p) { ?>
											<div class="col-md-4 col-6 <?= $row->id ?>" >
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek" id="aspek<?= $p->id ?>" value="<?= $p->id ?>">
													<label class="label ml-3" for="aspek<?= $p->id ?>" ><?= $p->evaluasi_perbaikan ?></label>
												</div>
											</div>
											<?php } ?>
											<?php } ?>
											
										</div>
										
										<div class="row">
											<?php 
											foreach($kuesioner_evaluasi_isian as $row) { ?>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="isian"><?= $row->pertanyaan ?></label>
													<textarea name="isian" class="form-control" id="isian<?= $row->id ?>" rows="4" placeholder="Ketikkan uraian saran perbaikan"></textarea>
													<input type="hidden" class="isian" <?php echo 'id="isian' . $row->id.'"' ?> name="isian" value="<?php echo $row->id; ?>">
												</div>
											</div>
											<?php } ?>
										</div>

										<!-- <div class="row">
											<div class="col-md-4 col-6">
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_1" id="aspek_1">
													<label class="label ml-3" for="aspek_1">Kebijakan Pelayanan (Prosedur/Alur, Tarif, Persyaratan, Waktu Penyelesaian, dll)</label>
												</div>
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_2" id="aspek_2">
													<label class="label ml-3" for="aspek_2">Profesionalisme SDM</label>
												</div>
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_3" id="aspek_3">
													<label class="label ml-3" for="aspek_3">Kualitas Sarana Prasarana</label>
												</div>
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_4" id="aspek_4">
													<label class="label ml-3" for="aspek_4">Sistem Informasi dan Pelayanan Publik</label>
												</div>
												<div class="form-group  d-flex">
													<input type="checkbox" name="aspek_9b" id="aspek_9b">
													<label class="label ml-3" for="aspek_9b">Penghilangan Praktik Percaloan</label>
												</div>
											</div>
											<div class="col-md-4 col-6">
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_5" id="aspek_5">
													<label class="label ml-3" for="aspek_5">Konsultasi dan Pengaduan</label>
												</div>
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_6" id="aspek_6">
													<label class="label ml-3" for="aspek_6">Penghilangan Praktik Pemberian Imbalan</label>
												</div>
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_7" id="aspek_7">
													<label class="label ml-3" for="aspek_7">Penghilangan Praktik Pungutan Liar</label>
												</div>
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_8" id="aspek_8">
													<label class="label ml-3" for="aspek_8">Penghilangan Praktik Pelayanan Diluar Prosedur</label>
												</div>
												<div class="form-group d-sm-none d-flex">
													<input type="checkbox" name="aspek_10b" id="aspek_10b">
													<label class="label ml-3" for="aspek_10b">Penghilangan Diskriminasi Pelayanan</label>
												</div>
											</div>
											<div class="col-md-4 d-none d-sm-block">
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_9a" id="aspek_9a">
													<label class="label ml-3" for="aspek_9a">Penghilangan Praktik Percaloan</label><br>
												</div>
												<div class="form-group d-flex">
													<input type="checkbox" name="aspek_10a" id="aspek_10a">
													<label class="label ml-3" for="aspek_10a">Penghilangan Diskriminasi Pelayanan</label>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="aspek_perbaikan" class="form-control d-none" id="aspek_perbaikan" rows="4" placeholder="Ketikkan aspek yang perlu diperbaiki"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="saran_perbaikan">Saran Perbaikan</label>
													<textarea name="saran_perbaikan" class="form-control" id="saran_perbaikan" rows="4" placeholder="Ketikkan uraian saran perbaikan"></textarea>
												</div>
											</div>
										</div> -->

										<div class="row">
											<div class="col-md-12 m--t-30 text-right">
												<div class="form-group">
													<button type="button" class="btn btn-dark" data-toggle="pill" href="#v-pills-cycle4" id="btn_back_perbaikan">Sebelumnya</button>
													<button type="button" class="btn btn-primary" id="btn_save_perbaikan">Selesai</button>
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade show <?php if($kategori == 5) echo 'active';?>" id="v-pills-cycle6" role="tabpanel" aria-labelledby="v-pills-cycle6-tab">
										<div class="row">
											<div class="col-md-12 text-center text-dark">
												<h4 class="m--t-100">Terima kasih atas partisipasinya</h4>
												<h1>😊🙏🏻</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							echo form_input($id_member);
						?>
						<input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

						<input type="hidden" id="txt_kategori" name="txt_kategori" value="<?=$kategori?>" />
						<input type="hidden" id="txt_no_pertanyaan_spkp" name="txt_no_pertanyaan_spkp" value="<?=$pertanyaan?>" />
						<input type="hidden" id="txt_no_pertanyaan_spak" name="txt_no_pertanyaan_spak" value="<?=$pertanyaan?>" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection('content') ?>

<?= $this->section('script') ?>
<script src="assets/front/js/ezi.js"></script>
<?= $this->endSection('script') ?>
