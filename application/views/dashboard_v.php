<div class="content">
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Aulia Husada</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Total Pasien</h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $totalPasien; ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="ni ni-chart-pie-35"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">Total Pasien terdaftar.</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pasien Baru Bulan ini.</h5>
                    <span class="h2 font-weight-bold mb-0"><?php echo $pasienBaru; ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">Total Pasien baru yang mendaftar</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pendapatan Hari ini</h5>
                    <span class="h2 font-weight-bold mb-0">Rp. <?php if ($totalUntung) {
                                                                  echo $totalUntung;
                                                                } else {
                                                                  echo 0;
                                                                } ?></span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-chart-bar-32"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">Total Pendapatan Harian</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Pendaftaran Pasien</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Senin - Minggu</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-sales" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Pendaftaran Pasien Baru</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Senin - Minggu</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-bars" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Total Praktik</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Berdasarkan dokter</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-pie" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <!--* Card header *-->
        <!--* Card body *-->
        <!--* Card init *-->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <!-- Title -->
            <h5 class="h3 mb-0">Total pasien</h5>
            <!-- Surtitle -->
            <h6 class="surtitle">Berdasarkan Asal Kecamatan</h6>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-points" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url() ?>assets_admin/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url() ?>assets_admin/vendor/chart.js/dist/Chart.extension.js"></script>
  <script>
    Charts = function() {
      var e, a = $('[data-toggle="chart"]'),
        t = "light",
        n = {
          base: "Open Sans"
        },
        i = {
          gray: {
            100: "#f6f9fc",
            200: "#e9ecef",
            300: "#dee2e6",
            400: "#ced4da",
            500: "#adb5bd",
            600: "#8898aa",
            700: "#525f7f",
            800: "#32325d",
            900: "#212529"
          },
          theme: {
            default: "#172b4d",
            primary: "#5e72e4",
            secondary: "#f4f5f7",
            info: "#11cdef",
            success: "#2dce89",
            danger: "#f5365c",
            warning: "#fb6340"
          },
          black: "#12263F",
          white: "#FFFFFF",
          transparent: "transparent"
        };

      function o(e, a) {
        for (var t in a) "object" != typeof a[t] ? e[t] = a[t] : o(e[t], a[t])
      }

      function s(e) {
        var a = e.data("add"),
          t = $(e.data("target")).data("chart");
        e.is(":checked") ? (! function e(a, t) {
          for (var n in t) Array.isArray(t[n]) ? t[n].forEach(function(e) {
            a[n].push(e)
          }) : e(a[n], t[n])
        }(t, a), t.update()) : (! function e(a, t) {
          for (var n in t) Array.isArray(t[n]) ? t[n].forEach(function(e) {
            a[n].pop()
          }) : e(a[n], t[n])
        }(t, a), t.update())
      }

      function l(e) {
        var a = e.data("update"),
          t = $(e.data("target")).data("chart");
        o(t, a),
          function(e, a) {
            if (void 0 !== e.data("prefix") || void 0 !== e.data("prefix")) {
              var t = e.data("prefix") ? e.data("prefix") : "",
                n = e.data("suffix") ? e.data("suffix") : "";
              a.options.scales.yAxes[0].ticks.callback = function(e) {
                if (!(e % 10)) return t + e + n
              }, a.options.tooltips.callbacks.label = function(e, a) {
                var i = a.datasets[e.datasetIndex].label || "",
                  o = e.yLabel,
                  s = "";
                return a.datasets.length > 1 && (s += '<span class="popover-body-label mr-auto">' + i + "</span>"), s += '<span class="popover-body-value">' + t + o + n + "</span>"
              }
            }
          }(e, t), t.update()
      }
      return window.Chart && o(Chart, (e = {
        defaults: {
          global: {
            responsive: !0,
            maintainAspectRatio: !1,
            defaultColor: "dark" == t ? i.gray[700] : i.gray[600],
            defaultFontColor: "dark" == t ? i.gray[700] : i.gray[600],
            defaultFontFamily: n.base,
            defaultFontSize: 13,
            layout: {
              padding: 0
            },
            legend: {
              display: !1,
              position: "bottom",
              labels: {
                usePointStyle: !0,
                padding: 16
              }
            },
            elements: {
              point: {
                radius: 0,
                backgroundColor: i.theme.primary
              },
              line: {
                tension: .4,
                borderWidth: 4,
                borderColor: i.theme.primary,
                backgroundColor: i.transparent,
                borderCapStyle: "rounded"
              },
              rectangle: {
                backgroundColor: i.theme.warning
              },
              arc: {
                backgroundColor: i.theme.primary,
                borderColor: "dark" == t ? i.gray[800] : i.white,
                borderWidth: 4
              }
            },
            tooltips: {
              enabled: !0,
              mode: "index",
              intersect: !1
            }
          },
          doughnut: {
            cutoutPercentage: 83,
            legendCallback: function(e) {
              var a = e.data,
                t = "";
              return a.labels.forEach(function(e, n) {
                var i = a.datasets[0].backgroundColor[n];
                t += '<span class="chart-legend-item">', t += '<i class="chart-legend-indicator" style="background-color: ' + i + '"></i>', t += e, t += "</span>"
              }), t
            }
          }
        }
      }, Chart.scaleService.updateScaleDefaults("linear", {
        gridLines: {
          borderDash: [2],
          borderDashOffset: [2],
          color: "dark" == t ? i.gray[900] : i.gray[300],
          drawBorder: !1,
          drawTicks: !1,
          drawOnChartArea: !0,
          zeroLineWidth: 0,
          zeroLineColor: "rgba(0,0,0,0)",
          zeroLineBorderDash: [2],
          zeroLineBorderDashOffset: [2]
        },
        ticks: {
          beginAtZero: !0,
          padding: 10,
          callback: function(e) {
            if (!(e % 10)) return e
          }
        }
      }), Chart.scaleService.updateScaleDefaults("category", {
        gridLines: {
          drawBorder: !1,
          drawOnChartArea: !1,
          drawTicks: !1
        },
        ticks: {
          padding: 20
        },
        maxBarThickness: 10
      }), e)), a.on({
        change: function() {
          var e = $(this);
          e.is("[data-add]") && s(e)
        },
        click: function() {
          var e = $(this);
          e.is("[data-update]") && l(e)
        }
      }), {
        colors: i,
        fonts: n,
        mode: t
      }
    }()

    var
      PieChart = function() {
        var e, a, t, n = $("#chart-pie");
        n.length && (e = n, t = new Chart(e, {
          type: "pie",
          data: {
            labels: [<?php for ($i = 0; $i < count($praktekByDokter); $i++) {
                        echo '"' . $praktekByDokter[$i]["nama"] . '"';
                        if ($i != count($praktekByDokter) - 1) {
                          echo ",";
                        }
                      } ?>],
            datasets: [{
              data: [<?php for ($i = 0; $i < count($praktekByDokter); $i++) {
                        echo '"' . $praktekByDokter[$i]["COUNT(id_antrian)"] . '"';
                        if ($i != count($praktekByDokter) - 1) {
                          echo ",";
                        }
                      } ?>],
              backgroundColor: [Charts.colors.theme.danger, Charts.colors.theme.warning, Charts.colors.theme.success, Charts.colors.theme.primary, Charts.colors.theme.info],
              label: "Dataset 1"
            }]
          },
          options: {
            responsive: !0,
            legend: {
              position: "top"
            },
            animation: {
              animateScale: !0,
              animateRotate: !0
            }
          }
        }), e.data("chart", t))
      }(),
      PointsChart = function() {
        var e, a, t = $("#chart-points");
        t.length && (e = t, a = new Chart(e, {
          type: "line",
          options: {
            scales: {
              yAxes: [{
                gridLines: {
                  color: Charts.colors.gray[200],
                  zeroLineColor: Charts.colors.gray[200]
                },
                ticks: {}
              }]
            }
          },
          data: {
            labels: [<?php for ($i = 0; $i < count($pasienByKecamatan); $i++) {
                        echo '"' . $pasienByKecamatan[$i]["KECAMATAN"] . '"';
                        if ($i != count($pasienByKecamatan) - 1) {
                          echo ",";
                        }
                      } ?>],
            datasets: [{
              label: "Total ",
              data: [<?php for ($i = 0; $i < count($pasienByKecamatan); $i++) {
                        echo '"' . $pasienByKecamatan[$i]["COUNT(nama)"] . '"';
                        if ($i != count($pasienByKecamatan) - 1) {
                          echo ",";
                        }
                      } ?>],
              pointRadius: 10,
              pointHoverRadius: 15,
              showLine: !1
            }]
          }
        }), e.data("chart", a))
      }(),
      BarsChart = (SalesChart = function() {
        var e, a, t = $("#chart-sales");
        t.length && (e = t, a = new Chart(e, {
          type: "line",
          options: {
            scales: {
              yAxes: [{
                gridLines: {
                  color: Charts.colors.gray[200],
                  zeroLineColor: Charts.colors.gray[200]
                },
                ticks: {}
              }]
            }
          },
          data: {
            labels: [<?php for ($i = 0; $i < count($pasienPerminggu); $i++) {
                        echo '"' . $pasienPerminggu[$i][0] . '"';
                        if ($i != count($pasienPerminggu) - 1) {
                          echo ",";
                        }
                      } ?>],
            datasets: [{
              label: "Jumlah ",
              data: [<?php for ($i = 0; $i < count($pasienPerminggu); $i++) {
                        echo '"' . $pasienPerminggu[$i][1] . '"';
                        if ($i != count($pasienPerminggu) - 1) {
                          echo ",";
                        }
                      } ?>]
            }]
          }
        }), e.data("chart", a))
      }(), function() {
        var e = $("#chart-bars");
        e.length && function(e) {
          var a = new Chart(e, {
            type: "bar",
            data: {
              labels: [<?php for ($i = 0; $i < count($pasienBaruPerminggu); $i++) {
                          echo '"' . $pasienBaruPerminggu[$i][0] . '"';
                          if ($i != count($pasienBaruPerminggu) - 1) {
                            echo ",";
                          }
                        } ?>],
              datasets: [{
                label: "Jumlah ",
                data: [<?php for ($i = 0; $i < count($pasienBaruPerminggu); $i++) {
                          echo '"' . $pasienBaruPerminggu[$i][1] . '"';
                          if ($i != count($pasienBaruPerminggu) - 1) {
                            echo ",";
                          }
                        } ?>]
              }]
            }
          });
          e.data("chart", a)
        }(e)
      }());
  </script>