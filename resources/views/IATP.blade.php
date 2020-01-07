@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form>
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>TRAINING MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>INDIVIDUAL ANNUAL TRAINING PLAN</b></h3><br>
                    <p class="text-left" ><b>GENERAL INFO</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Staff name:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->First_Name}} {{$personal_info->Middle_Name}} {{$personal_info->Last_Name}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Background:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Background}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Supervisor_Name}}"><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Staff number:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Staff_Number}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Education/Academic degree:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Education}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Supersivor Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Supervisor_Job_Title}}"><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Email:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Email}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Job_Title}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Supervisor Email:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Supervisor_Email}}"><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Date joining:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Date_Of_Hire}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Date in current position:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Date_In_Current_Job_Title}}"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="exampleInputEmail1">Department:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" id="exampleInputEmail1" value="{{$personal_info->Department}}"><td></td>
                            </div>
                        </tr>
                    </table><br>
                    <p class="text-left" ><b>ANNUAL TRAINING PLAN</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <td>Training & Development period from:</td>
                            <div class="form-group">
                                <td><input type="date" name="date" class="form-control col-md-8" value=""></td>
                                <td><b>To</b></td>
                                <td><input type="date" name="date" class="form-control col-md-8" value=""></td>
                            </div>
                        </tr>
                    </table><br>   
                    <table class="table text-center ">
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Name of Training &<br> Development Program</th>
                            <th rowspan="2">Disciplines<br>(Geology, Finance, HRM, Legal …)</th>
                            <th rowspan="2">Type of Program<br>(e-Learning, Classroom …)</th>
                            <th rowspan="2">Purpose of program<br>(Close Competency Gaps, Develop Competencies, Doctorate …)</th>
                            <th rowspan="2">Provider</th>
                            <th rowspan="2">Location</th>
                            <th colspan="2">Training Fee</th>
                        </tr>
                        <tr>
                            <td>US$</td>
                            <td>VND</td>
                        </tr>
                        @foreach ($course as $co)
                        <tr>
                            <td><input type="radio" name="course" value="{{$co->Course_ID}}" class="form-control"></td>
                            <td>{{$co->Course_Name}}</td>
                            <td>{{$co->Discipline}}</td>
                            <td>{{$co->Course_Type}}</td>
                            <td>{{$co->Course_Objectives}}</td>
                            <td>{{$co->Provider}}</td>
                            <td><input type="text" name="" class="form-control" ></td>
                            <td><input type="text" name="" class="form-control" ></td>
                            <td><input type="text" name="" class="form-control" ></td>
                        </tr>
                        @endforeach
                    </table><br>
                    <table class="table text-center">
                        <tr>
                            <th colspan="12">Training & Development Schedule</th>
                        </tr>
                        <tr>
                            <td>Jan</td>
                            <td>Feb</td>
                            <td>Mar</td>
                            <td>Apr</td>
                            <td>May</td>
                            <td>Jun</td>
                            <td>Jul</td>
                            <td>Aug</td>
                            <td>Sep</td>
                            <td>Oct</td>
                            <td>Now</td>
                            <td>Dec</td>
                        </tr>
                        <div class="form-check">
                            <tr>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                            </tr>
                        </div>
                    </table>
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