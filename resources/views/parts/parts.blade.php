@extends("master")

@section("content")

<a href="/parts/create" class="btn btn-success">Create New Part</a>
<table class="table  table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">MFG PN</th>
        <th scope="col">Description</th>
        <th scope="col">Create AT</th>
    </tr>
    </thead>
    <tbody>
    @foreach($parts as $index=>$part)
    <tr>
        <th scope="row">{{$index+1}}</th>
        <td>{{$part->mfg_pn}}</td>
        <td>{{$part->description}}</td>
        <td>{{$part->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
