@extends('layouts.simulation')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title" style="margin-top: 5%;">
                <h1>Inventory Demand <small></small></h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">Inventory Demand</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-card margin-b-30">
            <!-- Start .panel -->
            <div class="panel-heading">
                <h4 class="panel-title"> Inventory Demand Info</h4>
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>
                @if(session('message'))
                <div class="alert alert-danger">
                    <i class="fa fa-frown-o" aria-hidden="true" style="font-size: 22px"></i> Please enter the daily demand and frequency and click the add button!
                </div>
                @endif
            </div>




                <form role="form" class="form-inline" style="text-align:center" action="/result" method="POST">
                 @csrf
                    <div class="panel-body">

            <div style="margin-bottom:3%">

                        <div class="form-group">
                        <label  class="sr-only">DEMAND</label>
                        <input id="demand_input" type="number"
                               placeholder="Enter daily demand"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2" class="sr-only">Frequency</label>
                        <input id="frequency_input" type="number"
                               placeholder="Enter frequency"
                               class="form-control">
                    </div>

                    <button class="btn btn-primary" onclick="add()" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>

            </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="text-align:center"> DEMAND</th>
                                <th style="text-align:center">Frequency</th>
                                <th style="text-align:center">ACTION</th>
                            </tr>
                            </thead>
                            <tbody id="table">

                            </tbody>
                        </table>
                    </div>

                    <input id="size" name="size_array" value="0" style="display:none">

                    <div  style="text-align: center; margin: 20px">

                        <button class="btn btn-primary" type="submit">confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        var size = document.getElementById('size');

        function add() {

            size.value++;

            var table         = document.getElementById('table');
            var demand_inp    = document.getElementById('demand_input').value;
            var frequency_inp = document.getElementById('frequency_input').value;

            if (demand_inp != "" && frequency_inp != "") {
                var T_R = document.createElement('tr');
                var T_D_1 = document.createElement('td');
                var T_D_2 = document.createElement('td');
                var T_D_3 = document.createElement('td');

                var inp_1 = document.createElement('input');
                inp_1.name = 'demand' + size.value;
                inp_1.value = demand_inp;
                inp_1.style.background = 'transparent';
                inp_1.style.border = '0px';
                inp_1.style.textAlign = 'center';

                var inp_2 = document.createElement('input');
                inp_2.name = 'frequency' + size.value;
                inp_2.value = frequency_inp;
                inp_2.style.background = 'transparent';
                inp_2.style.border = '0px';
                inp_2.style.textAlign = 'center';

                var trash_btn = document.createElement('button');
                trash_btn.className = 'btn btn-primary'
                trash_btn.setAttribute("type", "button");
                trash_btn.innerHTML = '<i class="fa fa-trash-o"></i>';
                trash_btn.addEventListener("click", function(){
                    remove( T_R )
                });

                T_D_1.appendChild(inp_1);
                T_D_2.appendChild(inp_2);
                T_D_3.appendChild(trash_btn);
                T_R.appendChild(T_D_1);
                T_R.appendChild(T_D_2);
                T_R.appendChild(T_D_3)
                table.appendChild(T_R);
            }else {alert('you must enter the daily demand & frequency');}
        }

        function remove(T_R) {
            size.value--;
            T_R.remove();
        }
    </script>
@endsection
