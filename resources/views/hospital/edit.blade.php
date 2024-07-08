@extends('template.layout')
@section('contents')
<h1>Edit Patients Details.....</h1>
<form action="{{route('hospital.update',$patients->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="container">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$patients->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile_no</label>
            <input type="text" class="form-control" name="mobile" value="{{$patients->mobile}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Diseases</label>
            <input type="text" class="form-control" name="disease" value="{{$patients->disease}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Medicines</label>
            <input type="text" id="editor" class="form-control" name="medicines" rows="3" value="{{$patients->medicines}}">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>

    </div>
</form>
<script>
    ClassicEditor
        .create( document.querySelector('#editor'))
        .catch(error=>{
            console.error(error);
        });
</script>-
@endsection