@extends('layouts.app')

@section('content')
<style type="text/css">
    #dtHorizontalExample th, td {
    white-space: nowrap;
    }
    .Training table tbody td input[type=text]{
        width: 150px;
    }


</style>
<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
                <div class="card-header">
                    Performance Management / Building My MSC Objectives / Building My MSC Objectives / Building My Monthly MSC Objectives
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('submitMscAnnual',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>TRAINING MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>BUILDING MY ANNUAL MSC OBJECTIVES</b></h3><br>
                    <p class="text-left" ><b>GENERAL INFO</b></p>
                    <table style="width: 100%;">
                                                <tr>
                            <div class="form-group">
                                <td><label for="Satff_Name">Staff name:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="staffName" disabled="disabled" value="{{$personal_info->first_name}} {{$personal_info->middle_name}} {{$personal_info->last_name}} "><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="Supervisor">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" disabled="disabled" value="{{$personal_info->supervisor_name}}" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="Staff_Number">Staff number:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="staffNumber" disabled="disabled" value="{{$personal_info->staff_number}}" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="supervisorJobTitle">Supersivor Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorJobTitle" disabled="disabled" value="{{$personal_info->supervisor_job_title}}" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="jobTitle">Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="jobTitle" disabled="disabled" value="{{$personal_info->job_title}}" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="workingLocation">Working location:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="workingLocation" disabled="disabled" value="{{$personal_info->working_location}}" ><td></td>
                            </div>

                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="dateOfHire">Date joining:
                                </label></td>
                                <td><input type="Date" class="form-control col-md-10" name="dateOfHire" disabled="disabled" value="{{$personal_info->date_of_hire}}" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="dateInCurrentJobTitle">Date in current position:
                                </label></td>
                                <td><input type="date" class="form-control col-md-10" name="dateInCurrentJobTitle" disabled="disabled" value="{{$personal_info->date_in_current_job_title}}" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="department">Department:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="department" disabled="disabled" value="{{$personal_info->department}}" ><td></td>
                            </div>
                        </tr>
                    </table><br>
                    <p class="text-left" ><b>ANNUAL MSC OBJECTIVES</b></p>
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
                    <div class="table-responsive">
                    <table class="table table-bordered text-center text-nowrap table-striped">

                        <thead>
                            <tr>
                                <th rowspan="2">
                                    No.
                                </th>
                                <th rowspan="2">
                                    Objective Category
                                </th>
                                <th rowspan="2">
                                    SMART Objectives and Monthly Milestone <br> (MSC) (Verb/Objective/Timing/Result)
                                </th>

                                <th rowspan="2">
                                    Target to Archive
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    From Date
                                </th>
                                <th>
                                    To Date
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    NOTE
                                </th>
                                <th>
                                    STATUS
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                            @foreach($msc_performance as $msc_performance  )
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$msc_performance->objective_category}}</td>
                                <td>{{$msc_performance->milestone_behavior}}</td>
                                <td>{{$msc_performance->target_to_archive}}</td>
                                <td>{{$msc_performance->from_date}}</td>
                                <td>{{$msc_performance->to_date}}</td>
                                <td>{{$msc_performance->name}}</td>
                                <td>{{$msc_performance->note}}</td>
                                <td>{{$msc_performance->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    </div>
                     <br>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center text-nowrap table-striped">
                            <tr>
                                <div class="form-group">
                                    <td><label for="staff_sign">Staff Signature:
                                    </label></td>
                                    <td><input type="text" class="form-control col-md-12" name="staff_sign"></td>
                                </div>
                                <div class="form-group">
                                    <td><label for="manager_sign">Line Manager's Signature:
                                    </label></td>
                                    <td><input type="text" class="form-control col-md-12" name="manager_sign"></td>
                                </div>
                                <div class="form-group">
                                    <td><label for="hrm">HRM Recorded by HRM:
                                    </label></td>
                                    <td><input type="text" class="form-control col-md-12" name="hrm"></td>
                                </div>
                            </tr>
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
