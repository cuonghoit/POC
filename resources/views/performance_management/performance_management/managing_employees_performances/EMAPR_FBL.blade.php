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
                    <h3 class="text-center" ><b>EMPLOYEE MULTI-ANNUAL PERFORMANCE REPORT - FILTER BY LEVELS</b></h3><br>
                    <p class="text-left" ><b>EMPLOYEE INFO</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td><label for="Satff_Name" >Name:
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
                            <td><p class="text-left" ><b>ANNUAL MSC CONTENT & RATING RECORDS</b></p></td>
                            <div class="form-group">
                                <td colspan="4" class="text-right"><input type="submit" class="btn btn-warning"  ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td class="text-right"><b>From Year</b></td>
                                <td><input type="number" name="year" class="form-control col-md-10" value=""></td>
                                <td class="text-right"><b>To Year</b></td>
                                <td><input type="number" name="year" class="form-control col-md-10" value=""></td>
                                <td><select class="form-control">
                                    <option>Very good</option>
                                    <option>Very good</option>
                                    <option>Very good</option>
                                </select></td>
                            </div>
                        </tr>
                    </table><br>
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
                    <div class="table-responsive Training">
                        <table class="table table-bordered text-center table-striped" id="dtHorizontalExample" >
                            <tr>
                                <th>Year</th>
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>May</th>
                                <th>Jun</th>
                                <th>Jul</th>
                                <th>Aug</th>
                                <th>Sept</th>
                                <th>Oct</th>
                                <th>Nov</th>
                                <th>Dec</th>
                                <th>Rates</th>
                                <th>Performance Appraisal Levelx`</th>
                            </tr>
                            <tr>
                                <th>2016</th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>2018</th>
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