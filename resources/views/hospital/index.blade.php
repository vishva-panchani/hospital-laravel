@extends('template.layout')

@section('contents')

<h1>This is All Hospital Information.....</h1>

<table class="table table-striped table-bordered ">
    <thead>
    <tr>
        <th>ID</th>
        <th>Patients Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr> 
    </thead>
   
    <tbody>
        @forelse($patients as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>
                <a href="{{route('hospital.show',$patient->id)}}">{{$patient->name}}</a>
            </td>
            <td>
                <a class="btn btn-secondary" href="{{route('hospital.edit',$patient->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('hospital.destroy',$patient->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Trash" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">No data....</td>
        </tr>            
        @endforelse
    </tbody>

</table>
@endsection