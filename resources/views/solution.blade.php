@extends('layouts.simulation')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title" style="margin-top: 5%;">
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
        <h4 class="panel-title"> Monte Carlo Simulation</h4>
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
        </div>
    </div>
    <div class="panel-body">
        <form role="form" class="form-inline" style="text-align:center" action="{{route('experiment')}}" method="POST">
            @csrf
            <label style="margin:1%">Choose Random Numbers</label>
            <div style="margin:1%" >
                <select class="selectpicker" multiple data-live-search="true" name="numbers[]">
                    @foreach($random_numbers as $number)
                        <option>{{$number}}</option>
                    @endforeach
                </select>
            </div>
            <div class="" hidden>
                <select class="form-control" multiple name="demand[]">
                    @foreach($demand as $d)
                        <option selected >{{$d}}</option>
                    @endforeach
                </select>
            </div>
            <div class="" hidden>
                <select class="form-control" multiple name="interval_keys[]">
                    @foreach($interval_keys as $key)
                        <option selected>{{$key}}</option>
                    @endforeach
                </select>
            </div>
            <div class="" hidden>
                <select class="form-control" multiple name="interval_values[]">
                    @foreach($interval_values as $values)
                        <option selected>{{$values}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" style="margin:1%" type="submit">calculate</button>

        </form>
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
