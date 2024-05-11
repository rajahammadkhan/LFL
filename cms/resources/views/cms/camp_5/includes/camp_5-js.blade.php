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
        ajax: "{{ route('camp_5.datatable') }}",
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
                "targets": 11,
                "render": function(data, type, row, meta) {

                    return `<div class="text-center">
                          <a href="javascript:void(0);" id="myButton" data-toggle="tooltip" data-placement="top" title="Delete" data-id="`+ row.id + `">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/> </svg>
                          </a>
                          </div>`;
                },
            },
            {
                "targets": 12,
                "render": function(data, type, row, meta) {

                    return `<div class="text-center">
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
              .post('{{route("camp_5.destroy")}}', {
                _method: 'delete',
                _token: '{{csrf_token()}}',
                deleteId: deleteId,
              })
              .then(function (response) {

                swal(
                  'Deleted!',
                  'Camp Data has been deleted.',
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
                url: '{{ route('sentmsg5') }}',
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