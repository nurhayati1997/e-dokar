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
                <li class="breadcrumb-item"><a href="#">Data User</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          <!-- <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <!-- Dark table -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header bg-gradient-success">
            <div class="pt-4 text-center">
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data User</h4>
              <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-block btn-primary" onClick="tryTambah()">Tambah</button>
                  <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Master Data User </span>
                              </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              <form role="form">
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" id="nama" placeholder="Nama" type="text">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <select class="form-control" id="ruleUser">
                                    <option value="0" disabled selected>-Pilih Level-</option>
                                    <option value="1">Owner</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Dokter</option>
                                  </select>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" id="email" placeholder="email" type="email">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" id="password" placeholder="Pasword" type="password">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                                    </div>
                                    <input class="form-control" id="konfirPass" placeholder="Konfirmasi Pasword" type="password">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" id="jabatan" placeholder="Jabatan" type="text">
                                  </div>
                                </div>
                                <div class="badge badge-danger" id="pesanErrorTambah"></div>
                                <div class="text-center">
                                  <button type="button" onClick="tambah()" id="tombolTambah" class="btn btn-success my-2">Tambah</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Edit Data User </span>
                              </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                              <form role="form">
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input id="idUser" type="hidden">
                                    <input class="form-control" id="editNama" placeholder="Nama" type="text">
                                  </div>
                                </div>
                                <div class="badge badge-danger" id="pesanErrorEdit"></div>
                                <div class="text-center">
                                  <button type="button" onClick="edit()" id="tombolEdit" class="btn btn-success my-2">Edit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                </div>
              </div>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive py-4" id="tempatTabel">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-bd">
          <h5 class="modal-title">
            <span class="fw-mediumbold">
              Hapus Data Master</span>
            <span class="fw-light">
              User
            </span>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="teksHapus"></p>
          <input type="hidden" id="id_hapus" name="id_hapus" />
        </div>
        <div class="modal-footer no-bd">
          <button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  tampilkan()

  function tampilkan() {
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-flush" id="tabelUser"><thead class="thead-light"><tr><th>NO</th><th>Nama</th><th>Email</th><th>Jabatan</th><th>Dokter/spesialis</th><th>Action</th></tr></thead><tbody>'
    $.ajax({
      url: '<?= base_url() ?>master_user/tampil',
      method: 'post',
      dataType: 'json',
      success: function(data) {
        for (let i = 0; i < data.length; i++) {
          baris += '<tr>'
          baris += '<td>' + (i + 1) + '</td>'
          baris += '<td>' + data[i].nama + '</td>'
          baris += '<td>' + data[i].email + '</td>'
          baris += '<td>' + data[i].rule + '</td>'
          baris += '<td>' + data[i].jabatan + '</td>'
          baris += '<td><div style="cursor:pointer;" title="hapus?" class="badge badge-danger" id="hapus' + data[i].id_user + '" onClick="tryHapus(' + data[i].id_user + ')"><i class="fa fa-times"></i></div>'
          baris += ' <div style="cursor:pointer;" title="edit?" class="badge badge-info" id="edit' + data[i].id_user + '" onClick="tryEdit(' + data[i].id_user + ')"><i class="fa fa-edit"></i></div>'
          baris += '</td></tr>'
        }
        baris += '</tbody></table>'
        $("#tempatTabel").html(baris);
        $('#tabelUser').DataTable({
          "pageLength": 10,
        });
      }
    });
  }

  function tryTambah() {
    $("#nama").val("")
    $("#rule").val("")
    $("#email").val("")
    $("#password").val("")
    $("#konfirPass").val("")
    $("#jabatan").val("")
    $("#modalTambah").modal('show')
    $('#pesan_error_tambah').html("")
  }

  function tambah() {
    $("#tombolTambah").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var nama = $("#nama").val()
    var rule = $("#ruleUser").val()
    var email = $("#email").val()
    var password = $("#password").val()
    var konfirPass = $("#konfirPass").val()
    var jabatan = $("#jabatan").val()
    if (rule == null) {
      rule = 0;
    }
    $.ajax({
      url: '<?= base_url() ?>master_user/tambah',
      method: 'post',
      data: {
        nama: nama,
        rule: rule,
        email: email,
        password: password,
        konfirPass: konfirPass,
        jabatan: jabatan
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#modalTambah").modal('hide')
          tampilkan()
          $("#nama").val("")
          $("#rule").val("")
          $("#email").val("")
          $("#password").val("")
          $("#konfirPass").val("")
          $("#jabatan").val("")
          $('#pesanErroTambah').html("")
        } else {
          data = data.replace("<p>", "");
          data = data.replace("</p>", "");
          $('#pesanErrorTambah').html(data)
        }
        $("#tombolTambah").html('Tambah')
      }
    });
  }

  function tryEdit(id) {
    $("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>master_user/dataByid',
      method: 'post',
      data: "target=tbl_user&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalEdit").modal('show')
        $("#editNama").val(data.nama)
        console.log(data)
        $("#edit" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function edit() {
    $("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var nama = $("#editNama").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>master_user/edit',
      method: 'post',
      data: {
        id: id,
        nama: nama
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#modalEdit").modal('hide')
          tampilkan()
          $("#idUser").val("")
          $("#nama").val("")
          $('#pesanErrorTambah').html("")
        } else {
          $('#pesanErrorEdit').html(data)
        }
        $("#tombolEdit").html('Edit')
      }
    });
  }

  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: '<?= base_url() ?>master_user/dataById',
      method: 'post',
      data: "target=tbl_user&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus Jasa dengan nama '" + data.nama + "' ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: '<?= base_url() ?>master_user/hapus',
      method: 'post',
      data: "target=tbl_user&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val("")
        $("#teksHapus").html("")
        tampilkan()
        $("#modalHapus").modal('hide')
        $("#hapus").html('Hapus')
      }
    });
  }
</script>