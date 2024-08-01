// $(document).ready(function () {
// $("#btn-reset").click(function () {
//     $("#filter_unit_kerja").val("").change();

//     $("#btn-tampilkan").click();
// });
// });

$(document).ready(function () {

  $("#periode").datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years",
    autoclose: true 
  });
  $(document).ready(function() {
      $('.select2').select2();
  });


  grafik();
  function grafik() {
    const periode = $("#periode").val();
    var csrfName = $(".txt_csrfname").attr("name"); // CSRF Token name
    var csrfHash = $(".txt_csrfname").val(); // CSRF hash

    $.ajax({
      url: window.location.origin + "/adminpanel/dashboard/jumlahTransaksi",
      type: "post",
      data: {
        periode: periode,
        [csrfName]: csrfHash,
      },

      success: function (response) {
        var respons = JSON.parse(JSON.stringify(response));

        document.getElementById("jumlah_inspeksi").innerHTML =
          respons[0].jumlah_inspeksi;
        document.getElementById("belum_verifikasi").innerHTML =
          respons[0].belum_verifikasi;
        document.getElementById("sudah_verifikasi").innerHTML =
          respons[0].sudah_verifikasi;
      },
      beforeSend: function () {
        document.getElementById("jumlah_inspeksi").innerHTML =
          "<img class='logo' width='24%' src ='assets/images/loader.svg' />";
        document.getElementById("belum_verifikasi").innerHTML =
          "<img class='logo' width='24%' src ='assets/images/loader.svg' />";
        document.getElementById("sudah_verifikasi").innerHTML =
          "<img class='logo' width='24%' src ='assets/images/loader.svg' />";
      },
    });
  }

  let dtList = new Tabulator("#dt-list", {
    columns: [
      {
        title: "Pengelola",
        field: "pengelola",
        formatter: "html",
        headerSort: false,
        width: "20%",
      },

      {
        title: "Provinsi",
        field: "provinsi",
        sorter: "string",
        headerSort: false,
        formatter: "html",
        width: "20%",
      },
      {
        field: "Total",
        headerSort: false,
        width: "7%",
        bottomCalc: function () {
          var stringTotal = "Total";
          return stringTotal;
        },
      },
      {
        title: "Total Jalan",
        field: "total_jalan",
        sorter: "string",
        headerSort: false,
        formatter: "html",
        bottomCalc: "sum",
        formatter: "money",
        formatterParams: {
          thousand: ".",
          precision: 0,
        },
        bottomCalcParams: { precision: 0 },
        bottomCalcFormatter: "money",
        bottomCalcFormatterParams: {
          thousand: ".",
          precision: 0,
        },
        width: "10%",
      },
      {
        title: "Panjang(m)",
        field: "panjang",
        sorter: "string",
        headerSort: false,
        formatter: "money",
        formatterParams: {
          thousand: ".",
          precision: 0,
        },
        bottomCalc: "sum",
        bottomCalcParams: { precision: 0 },
        bottomCalcFormatter: "money",
        bottomCalcFormatterParams: {
          thousand: ".",
          precision: 0,
        },
        width: "10%",
      },
      {
        title: "Total Belum Verifikasi",
        field: "total_belum_verifikasi",
        sorter: "string",
        headerSort: false,
        formatter: "html",
        bottomCalc: "sum",
        formatter: "money",
        formatterParams: {
          thousand: ".",
          precision: 0,
        },
        bottomCalcParams: { precision: 0 },
        bottomCalcFormatter: "money",
        bottomCalcFormatterParams: {
          thousand: ".",
          precision: 0,
        },
        width: "17%",
      },
      {
        title: "Total Inspeksi",
        field: "total_inspeksi",
        sorter: "string",
        headerSort: false,
        formatter: "html",
        bottomCalc: "sum",
        formatter: "money",
        formatterParams: {
          thousand: ".",
          precision: 0,
        },
        bottomCalcParams: { precision: 0 },
        bottomCalcFormatter: "money",
        bottomCalcFormatterParams: {
          thousand: ".",
          precision: 0,
        },
        width: "17%",
      },
    ],
    ajaxURL: window.location.origin + "/adminpanel/dashboard/rekapPengelola",
    ajaxConfig: "POST",

    ajaxRequesting: function (url, params) {
      // CSRF Hash
      var csrfHash = $(".txt_csrfname").val(); // CSRF hash
      params.csrf_ezi_name = csrfHash;

      var periode = $("#periode").val();
      params.periode = periode;
    },
    progressiveLoad: "scroll",
    paginationSize: 20,
     placeholder: "Data tidak tersedia",
  });

  dtList.on("dataProcessed", () => {
    confirmDelete();
    confirmActive();
  });

  let searchThread = null;
  let elSearch = $("#tb-search");
  if (elSearch != null) {
    elSearch.change(function (e) {
      if ($(this).val().length < 3 && e.keyCode > 13) {
        return;
      }
      clearTimeout(searchThread);
      searchThread = setTimeout(function () {
        dtList.setFilter("", "like", elSearch.val());
      }, 600);
    });
  }

 
  $("#btn-filter").click(function () {
    grafik();
    dtList.setData();
    dtList.redraw(true);
  });
  
});
$(document).ready(function () {
  $('.date-own').datepicker({
      minViewMode: 2, // Hanya menampilkan tahun
      format: 'yyyy', // Format tahun
      autoclose: true // Menutup datepicker setelah memilih
  });

  // Menyembunyikan kalender
  $('.ui-datepicker-calendar').hide();
});



// $("#btn-reset").click(function(){
//     const role_id = document.getElementById("txt_role_id").value;

//     if (role_id == 2){
//         document.getElementById("periode").value = new Date().getFullYear();
//         grafik();
//     } else{
//         document.getElementById("unit_kerja").selectedIndex = "0";
//         document.getElementById("periode").value = new Date().getFullYear();
//         grafik();
//     }

// });

// var ctx_status_survei = document.getElementById('pie_Kategori_status_survei').getContext('2d');
// var chart_status_survei = new Chart(ctx_status_survei, {
//     type: "pie",
//     data: {
//         labels: ['Belum Melakukan', 'Belum Selesai', 'Sudah Selesai'],
//         datasets: [{
//             data: [],
//             backgroundColor: [
//                 'rgb(255, 99, 132)',
//                 'rgb(54, 162, 235)',
//                 'rgb(255, 205, 86)'
//             ],
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori Status Survei",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// var ctx = document.getElementById('pie_Kategori_umur').getContext('2d');
// var chart_umur = new Chart(ctx, {
//     type: "pie",
//     data: {
//         labels: ['< 25 thn', '25 - 40 thn', '41 - 50 thn', '51 - 60 thn'],
//         datasets: [{
//             data: [],
//             backgroundColor: [
//                 '#198754',
//                 'rgb(255, 99, 132)',
//                 'rgb(54, 162, 235)',
//                 'rgb(255, 205, 86)'
//             ],
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori Umur",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// // chart_umur.data.labels = ['< 25 thn', '25 - 40 thn', '41 - 50 thn', '51 - 60 thn'];
// // chart_umur.data.datasets[0].data = [1, 2, 3, 8];
// // chart_umur.update();

// var ctx_jk = document.getElementById('pie_Kategori_jk').getContext('2d');
// var chart_jk = new Chart(ctx_jk, {
//     type: "pie",
//     data: {
//         labels: ['Laki - laki', 'Perempuan'],
//         datasets: [{
//             data: [],
//             backgroundColor: [
//                 'rgb(54, 162, 235)',
//                 'rgb(255, 205, 86)'
//             ],
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori Jenis Kelamin",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// var ctx_pendidikan = document.getElementById('pie_Kategori_pendidikan').getContext('2d');
// var chart_pendidikan = new Chart(ctx_pendidikan, {
//     type: "pie",
//     data: {
//         labels: ['SD', 'SMP', 'SMA', 'D1/D2/D3', 'D4/S1', 'S2', 'S3'],
//         datasets: [{
//             data: [],
//             backgroundColor: [
//                 'rgb(54, 100, 235)',
//                 'rgb(132, 77, 195)',
//                 'rgb(233, 88, 235)',
//                 'rgb(72, 162, 285)',
//                 'rgb(255, 0, 0)',
//                 'rgb(22, 62, 25)',
//                 'rgb(255, 205, 86)'
//             ],
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori Jenis Pendidikan",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// var ctx_penyelesaian = document.getElementById('pie_Kategori_persentase_tahapan').getContext('2d');
// var chart_penyelesaian = new Chart(ctx_penyelesaian, {
//     type: "pie",
//     data: {
//         labels: ['100%', '90% - 99%', '80% - 89%', '70% - 79%', '60% - 69%', '50% - 59%', '< 50%'],
//         datasets: [{
//             data: [],
//             backgroundColor: [
//                 'rgb(54, 100, 235)',
//                 'rgb(132, 77, 195)',
//                 'rgb(233, 88, 235)',
//                 'rgb(72, 162, 285)',
//                 'rgb(22, 62, 25)',
//                 'rgb(255, 205, 86)',
//                 'rgb(255, 0, 0)'
//             ],
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori Persentase Tahapan Penyelesaian Layanan ",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// var ctx_pekerjaan = document.getElementById('pie_Kategori_pekerjaan_utama').getContext('2d');
// var chart_pekerjaan = new Chart(ctx_pekerjaan, {
//     type: "pie",
//     data: {
//         labels: ['Pelajar/Mahasiswa', 'Peneliti/Dosen', 'PNS/TNI/Polri', 'Pegawai BUMN/BUMD', 'Pegawai Swasta',
//             'Wirausaha', 'Lainnya'],
//         datasets: [{
//             data: [],
//             backgroundColor: [
//                 'rgb(54, 100, 235)',
//                 'rgb(132, 77, 195)',
//                 'rgb(233, 88, 235)',
//                 'rgb(72, 162, 285)',
//                 'rgb(22, 62, 25)',
//                 '#198754',
//                 'rgb(255, 205, 86)'
//             ],
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori Jenis Pekerjaan Utama",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// var ctx_unit_kerja = document.getElementById('bar_kategori_unit_kerja').getContext('2d');
// var chart_unit_kerja = new Chart(ctx_unit_kerja, {
//     type: "bar",
//     data: {
//         labels: ['Sekretariat Jenderal', 'Inspektorat Jenderal', 'Ditjen Sumber Daya Air', 'Ditjen Binamarga',
//             'Ditjen Cipta Karya', 'Ditjen Perumahan', 'Ditjen Bina Konstruksi',
//             'Ditjen Pembiayaan Infrastruktur Pekerjaan Umum dan Perumahan',
//             'Badan Pengembangan Infrastruktur Wilayah', 'Badan Pengembangan Sumber Daya Manusia',
//             'Badan Pengembangan Infrastruktur Wilayah', 'Badan Pengembangan Sumber Daya Manusia',
//             'Badan Pengembangan Infrastruktur Wilayah', 'Badan Pengembangan Sumber Daya Manusia',
//             'Badan Pengatur Jalan Tol  '],
//         datasets: [{
//             label: 'Counts',
//             data: [],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 159, 64, 0.2)',
//                 'rgba(255, 205, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgb(54, 100, 235)',
//                 'rgb(132, 77, 195)',
//                 'rgb(233, 88, 235)',
//                 'rgb(72, 162, 285)',
//                 'rgba(201, 203, 207, 0.2)'
//             ],
//             borderColor: [
//                 'rgb(255, 99, 132)',
//                 'rgb(255, 159, 64)',
//                 'rgb(255, 205, 86)',
//                 'rgb(75, 192, 192)',
//                 'rgb(54, 162, 235)',
//                 'rgb(153, 102, 255)',
//                 'rgb(54, 100, 235)',
//                 'rgb(132, 77, 195)',
//                 'rgb(233, 88, 235)',
//                 'rgb(72, 162, 285)',
//                 'rgb(201, 203, 207)'
//             ],
//             borderWidth: 1
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori Unit Kerja",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// var ctx_spkp = document.getElementById('bar_kategori_SPKP').getContext('2d');
// var chart_spkp = new Chart(ctx_spkp, {
//     type: "bar",
//     data: {
//         labels: ['Q12', 'Q13', 'Q14', 'Q15',
//             'Q16', 'Q17', 'Q18', 'Q19',
//             'Q20', 'Q21'],
//         datasets: [{
//             label: 'Counts',
//             data: [],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 159, 64, 0.2)',
//                 'rgba(255, 205, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgb(54, 100, 235)',
//                 'rgb(132, 77, 195)',
//                 'rgb(233, 88, 235)',
//                 'rgba(201, 203, 207, 0.2)'
//             ],
//             borderColor: [
//                 'rgb(255, 99, 132)',
//                 'rgb(255, 159, 64)',
//                 'rgb(255, 205, 86)',
//                 'rgb(75, 192, 192)',
//                 'rgb(54, 162, 235)',
//                 'rgb(153, 102, 255)',
//                 'rgb(54, 100, 235)',
//                 'rgb(132, 77, 195)',
//                 'rgb(233, 88, 235)',
//                 'rgb(201, 203, 207)'
//             ],
//             borderWidth: 1
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori SPKP",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

// var ctx_spak = document.getElementById('bar_kategori_SPAK').getContext('2d');
// var chart_spak = new Chart(ctx_spak, {
//     type: "bar",
//     data: {
//         labels: ['Q22', 'Q23', 'Q24', 'Q25',
//             'Q26', 'Q27'],
//         datasets: [{
//             label: 'Counts',
//             data: [],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(255, 159, 64, 0.2)',
//                 'rgba(255, 205, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(201, 203, 207, 0.2)'
//             ],
//             borderColor: [
//                 'rgb(255, 99, 132)',
//                 'rgb(255, 159, 64)',
//                 'rgb(255, 205, 86)',
//                 'rgb(75, 192, 192)',
//                 'rgb(54, 162, 235)',
//                 'rgb(201, 203, 207)'
//             ],
//             borderWidth: 1
//         }, ]
//     },
//     options: {
//         plugins: {
//             title: {
//                 display: false,
//                 text: "Kategori SPKP",
//                 font: {
//                     family: "'Poppins', sans-serif",
//                     size: 18,
//                     weight: 300
//                 },
//                 color: "#212529",
//                 padding: {
//                     bottom: 20
//                 }
//             },
//             legend: {
//                 position: "bottom",
//                 labels: {
//                     padding: 10
//                 }
//             }
//         }
//     }
// });

//chart_init(pieKategoriUmur.id, pieKategoriUmur.type, pieKategoriUmur.data, pieKategoriUmur.options);
// chart_init(pieKategoriJk.id, pieKategoriJk.type, pieKategoriJk.data, pieKategoriJk.options);
// chart_init(pieKategoriPendidikan.id, pieKategoriPendidikan.type, pieKategoriPendidikan.data,
//     pieKategoriPendidikan.options);
// chart_init(pieKategoriPekerjaanUtama.id, pieKategoriPekerjaanUtama.type, pieKategoriPekerjaanUtama.data,
//     pieKategoriPekerjaanUtama.options);
// chart_init(pieKategoriPersentaseTahapan.id, pieKategoriPersentaseTahapan.type, pieKategoriPersentaseTahapan.data,
//     pieKategoriPersentaseTahapan.options);
// chart_init(barKategoriUnitKerja.id, barKategoriUnitKerja.type, barKategoriUnitKerja.data,
//     barKategoriUnitKerja.options);
// chart_init(barKategoriSpkp.id, barKategoriSpkp.type, barKategoriSpkp.data,
//     barKategoriSpkp.options);
// chart_init(barKategoriSpak.id, barKategoriSpak.type, barKategoriSpak.data,
//     barKategoriSpak.options);
