<script type="text/javascript">
    $(function() {
        var table = $('.data-table1').DataTable({
            pageLength: 1000,
            "ajax": {
                "url": "{{ route('assesement_index') }}",
                "dataSrc": "assesements"
            },

            columns: [{
                    "data": "id",
                    "render": function(data, type, row, index) {
                        var myindex = index.row + 1;
                        return myindex;
                    }
                },
                {
                    "data": "name",
                },
                {
                    "data": "description",
                },
                {
                    "data": "quantity",
                },

                {
                    "data": "id",
                    "render": function(data, type, row, index) {
                        var status = ` <div class="d-flex gap-2">
                            <div class="edit">
                                <button class="btn btn-sm btn-info edit-item-btn"
                                    data-bs-toggle="modal" id="edit-tag"
                                    data-id="${data}"
                                    data-bs-target="#edittagsModal"
                                    style="background-color: green !important; color:white !important;">Update</button>
                            </div>
                            <div class="remove">
                                <button class="btn btn-sm btn-danger remove-item-btn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteRecordModal"
                                    id="deletetagRecord"
                                    data-id="${data}" style="background-color: white !important; color:green !important; border-color:green !important">Delete</button>
                            </div>
                        </div> `
                        return status;
                    }
                },
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('body').on('click', '#edit-tag', function() {
            var id = $(this).data('id');
            $.get('{{ route('getassesementInfos') }}?id=' + id, function(data) {
                $('#Udescrip_name').val(data.assesement.name);
                $('#Udescrip_description').val(data.assesement.description);
                $('#Udescrip_quantity').val(data.assesement.quantity);
                $('#descripId').val(id);
            })
        });
    });
</script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* When click save button */
        $("#frm_tag").on('submit', async function(e) {
            e.preventDefault();
            const serializedData = $("#frm_tag").serializeArray();
            var loader = $(".loader1");
            loader.show();
            try {

                const willUpdate = await new swal({
                    title: "Delete Waste Category",
                    text: `Are you sure you want to delete this waste category`,
                    icon: "warning",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                    buttons: ["Cancel", "Yes, Submit"]
                });
                if (willUpdate.isConfirmed == true) {
                    const postRequest = await request("/store_assesement",
                        processFormInputs(
                            serializedData), 'post');
                    console.log('postRequest.message', postRequest.message);
                    new swal("Good Job", postRequest.message, "success");
                    var loader = $(".loader1");
                    loader.hide();
                    $('#frm_tag').trigger("reset");
                    $("#frm_tag .close").click();
                    window.location.reload();
                } else {
                    new swal("Process aborted  :)");
                    loader.hide();
                }

            } catch (e) {
                if ('message' in e) {
                    console.log('e.message', e.message);
                    new swal("Opss", e.message, "error");
                    loader.hide();
                }
            }
        })

        /* When click update button */
        $("#update_tag").on('submit', async function(e) {
            e.preventDefault();
            const serializedData = $("#update_tag").serializeArray();
            var loader = $(".loader3");
            loader.show();

            try {

                const willUpdate = await new swal({
                    title: "Update Waste Category",
                    text: `Are you sure you want to update waste category?`,
                    icon: "warning",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                    buttons: ["Cancel", "Yes, Submit"]
                });
                if (willUpdate.isConfirmed == true) {
                    const postRequest = await request("/update_assesement",
                        processFormInputs(
                            serializedData), 'post');
                    console.log('postRequest.message', postRequest.message);
                    new swal("Good Job", postRequest.message, "success");
                    var loader = $(".loader3");
                    loader.hide();
                    $('#update_tag').trigger("reset");
                    $("#update_tag .close").click();
                    window.location.reload();
                } else {
                    new swal("Process aborted  :)");
                    loader.hide();
                }

            } catch (e) {
                if ('message' in e) {
                    console.log('e.message', e.message);
                    new swal("Opss", e.message, "error");
                    loader.hide();
                }
            }
        })

        $("#update-tagbtn").on('click', async function(e) {
            e.preventDefault();
            var loader = $("#loader1");
            loader.show();
            try {

                const willUpdate = await new swal({
                    title: "Update Waste Category",
                    text: `Are you sure you want to update waste category?`,
                    icon: "warning",
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes!",
                    showCancelButton: true,
                    buttons: ["Cancel", "Yes, Submit"]
                });
                if (willUpdate.isConfirmed == true) {
                    $("#tagsSbmt").submit();
                } else {
                    new swal("Record will not be updated  :)");
                }
            } catch (e) {
                if ('message' in e) {
                    console.log('e.message', e.message);
                    new swal("Opss", e.message, "error");
                    loader.hide();
                }
            }
        })

        /* When click delete button */
        $('body').on('click', '#deletetagRecord', function() {
            var user_id = $(this).data('id');
            var token = $("meta[name='csrf-token']").attr("content");
            var el = this;
            resetAccount(el, user_id);
        });

        async function resetAccount(el, user_id) {
            const willUpdate = await new swal({
                title: "Delete Waste Category",
                text: `Are you sure you want to delete this Waste Category ?`,
                icon: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes!",
                showCancelButton: true,
                buttons: ["Cancel", "Yes, Delete"]
            });
            if (willUpdate.isConfirmed == true) {
                performDelete(el, user_id);
            } else {
                new swal("Waste Category will not be deleted  :)");
            }
        }

        function performDelete(el, user_id) {
            try {
                $.get('{{ route('delete_assesement') }}?id=' + user_id,
                    function(data, status) {
                        console.log(status);
                        console.table(data);
                        if (status === "success") {
                            let alert = new swal("Waste Category deleted successfully !.");
                            $(el).closest("tr").remove();
                            window.location.reload();
                        }
                    }
                );
            } catch (e) {
                let alert = new swal(e.message);
            }
        }
    })
</script>
