<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $("#example3").DataTable({
            "responsive": false,
            "lengthChange": false,
            "autoWidth": false,
            "bPaginate": false,
            "bFilter": false,
            "bInfo": false
        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

        $("#example4").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": true,
        }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
    });
</script>
</body>

</html>