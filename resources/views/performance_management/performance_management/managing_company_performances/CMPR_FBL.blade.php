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
                    <h3 class="text-center" ><b>COMPANY MONTHLY PERFORMANCE REPORT - FILTER BY LEVELS</b></h3><br>
                    <table>
                        <tr>
                            <div class="form-group">
                                <td class="text-right":><b>Month:</b></td>
                                <td><select class="form-control col-md-6">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select></td>
                                <td class="text-right"><b>Performance Appraisal Level: </b></td>
                                <td><select class="form-control col-md-6">
                                    <option value="1">Outstanding</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                            </div>
                        </tr>
                        <tr>
                            <td class="text-right":><b>Year:</b></td>
                            <td><input type="number" name="year" class="form-control col-md-6" value=""></td>
                            <td colspan="2" class="text-right"><input type="submit" name="" value="Print out" class="btn btn-warning"></td>
                        </tr>
                    </table><br>
                    <div class="table-responsive Training">s
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
                                <td>Outstanding</td>
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
                                <td>Outstanding</td>
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
                                <td>Outstanding</td>
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
                                <td>Outstanding</td>
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
                                <td>Outstanding</td>
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