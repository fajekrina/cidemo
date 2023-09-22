<div class="container pt-5">
  <h3><?= $title ?></h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb ">
      <li class="breadcrumb-item"><a>Data Profile</a></li>
      <li class="breadcrumb-item active" aria-current="page">List Data</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-12">
      <a class="btn btn-primary mb-2" href="<?= base_url('profile/add'); ?>">Tambah Data</a>
      <div mb-2>
        <?php if ($this->session->flashdata('message')) :
          echo $this->session->flashdata('message');
        endif; ?>
      </div>

      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tableProfile">
              <thead>
                <tr class="table-success">
                    <th></th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>AGAMA</th>
                    <th>NO HP</th>
                    <th>EMAIL</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data_profile as $row) : ?>
                  <tr>
                    <td>
                        <a href="<?= site_url('mahasiswa/edit/' . $row->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                        <a href="javascript:void(0);" data="<?= $row->id ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                    </td>
                    <td><?= $row->nama_lengkap ?></td>
                    <td><?= $row->jenis_kelamin ?></td>
                    <td><?= $row->alamat ?></td>
                    <td><?= $row->agama ?></td>
                    <td><?= $row->no_hp ?></td>
                    <td><?= $row->email ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#tableProfile').DataTable();

  $('#tableProfile').on('click', '.item-delete', function() {
    var id = $(this).attr('data');
    $('#myModalDelete').modal('show');
    $('#btdelete').unbind().click(function() {
      $.ajax({
        type: 'ajax',
        method: 'get',
        async: false,
        url: '<?php echo base_url() ?>profile/delete/',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('#myModalDelete').modal('hide');
          location.reload();
        }
      });
    });
  });
</script>