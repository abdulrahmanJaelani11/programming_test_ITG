<link href="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Devisi</th>
                <th style="display: none;" class="opsiEdit">Aksi</th>
                <th style="display: none;" class="opsiHapus">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($staff as $row) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['kota']; ?></td>
                    <td><?= $row['devisi']; ?></td>
                    <td style="display: none;" class="opsiEdit">
                        <button type="button" onclick="tampilFormEdit(`<?= base_url('Proses/getStaff/' . $row['id_staff']); ?>`, `Form`, `<?= $row['id_staff']; ?>`)" name="ubah" class="btn btn-sm btn-info btn-block"> Ubah </button>
                    </td>
                    <td style="display: none;" class="opsiHapus">
                        <button type="button" name="hapus" onclick="hapusStaff(`<?= base_url('Proses/prosesHapusStaff/' . $row['id_staff']); ?>`, `Home/getTable`)" class="btn btn-sm btn-danger btn-block"> Hapus </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<!-- Page level plugins -->
<script src="<?= base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets'); ?>/js/demo/datatables-demo.js"></script>