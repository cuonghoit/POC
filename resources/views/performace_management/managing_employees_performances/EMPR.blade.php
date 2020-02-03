@extends('layouts.app')

@section('content')
<style type="text/css">
    #dtHorizontalExample th, td {
    white-space: nowrap;
    }
    .Training table tbody td input[type=text]{
        width: 210px;
    }

    
</style>
<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('postIATP',$personal_info->user_id)}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>TRAINING MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>EMPLOYEE MONTHLY PERFORMANCE REPORT</b></h3><br>
                    <p class="text-left" ><b>EMPLOYEE INFO</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td><label for="Satff_Name">Name:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="satffName" value="{{$personal_info->first_name}} {{$personal_info->middle_name}} {{$personal_info->last_name}}" disabled="disabled"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="email">Email:
                                </label></td>
                                <td><input type="email" class="form-control col-md-10" name="email" value="{{$personal_info->email}}" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="jobTitle">Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="jobTitle" value="{{$personal_info->job_title}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="department">Department:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="department" value="{{$personal_info->department}}" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="Supervisor">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" value="{{$personal_info->supervisor_name}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="supervisorEmail">Supervisor Email:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorEmail" value="{{$personal_info->supervisor_email}}" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td colspan="5" class="text-right"><input type="submit" class="btn btn-warning"  ><td></td>
                            </div>
                        </tr>
                    </table><br>
                    <p class="text-left" ><b>MONTHLY MSC CONTENT& RATE RECORDS</b></p>
                    @if(count($errors)>0)
                        <div class="atler">
                            @foreach($errors->all() as $er)
                                <b class="text-danger">{{$er}}</b><br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('notice'))
                        <div class="text-danger">
                            <b>{{session('notice')}}</b>
                        </div>
                    @endif
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td class="text-right":><b>Month:</b></td>
                                <td><select name="Month" class="form-control">
                                    <option value="1">Jan</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Mar</option>
                                    <option value="4">Apr</option>
                                    <option value="5">May</option>
                                    <option value="6">Jun</option>
                                    <option value="7">Jul</option>
                                    <option value="8">Aug</option>
                                    <option value="9">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select></td>
                                <td class="text-right"><b>Year</b></td>
                                <td><input type="number" name="year" class="form-control col-md-6" value=""></td>
                            </div>
                        </tr>
                    </table><br>  
                    <div class="table-responsive Training">
                        <table class="table table-bordered text-center table-striped" id="dtHorizontalExample" >
                            <tr>
                                <th>No.</th>
                                <th>Objective Category</th>
                                <th>Objective Contents</th>
                                <th>Mile-stones</th>
                                <th>Criteria for Success</th>
                                <th>Action Plans to Achieve Objectives</th>
                                <th>Rate</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Must-Do 1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr><tr>
                                <td>2</td>
                                <td>Must-Do 2</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Must-Do 3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Must-Do 4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Should-Do 1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Should-Do 1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Could-Do 1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="6">Total Score</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5">Convert to Performance Appraisal Level</td>
                                <td colspan="2">Excellent / …</td>
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