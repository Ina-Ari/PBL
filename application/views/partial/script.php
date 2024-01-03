<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<script src="<?php echo base_url('assets/lib/chart/chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/easing/easing.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/tempusdominus/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/tempusdominus/js/moment-timezone.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') ?>"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
<!-- <script defer src="<?php echo base_url('assets/js/validasi.js') ?>"></script> -->

<script type="text/javascript">
        
    function confirm_hapus() {
        var msg = "Apakah anda yakin untuk menghapus data ini?";
        yes = confirm(msg);
        if (yes) {
            return true;
        } else {
            return false;
        }   
    };

</script>