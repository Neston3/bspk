@extends("layouts.master")

@section('page_css')
    <style>


    </style>
@endsection

@section('content-title')
    Import
@endsection

@section('content-sub-title')
    <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#"> Import </a></li>
@endsection

@section("content")


    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('/upload/submit') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-sm-4">
                        <input class="form-control" type="file" id="upload_file" name="upload_file[]" onchange="preview_image();"
                        formenctype="multipart/form-data" multiple required>
                    </div>

                    <br>

                    <div class="col-sm-4">
                        <select name="taskoption" title="Pick a number" class="form-control selectpicker" id="select_option" required>
                            <option value="0">Select category</option>
                            <option value="embroidering">Embroidering</option>
                            <option value="fabrics">Home fabrics</option>
                            <option value="school_office">School and Offices</option>
                            <option value="Tailoring">Tailoring</option>
                        </select>
                    </div>

                    <br>

                    <div class="col-sm-4">
                        <textarea class="form-control" name="detail" id="detail" cols="30" rows="10" placeholder="Describe the item"></textarea>
                    </div>

                    <br>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary shadow-2 mb-4">
                            Upload Image
                        </button>
                    </div>

                    <div class="col-sm-4">
                        <div id="image_preview"></div>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection


@push("page_scripts")
    <script src="{{ url('js/my.js') }}"></script>
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="{{ url('js/Sidebar-Menu.js') }}"></script>
    <script src="{{asset("plugins/bootstrap-datetimepicker/js/bootstrap-datepicker.min.js")}}"></script>
@endpush
