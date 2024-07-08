@extends('template.layout')
@section('contents')
<h1>Patients Details</h1>
<h5>{{$hospital->name}}</h5>
Medicines:
<h6>{{$hospital->medicines}}</h6>
Disease:
<h6>{{$hospital->disease}}</h6>

    <form action="{{route('hospital.store')}}" method="post">
        @csrf
        <input type="hidden" name="patients_id" value="{{$hospital->id}}">
        <div class="form-group">
            <label>Text Area</label>
            <textarea  name="med_diseases" class="form-control" rows="3"></textarea>
        </div>
        <input type="submit" class="btn btn-info" value="Visit Info">
    </form>

@endsection