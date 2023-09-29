<!-- Main Footer -->
<footer class="main-footer">
    <strong>By Dedin 2023</strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- databel js -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- SweatAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<script>
    $(function() {
        $('.select2').select2();
         
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
<script>
    new DataTable('#example');
</script>
<?php if ($this->session->flashdata('success')): ?>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Sukses!',
        text: '<?= $this->session->flashdata("success"); ?>'
    })
</script>
<?php endif; ?>

<script>
     $('.delete').click( function() {
         var id = $(this).attr('data-id');
         var nama = $(this).attr('data-nama');
         var jenisData = $(this).attr('data-jenis');
            Swal.fire({
             title: 'Apakah kamu yakin?',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya, Hapus Data!'
         }).then((result) => {
             if (result.isConfirmed) {
                 if( jenisData === 'siswa' ) {
                     window.location.href = "<?= base_url('siswa/hapus/') ?>"+id;
                 } else if( jenisData === 'mapel' ) {
                     window.location.href = "<?= base_url('mapel/hapus/') ?>" +id;
                 } else if( jenisData === 'jadwal' ) {
                     window.location.href = "<?= base_url('penjadwalan/hapus/') ?>" + id;
                 }
                 Swal.fire(
                     'Terhapus!',
                     'Data berhasil dihapus.',
                     'success',
                     )
             }
         })
        });
</script>

</body>

</html>