@extends('template.layout')
@section('contents')

<h1>Add Patients Information here.....</h1>

<form action="{{route('hospital.store')}}" method="POST">
    @csrf
    <div class="container">
        <div class="mb-3">
            <label class="form-label"> Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile_no</label>
            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number ">
            @error('mobile')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Diseases</label>
            <input type="text" class="form-control" name="disease">
            @error('disease')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Medicines</label>
            <textarea id="editor" class="form-control" name="medicines"></textarea>
            @error('medicines')
                {{$message}}
            @enderror
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
</form>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

    
@endsection