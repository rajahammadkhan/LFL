@extends('cms.layouts.masterpage')
@section('title', 'Camp Whatsapp')
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
                 <h4 class="mb-sm-0">Camp Whatsapp</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$isEdit ? 'Edit' : 'Add'}} Camp Whatsapp</li>
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
                                            <form action="{{ route('sentwhatsapp.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @if ($isEdit)
                                                    <input type="hidden" name="_method" value="put">
                                                @endif

                                                <div class="row">
                                                    <div class="col-md-6 mt15 pl30">
                                                        <h5 class="mb-sm-0">Camp Whatsapp / {{$isEdit ? 'Edit' : 'Add'}}</h5>
                                                    </div>

                                                    <div class="col-md-6 text-end">
                                                        <a href="{{route('campwhatsapps')}}" class="btn btn-primary"> 
                                                        <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>    
                                                        &nbsp; | &nbsp; Go Back</a>

                                                        <button type="submit" class="btn btn-primary mb-2 mr-4 ml-3 mt-2"> 
                                                        <svg viewBox="0 0 24 24" width="10" height="10" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>    
                                                        &nbsp; | &nbsp; {{ $isEdit ? 'Update' : 'Save' }}</button>
                                                    </div>
                                                </div>

                                                <div class="widget-content widget-content-area">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="Code">Code <span class="text-danger"> * </span> 
                                                                        <span>|</span>
                                                                        <a href="https://app.trengo.com/admin/wa_templates" style="color: red;font-size: 13px;" target="_blank">Trengo Template Link</a>
                                                                        <span>|</span>
                                                                        <a href="{{url('')}}/assets/images/ref.png" style="color: red; font-size: 13px;" target="_blank">Referral Image Code Copy</a>
                                                                    </label>
                                                                    <input type="text" name="name" id="Code" value="{{ $blog->name ?? old('name') ?? null }}"
                                                                        class="form-control" placeholder="Enter Code..." required>
                                                                    @if ($errors->has('name'))
                                                                        <div class="error">{{ $errors->first('name') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-12 mt10">
                                                            <label>Write WhatsApp Msg</label>
                                                            <textarea cols="200" class="summernote" name="description">{!! $reviews->description ?? null !!}</textarea>
                                                        </div>   -->

                                                        <div class="col-md-12 mt-2">
                                                            <div class="row">
                                                                <div class="col-md-12 mb-2">
                                                                    <label for="">Number <br>
                                                                        <span class="text-danger">1. Separate numbers with comma (,) * </span><br>
                                                                        <span class="text-danger">2. Number will start with 971. Do not enter (+)* </span><br>
                                                                        <span class="text-danger">3. Write the number like this 971000000000, 971000000001, 971000000002 </span>
                                                                    </label>
                                                                    <input type="text" name="writenumber[]" value="{{ $blog->name ?? old('name') ?? null }}"
                                                                        class="form-control" placeholder="Enter Number">
                                                                    @if ($errors->has('name'))
                                                                        <div class="error">{{ $errors->first('name') }}</div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                          <div class="card component-card_2">
                                                            <div class="card-body">
                                                                <input type="checkbox" class="checkbox" id="checkbox1" /> Total List Number {!! $count !!}

                                                                <span id="getcount" style="float: right;"></span>
                                                                <ul class="list-group task-list-group" style="display: block; max-height: 500px; overflow-y: scroll;" >
                                                                  @foreach ($custmerlists as $menus)
                                                                    <li class="list-group-item parent-menu mt-3" style="padding: 0.3rem 1rem; position: relative; display: inline-block; float: left; width: 20%; margin-bottom: 10px; margin-left: 20px;">
                                                                        <input type="checkbox" class="new-control-input" name="numbers[]" style="cursor: pointer;" value="+{{ $menus->phone }}" /> 
                                                                        <span style="cursor: pointer;">{{ $menus->phone }}</span> 
                                                                    </li>
                                                                  @endforeach
                                                                </ul>

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
@endsection
@section('bottom-mid-scripts')

@endsection
@section('bottom-bot-scripts')
    
@endsection
