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
                    Performance Management / Building My MSC Objectives / Approving My Employees MSC Objectives / Approving My Employees Annual MSC Objectives
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('approveMyEmployeeMscAnnual',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>{{  __("PERFORMANCE MANAGEMENT SYSTEM") }}</b></h4><br>
                    <h3 class="text-center" ><b>APPROVING MY STAFF ANNUAL MSC OBJECTIVES</b></h3><br>
                    <div class="row">


                        <div class="col-md-2">
                            <p>Select Staff:</p>
                        </div>
                        <div class="col-md-3">
                            <select class="selectpicker form-control" name="employee" data-live-search="true" value="{{ $employee }}">
                                <option>Select Staff</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->user_id }}"@if($employee == $user->user_id) selected="selected" @endif> {{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <p>Select Year:</p>
                        </div>
                        <div class="col-md-3">
                            <input type="textt" name="dateFrom" class="datepicker form-control col-md-10 " value="{{  $year }}">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success btn-search">Search</button>
                        </div>
                    </div>
                    @include('layouts.personal_info')

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
                                <td><input type="text" disabled="disabled"></td>
                            </tr>
                        @endforeach
                            {{--<tr>
                                <td>1</td>
                                <td>
                                    Musd-Do 1
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Must-Do 2
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Must-Do 3
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            <tr>
                                <td>4</td>
                                <td>
                                    Must-Do 4
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    Should-Do 1
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>


                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    Should-Do 2
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Could-Do 1
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>--}}
                            <tr colspan="7">
                                <td colspan="8" class="text-left">
                                    Comment:
                                    <input type="text" name="comment" class="col-md-6">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    </div>
                     <br>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-striped">
                            <tr>
                                <td>
                                    Staff Signature:
                                </td>
                                <td>
                                    <input type="text" name="staff_sign">
                                </td>

                                <td>
                                    Line Manager's Signature:
                                </td>
                                <td>
                                    <input type="text" name="manager_sign">
                                </td>
                                <td>
                                    HRM Recorded by HRM:
                                </td>
                                <td>
                                    <input type="text" name="hrm">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-center">
                            <input type="submit" name="submit" class="btn btn-success" value="APPROVE">
                            <button data-action="{{ route('rejectMyEmployeeMscAnnual',Auth::user()->id) }}" class="btn btn-danger btn-reject" >REJECT</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
