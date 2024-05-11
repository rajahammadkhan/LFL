<script type="text/javascript">
$(document).ready(function() {

    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('ticket.datatable') }}",
        "columns": [{
                "data": "id",
                "defaultContent": ""
            },
            {
                "data": "name",
                "defaultContent": ""
            },
            {
                "data": "price",
                "defaultContent": ""
            },
            {
                "data": "id",
                "defaultContent": ""
            },

            {
                "data": "status",
                "defaultContent": ""
            },
        ],
        "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            },
            {
                "targets": 0,
                "render": function(data, type, row, meta) {
                    return meta.row + 1;
                },
            },

            {
                "targets": -1,
                "render": function(data, type, row, meta) {

                    var checked = row.status == 1 ? 'checked' : null;
                    return `
                    <div class="form-check form-switch"><input class="form-check-input status" type="checkbox"  ` +
                        checked +
                        ` value="` + row.id + `""
                                    role="switch" id="flexSwitchCheckChecked"></div>
                    `;
                },
            },
            {
                "targets": -2,
                "render": function(data, type, row, meta) {

                    var edit = "{{ route('ticket.edit', [':id']) }}";
                    edit = edit.replace(':id', data);

                    return `<div class="text-center">
                    <a href="` + edit + `" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>

                   
                          
                                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" class="btn btn-outline-danger btn-sm edit delete" title="Delete" data-id="` +
                        data + `">
                            <i class="ri-chat-delete-line"></i>
                      </a></div>`;
                },
            },
        ],
        "drawCallback": function(settings) {

            $('.status').change(function() {
                var $this = $(this);
                var id = $this.val();

                var status = this.checked;

                if (status) {
                    status = 1;
                } else {
                    status = 0;
                }
                console.log(id);
                axios
                    .post('{{route("ticket.status")}}', {
                        _token: '{{csrf_token()}}',
                        _method: 'patch',
                        id: id,
                        status: status,
                    })
                    .then(function(responsive) {
                        console.log(responsive);

                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            });

            $('.delete').click(function() {
                var deleteId = $(this).data('id');
                var $this = $(this);

                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#4fa7f3',
                    cancelButtonColor: '#d57171',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function(result) {
                    if (result.value) {
                        axios
                            .post('{{route("ticket.destroy")}}', {
                                _method: 'delete',
                                _token: '{{csrf_token()}}',
                                deleteId: deleteId,
                            })
                            .then(function(response) {

                                swal(
                                    'Deleted!',
                                    'Our Service  has been deleted.',
                                    'success'
                                )

                                table.draw();
                            })
                            .catch(function(error) {
                                console.log(error);
                                swal(
                                    'Failed!',
                                    error.response.data.error,
                                    'error'
                                )
                            });
                    }
                })
            });
        },
        //scrollX:true,
    });

});
</script>