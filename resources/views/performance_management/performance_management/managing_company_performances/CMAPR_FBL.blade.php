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
                    <h3 class="text-center" ><b>COMPANY MULTI-ANNUAL PERFORMANCE REPORT - FILTER BY LEVELS</b></h3><br>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td class="text-right"><b>Form Year: </b></td>
                                <td><input type="number" name="year" class="form-control col-md-6" value=""></td>
                                <td class="text-right"><b>Performance Appraisal Level: </b></td>
                                <td><select class="form-control">
                                    <option value="1"> Very Good</option>
                                    <option value="2"> 3</option>
                                    <option value="3"> 2</option>
                                </select></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td class="text-right"><b>To Year: </b></td>
                                <td><input type="number" name="year" class="form-control col-md-6" value=""></td>
                                <td class="text-right" colspan="2"><input type="submit" name="" value="Print out" class="btn btn-warning"></td>
                            </div>
                        </tr>
                    </table><br>
                    <div class="table-responsive Training">s
                        <table class="table table-bordered table-striped text-center">
                            <tr>
                                <th>No.</th>
                                <th>Employee Name</th>
                                <th>Job Title</th>
                                <th>Year</th>
                                <th>Rating</th>
                                <th>Performance Appraisal Level</th>
                            </tr>
                            <tr class="bg-primary">
                                <th></th>
                                <th>Department:</th>
                                <td>Development</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td rowspan="3">1</td>
                                <td>Ho Van thi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Very Good</td>
                            </tr>
                            <tr>
                                <td>Ho Van thi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Very Good</td>
                            </tr>
                            <tr>
                                <td>Ho Van thi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Very Good</td>
                            </tr>
                            <tr>
                                <td>2</td>
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
                            </tr>
                            <tr>
                                <td>4</td>
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