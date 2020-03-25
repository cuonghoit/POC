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
                    Performance Management / Rating Performance / Approving My Employees Performance / Approving My Employees Monthly Performance
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>{{  __("PERFORMANCE MANAGEMENT SYSTEM") }}</b></h4><br>
                    <h3 class="text-center" ><b>APPROVING MY STAFF MONTHLY PERFORMANCE</b></h3><br>
                    <form action="{{ route('searchAMEMP',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <table style="width: 50%;">
                           <tr>
                                <div class="form-group">
                                    <td>Select Month/Year:</td>
                                    <td class="text-left"><input type="text" name="month_year" class="datepicker-months form-control col-md-10" value="{{ $month_year }}"></td>
                                </div>
                                <td class="text-left">
                                    <select class=" form-control" data-live-search="true" name="employee">
                                        <option>Select Staff</option>
                                        @foreach($users as $users)
                                        <option value="{{$users->user_id}}" @if($employee == $users->user_id) selected="selecte"'@endif">{{$users->first_name}} {{$users->middle_name}} {{$users->last_name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="text-left" ><button class="btn btn-success">Search</button></td>
                            </tr>
                        </table><br>
                    </form>
                    <form action="{{ route('approveMyEmployeeRateMonthly',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-striped">
                        <thead>
                            <tr class="bg-success">
                                <th>No.</th>
                                <th>
                                    Objective Category
                                </th>
                                <th>
                                    SMART Objectives and Monthly Milestone <br> (MSC) (Verb/Ojective/Timing/Result)
                                </th>
                                <th>
                                    Result Description
                                </th>
                                <th>
                                    Achieved (√) or Not (x)
                                </th>
                                <th>
                                    Supervisor Comments
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($rate_monthly_performance as $rate_monthly_performance)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    {{$rate_monthly_performance->objective_category}}
                                </td>
                                <td>
                                    {{$rate_monthly_performance->objective_and_milestone}}
                                </td>
                                <td>
                                    {{$rate_monthly_performance->result}}
                                </td>
                                <td>
                                    {{$rate_monthly_performance->achieve}}
                                </td>
                                <td>
                                    {{$rate_monthly_performance->note}}
                                </td>
                                <td>{{ App\Http\Controllers\HomeController::getStatus($rate_monthly_performance->status) }}</td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                    </div>
                    <table style="width: 50%;">
                       <tr>
                            <div class="form-group">
                                <td>Approved/Rejected Comment:</td>
                                <td class="text-left"><input type="text" name="comment" class="form-control col-md-10"></td>
                            </div>
                        </tr>
                    </table><br>
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-success" value="APPROVE">
                        <button class="btn btn-danger btn-reject" data-action="{{ route('rejectMyEmployeeRateMonthly',Auth::user()->id) }}"  >REJECT</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
