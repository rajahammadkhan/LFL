@extends('cms.layouts.masterpage')
@section('title', 'Approved Ticket')
@section('top-styles')
<link href="{{ url('') }}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('header')
    @parent
@endsection
@section('leftside')
    @parent
@endsection
@section('content')
<div class="page-content mt-0">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row mt-0">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                 <h4 class="mb-sm-0">Approved Ticket</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$isEdit ? 'Edit' : 'Add'}} Approved Ticket</li>
                        </ol>
                        </div>
                </div>
            </div>
        </div>

         <div class="col-lg-12">
             <div class="card">
                <div class="card-body">
                    <div id="progrss-wizard" class="twitter-bs-wizard">
                        <div class="col-md-12">
                            <div >
                                <div class="widget-content widget-content-area border-tab" style="border: none;">
                                    <div class="tab-content mb-4" id="border-tabsContent" style="border: none;">
                                        <div class="tab-pane fade show active" id="border-home" role="tabpanel" aria-labelledby="border-home-tab" style="padding: 0px;">
                                            <form action="{{ $isEdit ? route('approvedcamps.update', [$camp->id]) : route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @if ($isEdit)
                                                    <input type="hidden" name="_method" value="put">
                                                @endif

                                                <div class="row">
                                                    <div class="col-md-6 mt15 pl30">
                                                        <h5 class="mb-sm-0">Approved Ticket</h5>
                                                    </div>

                                                    <div class="col-md-6 text-end">
                                                        <a href="{{route('approvedcamps')}}" class="btn btn-primary"> 
                                                        <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>    
                                                        &nbsp; | &nbsp; Go Back</a>

                                                        <!--<button type="submit" class="btn btn-primary mb-2 mr-4 ml-3 mt-2"> -->
                                                        <!--<svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>    -->
                                                        <!--&nbsp; | &nbsp; {{ $isEdit ? 'Update' : 'Save' }}</button>-->
                                                    </div>
                                                </div>

                                                <div class="widget-content widget-content-area">
                                                    <div class="form-row mb-4">
                                                        
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Payment Id</label>
                                                                    <h4>{{$camp->p_id}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Payment Status</label>
                                                                    <h4>{{$camp->p_stat}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Payment Date</label>
                                                                    <h4>{{ \Carbon\Carbon::parse($camp->date)->format('F d, Y') }}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Name</label>
                                                                    <h4>{{$camp->name}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Phone Number</label>
                                                                    <h4>+{{$camp->phone}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Email</label>
                                                                    <h4>{{$camp->email}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Address</label>
                                                                    <h4>{{$camp->address}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Country</label>
                                                                    <h4>{{$camp->country}}</h4>
                                                                </div>
                                                                @if(!empty($camp->uae_state))
                                                                <div class="form-group col-md-3">
                                                                    <label for="">UAE State</label>
                                                                    <h4>{{$camp->uae_state}}</h4>
                                                                </div>
                                                                @endif
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Quantity 1</label>
                                                                    <h4>{{$camp->qty}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Ticket Name</label>
                                                                    <h4>{{$camp->category_1}}</h4>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="">Total Amount</label>
                                                                    <h4>{{$camp->p_amt}}</h4>
                                                                </div>
                                                            </div>
                                                        </div>                            
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>                       
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--  END CONTENT AREA  -->
    <!--  END CONTENT AREA  -->
@endsection
@section('bottom-mid-scripts')
<script src="{{url('')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{url('')}}/assets/js/pages/ecommerce-add-product.init.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{url('')}}/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="{{url('')}}/assets/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
<script src="{{url('')}}/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
@endsection
@section('bottom-bot-scripts')
    <script>
        $(document).ready(function() {
            $('form').parsley();

            

            $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
            });
            $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);
            
            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
            });

            var secondUpload = new FileUploadWithPreview('mySecondImage')

        });

    </script>
<script>
$(document).ready(function() {
    var campUsedSelect = $("#used_camp");
    var campUsedQtyDiv = $("#camp_used_qty");

    // Hide the camp_used_qty div initially
    if (campUsedSelect.val() === "Un Used") {
        campUsedQtyDiv.hide();
    }

    // Add event listener to the camp_used select element
    campUsedSelect.on("change", function() {
        if (campUsedSelect.val() === "Used") {
            // Show the camp_used_qty div if "Used" is selected
            campUsedQtyDiv.show();
        } else {
            // Hide the camp_used_qty div for other options
            campUsedQtyDiv.hide();
        }
    });
});
</script>



@endsection
