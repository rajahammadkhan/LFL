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
            [4000, 6000, 8000, -1],
            [4000, 6000, 8000, 'All'],
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
                "defaultContent": "No data",
                "render": function(data, type, row) {
                    return data ? data : "X";
                }
            },  
            {
                "data": "address",
                "defaultContent": ""
            },
            {
                "data": "category_1",
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
                    return row.id;
                },
            },
            {
                "targets": 13,
                "render": function(data, type, row, meta) {
                    var edit = "{{ route('approvedcamps.edit', [':id']) }}";
                    edit = edit.replace(':id', row.id);
                    
                    return `<div class="text-center">
                        <a href="` + edit + `"  data-toggle="tooltip" data-placement="top" title="Edit">
                            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 text-black"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                          </a>
                          <a href="javascript:void(0);" class="delete" data-toggle="tooltip" data-placement="top" title="Delete" data-id="`+ row.id + `">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                          </a>
                          </div>`;
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
              .post('{{route("approvedcamp.destroy")}}', {
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