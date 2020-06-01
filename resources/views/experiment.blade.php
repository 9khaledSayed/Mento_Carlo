@extends('layouts.simulation')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title" style="margin-top: 5%;">
            <h1>Simulating the experiment <small></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="active">Simulating the experiment</li>
            </ol>
        </div>
    </div>
</div>
<div class="panel panel-card margin-b-30 ">
    <!-- Start .panel -->
    <div class="panel-heading">
        <h4 class="panel-title">Simulating the experiment</h4>
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
        </div>
    </div>
    <div class="panel-body">

        <table class="table table-bordered">
            <thead>
            <tr >
                <th style="text-align: center">DAY</th>
                <th style="text-align: center">RANDOM NUMBER</th>
                <th style="text-align: center">SIMULATED DAILY DEMAND </th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($daily_demand); $i++)

            <tr style="text-align: center">
                <td>{{$i + 1}}</td>
                <td>{{$random_numbers[$i]}}</td>
                <td>{{$daily_demand[$i]}}</td>
            </tr>

            @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection

