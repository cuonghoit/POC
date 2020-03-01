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
                    Performance Management / Rating Performance / Approving My Employees Performance / Approving My Employees Annual Performance
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>{{  __("PERFORMANCE MANAGEMENT SYSTEM") }}</b></h4><br>
                    <h3 class="text-center" ><b>APPROVING MY EMPLOYEE ANNUAL PERFORMANCE</b></h3><br>
                    <form action="{{ route('searchAMEAP',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <table style="width: 50%;">
                           <tr>
                                <div class="form-group">
                                    <td>Select Year:</td>
                                    <td class="text-left"><input type="text" name="year" class="datepicker text-center form-control col-md-10"></td>
                                </div>
                                <td class="text-left">
                                        <select class="selectpicker form-control" data-live-search="true" name="employee">
                                            <option>Select employees</option>
                                            @foreach($users as $users)
                                            <option value="{{$users->user_id}}">{{$users->first_name}} {{$users->middle_name}} {{$users->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                <td class="text-left" ><button class="btn btn-success">Search</button></td>
                            </tr>
                        </table><br>
                    </form>
                    <form action="{{ route('approveMyEmployeeRateAnnual',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                                <td><label for="Staff_Number">Staff number:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="staffNumber" value="{{$personal_info->staff_number}}" disabled="disabled" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="supervisorJobTitle">Supersivor Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisorJobTitle" value="{{$personal_info->supervisor_job_title}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="jobTitle">Job title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="jobTitle" value="{{$personal_info->job_title}}" disabled="disabled" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="workingLocation">Working location:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="workingLocation" value="{{$personal_info->working_location}}" disabled="disabled" ><td></td>
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
                    <div class="table-responsive">
                    <table class="table table-bordered text-center table-striped text-nowrap">
                        <thead>
                            <tr>
                                <th rowspan="2">
                                    Month / Year
                                </th>
                                <th colspan="7">
                                    Achieved (√) or Not (x)
                                </th>
                                <th rowspan="2">
                                    Monthly Rates
                                </th>
                                <th rowspan="2">
                                    Monthly Performance Appraisal Level
                                </th>
                                <th rowspan="2">
                                    Supervisor Comments
                                </th>
                                <th rowspan="2">
                                    Status
                                </th>
                            </tr>
                            <tr>
                                <th>Must-Do 1</th>
                                <th>Must-Do 2</th>
                                <th>Must-Do 3</th>
                                <th>Must-Do 4</th>
                                <th>Should-Do 1</th>
                                <th>Should-Do 2</th>
                                <th>Could-Do 1</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rate_annual_performance as $rate_annual_performance)
                            <tr>
                                <td>
                                    {{ date('M-y', strtotime($rate_annual_performance->date)) }}
                                </td>
                                <td><input type="checkbox" disabled="disabled" @if($rate_annual_performance->must_do_1==1)  checked = "checked" @endif></td>
                                <td><input type="checkbox" disabled="disabled" @if($rate_annual_performance->must_do_2==1)  checked = "checked" @endif></td>
                                <td><input type="checkbox" disabled="disabled" @if($rate_annual_performance->must_do_3)  checked = "checked" @endif></td>
                                <td><input type="checkbox" disabled="disabled" @if($rate_annual_performance->must_do_4) checked = "checked" @endif></td>
                                <td><input type="checkbox" disabled="disabled" @if($rate_annual_performance->should_do_1) checked="checked" @endif></td>
                                <td><input type="checkbox" disabled="disabled" @if($rate_annual_performance->should_do_2) checked="checked" @endif></td>
                                <td><input type="checkbox" disabled="disabled" @if($rate_annual_performance->could_do_1) checked="checked" @endif ></td>
                                <td>{{$rate_annual_performance->monthly_rate}}</td>
                                <td>{{$rate_annual_performance->monthly_performance_level}}</td>
                                <td>{{$rate_annual_performance->note}}</td>
                                <td>{{ App\Http\Controllers\HomeController::getStatus($rate_annual_performance->status) }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="text-left" colspan="12">
                                    Annual Average Rate:
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" colspan="12">
                                    Convert to Annual Performance Appraisal Level:
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                     <div class="table-responsive">
                     <table style="width: 50%;">
                       <tr>
                            <div class="form-group">
                                <td>Approved/Rejected Comment:</td>
                                <td class="text-left"><input type="text" name="comment" class="form-control col-md-10"></td>
                            </div>
                        </tr>
                    </table><br>
                        <table class="table">
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

                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-success" value="APPROVE">
                        <button class="btn btn-danger btn-reject" data-action="{{ route('rejectMyEmployeeRateAnnual',Auth::user()->id) }}"  >REJECT</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
