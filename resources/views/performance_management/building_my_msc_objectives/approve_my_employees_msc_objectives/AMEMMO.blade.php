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
<div class="">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
                <div class="card-header">
                    Performance Management / Building My MSC Objectives / Approving My Employees MSC Objectives / Approving My Employees Monthly MSC Objectives
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('approveMyEmployeeMscMonthly',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>{{  __("PERFORMANCE MANAGEMENT SYSTEM") }}</b></h4><br>
                    <h3 class="text-center" ><b>APPROVE MY STAFF MONTHLY MSC OBJECTIVES</b></h3><br>
                        <div class="row">


                        <div class="col-md-2">
                            <p>Select Staff:</p>
                        </div>
                        <div class="col-md-3">
                            <select class="selectpicker form-control" data-live-search="true" name = "employee">
                                <option>Select Staff</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->user_id }}" @if($employee == $user->user_id) selected="selected" @endif>{{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <p>Select Month/Year:</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="dateFrom" class="datepicker-months form-control col-md-10 " value="{{ $year }}">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success btn-search">Search</button>
                        </div>
                    </div>
                    <p class="text-left" ><b>GENERAL INFO</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td><label for="Satff_Name">Staff name:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="staffName" value="{{$personal_info->first_name}} {{$personal_info->middle_name}} {{$personal_info->last_name}} " disabled="disabled"><td></td>
                            </div>

                            <div class="form-group">
                                <td><label for="Supervisor">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" value="{{$personal_info->supervisor_name}}" disabled="disabled" ><td></td>
                            </div>
                             <div class="form-group">
                                <td><label for="workingLocation">Working Location:</label></td>
                                <td>
                                    <input type="text" class="form-control col-md-10" name="workingLocation" value="{{$personal_info->working_location}}"  disabled="disabled">
                                </td>

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
                            <div class="form-group">
                                <td><label for="dateOfHire">Date joining:
                                </label></td>
                                <td><input type="Date" class="form-control col-md-10" name="dateOfHire" value="{{$personal_info->date_of_hire}}" disabled="disabled" ><td></td>
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
                            <div class="form-group">
                                <td><label for="dateInCurrentJobTitle">Date in current position:
                                </label></td>
                                <td><input type="date" class="form-control col-md-10" name="dateInCurrentJobTitle" value="{{$personal_info->date_in_current_job_title}}" disabled="disabled" ><td></td>
                            </div>

                        </tr>

                    </table>

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
                    <br>
                    <div class="table-responsive">
                    <table class="table table-bordered text-center table-striped">
                        <thead>
                            <tr class="bg-success">
                                <th>No.</th>
                                <th>
                                    Objective Category
                                </th>
                                <th>
                                    SMART Objectives and Monthly Milestone <br> (MSC)(Verb/Ojective/Timing/Result)
                                </th>
                                <th>
                                    Milestone
                                </th>

                                <th>
                                    Action Plans to Achieve Objectives
                                </th>
                                <th>
                                    STATUS
                                </th>
                                <th>
                                    Note
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($msc_performance as $msc_performance)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    {{$msc_performance->objective_category}}
                                </td>
                                <td>
                                    {{$msc_performance->milestone_behavior}}
                                </td>
                                <td>
                                    {{$msc_performance->milestone}}
                                </td>

                                <td>
                                    {{$msc_performance->action_to_chieve}}
                                </td>
                                 <td>
                                     {{$msc_performance->name}}
                                </td>
                                <td>
                                    <input type="text" disabled="disabled">
                                </td>
                            </tr>
                        @endforeach
                            <tr >
                                <td colspan="7" class="text-left">
                                    Comment:
                                    <input type="text" name="comment" class="col-md-6">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    </div>
                    <div class="text-center">
                            <input type="submit" name="submit" class="btn btn-success" value="APPROVE">
                        <button class="btn btn-danger btn-reject" data-action="{{ route('rejectMyEmployeeMscMonthly',Auth::user()->id) }}"  >REJECT</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
