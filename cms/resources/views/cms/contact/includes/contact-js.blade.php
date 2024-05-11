<script type="text/javascript">
    $(document).ready(function() {
    
    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('contact.datatable') }}",
        "columns": [{
                "data": "id",
                "defaultContent": ""
            },
            {
                "data": "name",
                "defaultContent": ""
            },
            {
                "data": "email",
                "defaultContent": ""
            },
            {
                "data": "phone",
                "defaultContent": ""
            },
            {
                "data": "comment",
                "defaultContent": ""
            },
            {
                    "data": "id",
                    "defaultContent": ""
            },
        ],
        "columnDefs": [
           {
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
                   return `<div class="text-center">

                          <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" class="btn btn-outline-danger btn-sm edit delete" title="Delete" data-id="` +
                            data + `">
                            <i class="ri-chat-delete-line"></i>
                      </a>
                           </div>`;
                },
            },
            
        ],
        "drawCallback": function(settings) {
      
        $('.delete').click(function () {
          var deleteId = $(this).data('id');
          console.log(deleteId);
          var $this = $(this);

          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fa7f3',
            cancelButtonColor: '#d57171',
            confirmButtonText: 'Yes, delete it!'
          }).then(function (result) {
            if (result.value) {
            axios
              .post('{{route("contact.destroy")}}', {
                _method: 'delete',
                _token: '{{csrf_token()}}',
                deleteId: deleteId,
              })
              .then(function (response) {
                console.log(response);

                swal(
                  'Deleted!',
                  'Contact has been deleted.',
                  'success'
                )

                table.draw();
              })
              .catch(function (error) {
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