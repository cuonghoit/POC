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
                    <form action="{{route('postIATP')}}" method="post">
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
                                <td><input type="text" class="form-control col-md-10" name="satffName" value="" disabled="disabled"><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="Background">Background:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="backGround" value="" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="Supervisor">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" value="" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="Staff_Number">Staff number:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="staffNumber" value="" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="Education">Education/Academic degree:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="education" value="" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="supervisorJobTitle">Supersivor Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorJobTitle" value="" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="email">Email:
                                </label></td>
                                <td><input type="email" class="form-control col-md-10" name="email" value="" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="jobTitle">Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="jobTitle" value="" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="supervisorEmail">Supervisor Email:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorEmail" value="" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="dateOfHire">Date joining:
                                </label></td>
                                <td><input type="Date" class="form-control col-md-10" name="dateOfHire" value="" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="dateInCurrentJobTitle">Date in current position:
                                </label></td>
                                <td><input type="date" class="form-control col-md-10" name="dateInCurrentJobTitle" value="" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="department">Department:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="department" value="" disabled="disabled" ><td></td>
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
                    <table class="table text-center ">
                        <tr>
                            <th rowspan="2">Chose</th>
                            <th rowspan="2">Name of Training &<br> Development Program</th>
                            <th rowspan="2">Disciplines<br>(Geology, Finance, HRM, Legal …)</th>
                            <th rowspan="2">Type of Program<br>(e-Learning, Classroom …)</th>
                            <th rowspan="2">Purpose of program<br>(Close Competency Gaps, Develop Competencies, Doctorate …)</th>
                            <th rowspan="2">Provider</th>
                            <th rowspan="2">Location</th>
                            <th colspan="2">Training Fee</th>
                        </tr>
                        <tr>
                            <td>US</td>
                            <td>VND</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="course" value="" class="form-control"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><input type="text" name="location" class="form-control" ></td>
                            <td><input type="text" name="uS" class="form-control" ></td>
                            <td><input type="text" name="vND" class="form-control" ></td>
                        </tr>
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
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="1"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="2"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="3"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="4"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="5"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="6"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="7"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="8"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="9"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="10"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="11"></td>
                                <td>&emsp;&emsp;<input type="checkbox" class="form-check-input" id="exampleCheck1" name="month[]" value="12"></td>
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