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
                <div class="card-header">Training Management / Individual Training</div>

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
                    <h3 class="text-center" ><b>INDIVIDUAL ANNUAL TRAINING PLAN</b></h3><br>
                    <p class="text-left" ><b>GENERAL INFO</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td><label for="Satff_Name">Staff name:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="satffName" value="{{$personal_info->first_name}} {{$personal_info->middle_name}} {{$personal_info->last_name}}" disabled="disabled"><td></td>
                            </div>
                          
                            <div class="form-group">
                                <td><label for="Supervisor">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" value="{{$personal_info->supervisor_name}}" disabled="disabled" ><td></td>
                            </div>
                             <div class="form-group">
                                <td><label for="workingLocation">Working Location:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="workingLocation" value="" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="Staff_Number">Staff number:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="staffNumber" value="{{$personal_info->staff_number}}" disabled="disabled" ><td></td>
                            </div>
                            
                            <div class="form-group">
                                <td><label for="supervisorJobTitle">Supersivor Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorJobTitle" value="{{$personal_info->supervisor_job_title}}" disabled="disabled" ><td></td>
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
                                <td><label for="dateOfHire">Date joining:
                                </label></td>
                                <td><input type="Date" class="form-control col-md-10" name="dateOfHire" value="{{$personal_info->date_of_hire}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="dateInCurrentJobTitle">Date in current position:
                                </label></td>
                                <td><input type="date" class="form-control col-md-10" name="dateInCurrentJobTitle" value="{{$personal_info->date_in_current_job_title}}" disabled="disabled" ><td></td>
                            </div>
                            
                        </tr>
                    </table><br>
                    <p class="text-left" ><b>ANNUAL TRAINING PLAN</b></p>
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
                            <td>Training & Development period from:</td>
                            <div class="form-group">
                                <td><input type="text" name="dateFrom" class="datepicker form-control col-md-8" value=""></td>
                                <td><b>To</b></td>
                                <td><input type="text" name="dateTo" class="datepicker form-control col-md-8" value=""></td>
                            </div>
                        </tr>
                    </table><br>  
                    <div class="table-responsive Training">
                        <table class="table table-bordered text-center table-striped" id="dtHorizontalExample" >
                            <thead>
                                <tr>
                                    <th rowspan="2">Choose</th>
                                    <th rowspan="2">Name of Training &<br> Development Program</th>
                                    <th rowspan="2">Disciplines<br>(Geology, Finance, HRM, Legal …)</th>
                                    <th rowspan="2">Type of Program<br>(e-Learning, Classroom …)</th>
                                    <th rowspan="2">Purpose of program<br>(Close Competency Gaps, Develop Competencies, Doctorate …)</th>
                                    <th rowspan="2">Provider</th>
                                    <th rowspan="2">Training Facilitator</th>
                                    <th rowspan="2">Location</th>
                                    <th colspan="2">Training Fee</th>
                                    <th colspan="2">Training & Development Schedule</th>
                                    <th rowspan="2">Note</th>
                                    <th colspan="3">Status</th>
                                </tr>
                                <tr>
                                    <th>US$</th>
                                    <th>VND</th>
                                    <th>From Date</th>
                                    <th>To Date </th>
                                    <th>Finished</th>
                                    <th>Unfinished</th>
                                    <th>Submitted</th>
                                  
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($course as $course)
                                <tr>
                                    <td scope="row"><input type="radio" name="course" value="{{$course->id}}" class="form-control"></th>
                                    <td ><input type="text" name="course_count" value="{{$course->course_name}}" class="form-control"></td>
                                    <td ><input type="text" name="discipline" value="{{$course->discipline}}" class="form-control"></td>
                                    <td ><input type="text" name="course_type" value="{{$course->course_type}}" class="form-control"></td>
                                    <td ><input type="text" name="course_objectives" value="{{$course->course_objectives}}" class="form-control"></td>
                                    <td ><input type="text" name="provider" value="{{$course->provider}}" class="form-control"></td>
                                   
                                    <td rowspan=""><input type="text" name="location" class="form-control"></td>
                                    <td rowspan=""><input type="text" name="us" class="form-control" ></td>
                                    <td rowspan=""><input type="text" name="vnd" class="form-control" ></td>
                                    <td ><input type="text" name="FromDate" class="form-control"></td>
                                    <td ><input type="text" name="ToDate" class="form-control"></td>
                                    <td>
                                        <input type="text" name="note" class="form-control">
                                    </td>
                                    <td><input type="text" name="Facilitator" class="form-control"> </td>
                                    <td><input type="text" name="finished" class="form-control"> </td>
                                    <td><input type="text" name="unfinished" class="form-control"> </td>
                                    <td><input type="text" name="submitted" class="form-control"> </td>

                                </tr>
                            
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                    <div class="form-group text-center">
                        <label for="submit"><b>SUBMIT TO SUPERVISOR FOR APPROVAL:</b>&emsp;</label>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success col-md-3">
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection