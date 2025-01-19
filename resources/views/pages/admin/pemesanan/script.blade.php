<script>
    $(document).ready(function() {
        const tabelPemesanan = $("#table-pemesanan").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "/admin/pemesanan",
                type: "GET",
            },
            columns: [{
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    orderable: false,
                    searchable: false,
                },
                {
                    data: "user_id",
                    name: "user_id",
                },
                {
                    data: "approver1_id",
                    name: "approver1_id",
                },
                {
                    data: "approver2_id",
                    name: "approver2_id",
                },
                {
                    data: "kendaraan_id",
                    name: "kendaraan_id",
                },
                {
                    data: "tanggal_mulai",
                    name: "tanggal_mulai",
                },
                {
                    data: "tanggal_selesai",
                    name: "tanggal_selesai",
                },

            ],
        });
    });
</script>
