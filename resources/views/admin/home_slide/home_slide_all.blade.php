@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Home Slide Page </h4>

            <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description1</label>
                <div class="col-sm-10">
                    <input name="description1" class="form-control" type="text" value="{{ $homeslide->description1 }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description2</label>
                <div class="col-sm-10">
                    <input name="description2" class="form-control" type="text" value="{{ $homeslide->description2 }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description3</label>
                <div class="col-sm-10">
                    <input name="description3" class="form-control" type="text" value="{{ $homeslide->description3 }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

             
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection 