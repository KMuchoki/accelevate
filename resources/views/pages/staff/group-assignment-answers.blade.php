@extends('layouts.bootstrap')

@section('content')
<div class="container">
    <div class="row mt-50" style="min-height:400px">
        <div class="col-md-8 col-md-offset-2">
           <p class="text-right">
                <a href="{{ route('staff.group-assignments', ['id' => $group->id]) }}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> BACK</a>

                  
            </p>
            
            <div class="panel panel-info">
                <div class="panel-heading">{{ $assignment->question }}</div>

                <div class="panel-body">
                   

                    <div class="row">
                        <div class="col-lg-12">
                           <h4>Answers:</h4>
                            @if(count($answers))
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student</th>
                                            
                                            <th>Answer</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($answers as $answer)
                                            <tr>
                                                <td>{{ $answer->user->name }}</td>
                                                
                                                
                                                <td>{{ $answer->answer }}</td>
                                                <td>{{ $answer->created_at->diffForHumans() }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                No answers to this question
                            @endif
   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
