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
                    Performance Management / Building My MSC Objectives / Approving My Employees MSC Objectives / Approving My Employees Monthly MSC Objectives
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>TRAINING MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>APPROVE MY EMPLOYEES MONTHLY MSC OBJECTIVES</b></h3><br>
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
                                <td><input type="month" name="dateFrom" class="form-control col-md-8" value=""></td>
                                <td><b>To</b></td>
                                <td><input type="month" name="dateTo" class="form-control col-md-8" value=""></td>
                            </div>
                        </tr>
                    </table><br>  
                    <div class="table-responsive">
                    <table class="table table-bordered text-center table-striped text-nowrap">
                        <thead>
                            <tr>
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
                                    Note
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Must-Do 1
                                </td>
                                <td>
                                    <input type="text" name="smart">
                                </td>
                                <td>
                                    <input type="text" name="target">
                                </td>
                               
                                <td>
                                    <input type="text" name="action-plans">
                                </td>
                                 <td>
                                    <input type="text" name="note">
                                </td>
                              
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Must-Do 2
                                </td>
                                <td>
                                    <input type="text" name="smart">
                                </td>
                                <td>
                                    <input type="text" name="target">
                                </td>
                               
                                <td>
                                    <input type="text" name="action-plans">
                                </td>
                                 <td>
                                    <input type="text" name="note">
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Must-Do 3
                                </td>
                                <td>
                                    <input type="text" name="smart">
                                </td>
                                <td>
                                    <input type="text" name="target">
                                </td>
                        
                               
                                <td>
                                    <input type="text" name="action-plans">
                                </td>
                                 <td>
                                    <input type="text" name="note">
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    Must-Do 4
                                </td>
                                <td>
                                    <input type="text" name="smart">
                                </td>
                                <td>
                                    <input type="text" name="target">
                                </td>
                               
                                <td>
                                    <input type="text" name="action-plans">
                                </td>
                                 <td>
                                    <input type="text" name="note">
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    Should-Do 1
                                </td>
                                <td>
                                    <input type="text" name="smart">
                                </td>
                                <td>
                                    <input type="text" name="target">
                                </td>
                               
                                <td>
                                    <input type="text" name="action-plans">
                                </td>
                                 <td>
                                    <input type="text" name="note">
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    Should-Do 2
                                </td>
                                <td>
                                    <input type="text" name="smart">
                                </td>
                                <td>
                                    <input type="text" name="target">
                                </td>
                               
                                <td>
                                    <input type="text" name="action-plans">
                                </td>
                                 <td>
                                    <input type="text" name="note">
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Could-Do 1
                                </td>
                                <td>
                                    <input type="text" name="smart">
                                </td>
                                <td>
                                    <input type="text" name="target">
                                </td>
                               
                                <td>
                                    <input type="text" name="action-plans">
                                </td>
                                 <td>
                                    <input type="text" name="note">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="text-center">                            
                            <input type="submit" name="submit" class="btn btn-success" value="APPROVE"> 
                            <button class="btn btn-danger" >REJECT</button>
                    </div> 
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection