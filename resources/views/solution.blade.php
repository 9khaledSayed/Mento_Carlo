@extends('layouts.simulation')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title" style="margin-top: 5%;">
            <h1>Solution <small></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">Solution</li>
            </ol>
        </div>
    </div>
</div>
<div class="panel panel-card margin-b-30 ">
    <!-- Start .panel -->
    <div class="panel-heading">
        <h4 class="panel-title"> Mento Carlo Simulation</h4>
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>DAILY DEMAND </th>
                <th>PROBABILITY</th>
                <th>CUMULATIVE PROBABILITY</th>
                <th>INTERVAL OF RANDOM NUMBERS</th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($demand); $i++)
                <tr>
                    <td>{{$demand[$i]}}</td>
                    <td>{{$probabilities[$i]}}</td>
                    <td>{{$cumulative[$i]}}</td>
                    <td>{{$interval_keys[$i]}} to {{$interval_values[$i]}}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
