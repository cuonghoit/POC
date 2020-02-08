@extends('layouts.app')

@section('content')
<style type="text/css">
    #dtHorizontalExample th, td {
    white-space: nowrap;
    }
    table{
        width: 100%;
    }
    
</style>
<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
               <!--  <div class="card-header">Training Management / Training-implementation</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>PERFORMANCE MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>PERFORMANCE MANAGEMENT REPORT</b></h3><br>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td class="text-right":><b>Staff Name:</b></td>
                                <td><input type="number" name="staffName" class="form-control col-md-12" value=""></td>
                                <td class="text-right":><b>Staff Number:</b></td>
                                <td><input type="number" name="staffNumber" class="form-control col-md-12" value=""></td>
                                <td class="text-right":><b>Department:</b></td>
                                <td><select name="department" class="form-control col-md-12" value="">
                                    <option value="">Department</option>
                                    <option value="">Department</option>
                                    <option value="">Department</option>
                                </select></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td class="text-right":><b>From Date:</b></td>
                                <td><input type="date" name="formDate" class="form-control col-md-12" value=""></td>
                                <td class="text-right":><b>To Date:</b></td>
                                <td><input type="date" name="toDate" class="form-control col-md-12" value=""></td>
                                <td colspan="2" class="text-right"><input type="submit" name="" value="Print out" class="btn btn-warning"></td>
                            </div>
                        </tr>
                    </table><br>
                    <div class="table-responsive Training">
                        <table class="table table-bordered table-striped text-center">
                            <tr>
                                <th rowspan="2">NO.</th>
                                <th rowspan="2">Employee Name</th>
                                <th rowspan="2">Job Title</th>
                                <th colspan="7">Rating Monthly MSC Objectives (Achieved or Not)</th>
                                <th rowspan="2">Monthly Rates</th>
                                <th rowspan="2">Monthly Performance Appraisal Level</th>
                            </tr>
                            <tr>
                                <th>Must-Do 1</th>
                                <th>Must-Do 2</th>
                                <th>Must-Do 3</th>
                                <th>Must-Do 4</th>
                                <th>Should-Do 1</th>
                                <th>Should-Do 2</th>
                                <th>Could-Do 1</th>
                            </tr>
                            <tr class="bg-primary">
                                <th></th>
                                <th>Department:</th>
                                <td>Development</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-primary">
                                <th></th>
                                <th>Department:</th>
                                <td>Drilling</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection