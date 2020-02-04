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
                    <h3 class="text-center" ><b>DEPARTMENT MULTI-ANNUAL PERFORMANCE REPORT</b></h3><br>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td class="text-right"><b>Department: </b></td>
                                <td><select class="form-control col-md-6">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                                <td class="text-right"><b>Company: </b></td>
                                <td colspan="2"><input type="text" name="" class="form-control col-md-6"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td class="text-right"><b>Form year: </b></td>
                                <td><input type="text" name="" class="form-control col-md-6"></td>
                                <td class="text-right"><b>TO year: </b></td>
                                <td><input type="text" name="" class="form-control col-md-6"></td>
                                <td class="text-right"><input type="submit" name="" value="Print out" class="btn btn-warning"></td>
                            </div>
                        </tr>
                    </table><br>
                    <div class="table-responsive Training">s
                        <table class="table table-bordered table-striped text-center">
                            <tr>
                                <th>NO.</th>
                                <th>Employee Name</th>
                                <th>Job Title</th>
                                <th>Year</th>
                                <th>Annual Average Rating</th>
                                <th>Annual Performance Appraisal Level</th>
                            </tr>
                            <tr>
                                <td rowspan="4">1</td>
                                <td rowspan="4">Ho Van Thi</td>
                                <td rowspan="4"></td>
                                <td>2016</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2017</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2018</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2019</td>
                                <td></td>
                                <td></td>
                            </tr>
<tr>
                                <td rowspan="4">2</td>
                                <td rowspan="4">Ho Thanh Tung</td>
                                <td rowspan="4"></td>
                                <td>2016</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2017</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2018</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2019</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td rowspan="4">3</td>
                                <td rowspan="4">Ho Van Thi</td>
                                <td rowspan="4"></td>
                                <td>2016</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2017</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2018</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2019</td>
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