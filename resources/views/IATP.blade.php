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
                <div class="card-header">Training Management / Indidual Training</div>

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
                                <td><label for="Background">Background:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="backGround" value="{{$personal_info->background}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="Supervisor">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" value="{{$personal_info->supervisor_name}}" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="Staff_Number">Staff number:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="staffNumber" value="{{$personal_info->staff_number}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="Education">Education/Academic degree:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="education" value="{{$personal_info->education}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="supervisorJobTitle">Supersivor Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorJobTitle" value="{{$personal_info->supervisor_job_title}}" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="email">Email:
                                </label></td>
                                <td><input type="email" class="form-control col-md-10" name="email" value="{{$personal_info->email}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="jobTitle">Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="jobTitle" value="{{$personal_info->job_title}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="supervisorEmail">Supervisor Email:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorEmail" value="{{$personal_info->supervisor_email}}" disabled="disabled" ><td></td>
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
                            <div class="form-group">
                                <td><label for="department">Department:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="department" value="{{$personal_info->department}}" disabled="disabled" ><td></td>
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
                                <td><input type="date" name="dateFrom" class="form-control col-md-8" value=""></td>
                                <td><b>To</b></td>
                                <td><input type="date" name="dateTo" class="form-control col-md-8" value=""></td>
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
                                    <th rowspan="2">Location</th>
                                    <th colspan="2">Training Fee</th>
                                    <th colspan="12">Training & Development Schedule</th>
                                </tr>
                                <tr>
                                    <th>US</th>
                                    <th>VND</th>
                                    <th>Jan</th>
                                    <th>Feb</th>
                                    <th>Mar</th>
                                    <th>Apr</th>
                                    <th>May</th>
                                    <th>Jun</th>
                                    <th>Jul</th>
                                    <th>Aug</th>
                                    <th>Sep</th>
                                    <th>Oct</th>
                                    <th>Now</th>
                                    <th>Dec</th>
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
                                    @if(!isset($i))
                                    <td rowspan="{{$course_count}}"><input type="text" name="location" class="form-control"></td>
                                    <td rowspan="{{$course_count}}"><input type="text" name="us" class="form-control" ></td>
                                    <td rowspan="{{$course_count}}"><input type="text" name="vnd" class="form-control" ></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="1"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="2"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="3"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="4"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="5"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="6"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="7"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="8"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="9"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="10"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="11"></td>
                                    <td rowspan="{{$course_count}}"><input type="checkbox" name="month[]" value="12"></td>
                                    @endif
                                </tr>
                                <?php $i=1; ?>
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