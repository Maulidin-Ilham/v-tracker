<script>
    $(document).ready(function() {
        $("#tambah-kendaraan").on("click", function(e) {
            e.preventDefault()
            $("#create-modal").modal("show");
        });


        const tabelKendaraan = $('#table-kendaraan').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/admin/kendaraan',
                type: 'GET'
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'jenis_kendaraan_id',
                    name: 'jenis_kendaraan_id'
                },
                {
                    data: 'kepemilikan_id',
                    name: 'kepemilikan_id'
                },

            ]
        });

        // Attach submit event to the form
        $("#createWargaForm").submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            const formData = {
                nik: $("#name").val(),
                kepemilikan_id: $("#kepemilikan_id").val(),
                jenis_kendaraan_id: $("#jenis_kendaraan_id").val(),
            };

            $.ajax({
                url: "admin/kendaraan",
                method: "POST",

                data: formData,
                success: function(response) {
                    tablelKendaraan.ajax.reload();
                    $("#create-modal").modal("hide");

                    Swal.fire({
                        icon: "success",
                        title: "Data kendaraan berhasil ditambahkan!",
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener("mouseenter", Swal
                                .stopTimer);
                            toast.addEventListener("mouseleave", Swal
                                .resumeTimer);
                        },
                    });
                },
                error: function(xhr) {

                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: xhr.responseJSON.message || "Terjadi kesalahan",
                    });
                }
            });
        });


    });
</script>
