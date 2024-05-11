<script type="text/javascript">
    $(document).ready(function() {
    
    

    var table = $('#datatable').DataTable({
// "aLengthMenu": [
// [500],
// ],
        processing: true,
        responsive: true,
        // "pageLength": 200000,
        lengthMenu: [
            [40, 6000, 8000, -1],
            [40, 6000, 8000, 'All'],
        ],
        serverSide: true,
        ajax: "{{ route('approvedcamps.datatable') }}",
        dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
"<'row'<'col-sm-12'tr>>" +
"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
            'excel', 'pdf', 'print'
        ],
        "columns": [{
                "data": "id",
                "defaultContent": ""
            },
            {
                "data": "name",
                "defaultContent": ""
            },
            {
                "data": "phone",
                "defaultContent": ""
            },
            {
                "data": "email",
                "defaultContent": ""
            },
            {
                "data": "country",
                "defaultContent": ""
            },
            {
                "data": "uae_state",
                "defaultContent": ""
            },
            {
                "data": "qty",
                "defaultContent": ""
            },
            {
                "data": "p_amt",
                "defaultContent": ""
            },
            {
                "data": "p_id",
                "defaultContent": ""
            },

            {
                "data": "date",
                "defaultContent": ""
            },
            {
                "data": "p_stat",
                "defaultContent": ""
            },
            {
                "data": "used_camp",
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
                    return row.id;
                },
            },
            
        ],
        "drawCallback": function(settings) {

        $('.delete').click(function () {
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
          }).then(function (result) {
            if (result.value) {
            axios
              .post('{{route("lexusl.destroy")}}', {
                _method: 'delete',
                _token: '{{csrf_token()}}',
                deleteId: deleteId,
              })
              .then(function (response) {

                swal(
                  'Deleted!',
                  'lexusl has been deleted.',
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
    $('#datatable').on('click', '#myButton', function() {
            var rowId = $(this).data('id'); // Get the data-id attribute value
            
            // Create an AJAX request
            $.ajax({
                url: '{{ route('sentmsg') }}',
                type: 'GET',
                data: { id: rowId },
                success: function(response) {
                    console.log(response);
                    alert('Message sent Successfully');
                    // Process the response as needed
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    </script>