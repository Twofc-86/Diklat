    <!-- Data karyawan -->
    <div class="container-search">
        <!-- <div class="dropsearch offset-lg-0 ">
            <button onclick="myFunction()" class="dropbtn-custom">PILIH PENGEMBANGAN</button>
            <div id="myDropdown" class="dropdown-custom-content">
                <a href="#">PENGEMBANGAN DIRI</a>
                <a href="#">PENGEMBANGAN STAFF</a>
            </div>
        </div>
    <form class="searchform">
        <input class="me-4" type="text" placeholder="Masukan NIM">
        <input type="text" placeholder="Periode...">
        <input type="text" placeholder="Periode...">
        <button type="submit">Search</button>
    </form> -->

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 border-radius-xl">
                    <div class="card-header-thin pb-0">
                    </div>
                    <div class="card-body">
                        <table id="table_karyawan" class="table">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">INFO</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIPEG</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Band</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Divisi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bagian</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        // DataTable 
        $("#table_karyawan").DataTable({
            ajax: {
                url: "<?= base_url("menu/get_data_pelatihan"); ?>",
                type: "post",
            },
            processing: true,
            columnDefs: [{
                targets: '_all',
                className: 'dt-body-center text-xs',
            }],
            columns: [{
                    data: "",
                    render: function(data, type, row) {
                        return `<a href="<?= base_url('Menu/daftar_pelatihan/') ?>` + data + `" class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 496.158 496.158" style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve">
<path style="fill:#25B7D3;" d="M496.158,248.085c0-137.022-111.069-248.082-248.075-248.082C111.07,0.003,0,111.063,0,248.085
	c0,137.001,111.07,248.07,248.083,248.07C385.089,496.155,496.158,385.086,496.158,248.085z"/>
<g>
	<path style="fill:#FFFFFF;" d="M315.249,359.555c-1.387-2.032-4.048-2.755-6.27-1.702c-24.582,11.637-52.482,23.94-57.958,25.015
		c-0.138-0.123-0.357-0.348-0.644-0.737c-0.742-1.005-1.103-2.318-1.103-4.015c0-13.905,10.495-56.205,31.192-125.719
		c17.451-58.406,19.469-70.499,19.469-74.514c0-6.198-2.373-11.435-6.865-15.146c-4.267-3.519-10.229-5.302-17.719-5.302
		c-12.459,0-26.899,4.73-44.146,14.461c-16.713,9.433-35.352,25.41-55.396,47.487c-1.569,1.729-1.733,4.314-0.395,6.228
		c1.34,1.915,3.825,2.644,5.986,1.764c7.037-2.872,42.402-17.359,47.557-20.597c4.221-2.646,7.875-3.989,10.861-3.989
		c0.107,0,0.199,0.004,0.276,0.01c0.036,0.198,0.07,0.5,0.07,0.933c0,3.047-0.627,6.654-1.856,10.703
		c-30.136,97.641-44.785,157.498-44.785,182.994c0,8.998,2.501,16.242,7.432,21.528c5.025,5.393,11.803,8.127,20.146,8.127
		c8.891,0,19.712-3.714,33.08-11.354c12.936-7.392,32.68-23.653,60.363-49.717C316.337,364.326,316.636,361.587,315.249,359.555z"/>
	<path style="fill:#FFFFFF;" d="M314.282,76.672c-4.925-5.041-11.227-7.597-18.729-7.597c-9.34,0-17.475,3.691-24.176,10.971
		c-6.594,7.16-9.938,15.946-9.938,26.113c0,8.033,2.463,14.69,7.32,19.785c4.922,5.172,11.139,7.794,18.476,7.794
		c8.958,0,17.049-3.898,24.047-11.586c6.876-7.553,10.363-16.433,10.363-26.393C321.646,88.105,319.169,81.684,314.282,76.672z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>

                                        </a>`
                    }
                },
                {
                    data: ""
                },
                {
                    data: "",
                },
                {
                    data: ""
                },
                {
                    data: "",

                },
                {
                    data: ""
                },
                {
                    data: "",
                    className: "text-center text-xs"
                },

            ],
            "responsive": false,
            "lengthChange": true,
            "autoWidth": false,
            "ordering": false,
            "scrollX": true,
        });
    </script>