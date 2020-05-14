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
    <div class="col-md-12">
        <div class="panel panel-card margin-b-30">
            <!-- Start .panel -->
            <div class="panel-heading">
                <h4 class="panel-title"> Inline form</h4>
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>
            </div>
            <div class="panel-body">
                <form role="form" class="form-inline" style="text-align: center">
                    <div class="form-group">
                        <label  class="sr-only">DEMAND</label>
                        <input type="number"
                               placeholder="Enter daily demand"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2" class="sr-only">Frequency</label>
                        <input type="number"
                               placeholder="Enter frequency"
                               class="form-control">
                    </div>

                    <button class="btn btn-primary" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>DEMAND</th>
                                <th>Frequency</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody >
                            <tr>
                                <td>15</td>
                                <td>20</td>
                                <td>
                                    <button class="btn btn-primary" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>20</td>
                                <td>
                                    <button class="btn btn-primary" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>20</td>
                                <td>
                                    <button class="btn btn-primary" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div  style="text-align: center; margin: 20px">
                        <button class="btn btn-primary" type="submit">confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
