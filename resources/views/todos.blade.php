@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Completed</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todos as $todo)
                            <tr>
                                <td>{{$todo->title}}</td>
                                <td>{{$todo->completed == 1? 'Completed' : 'Not completed' }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection