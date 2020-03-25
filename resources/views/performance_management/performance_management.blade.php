@extends('layouts.app')

@section('content')
<style type="text/css">
    #dtHorizontalExample th, td {
    white-space: nowrap;
    }
    table{
        width: 100%;
    }

</style>
<div class="">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
               <!--  <div class="card-header">Training Management / Training-implementation</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>PERFORMANCE MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>PERFORMANCE MANAGEMENT REPORT</b></h3><br>
                    <form action="{{route('searchPerformanceReport', Auth::user()->id)}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <table style="width: 100%;">
                            <tr>
                                <div class="form-group">
                                    @hasanyrole('general_director|super-admin')
                                        <td class="text-right":><b>Department:</b></td>
                                    @else
                                    <td class="text-right":><b>Select Staff:</b></td>
                                    @endif
                                    <td>
                                         <select class="selectpicker form-control" name="user" data-live-search="true" value="">
                                            <option value="0">ALL</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->user_id }}"@if($users_first == $user->user_id) selected="selected" @endif> {{$user->first_name}} {{$user->middle_name}} {{$user->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td width="20%"></td>
                                    <td class="text-right":><b>Form Month/year:</b></td>
                                    <td><input type="textt" name="from_date" class="datepicker-months form-control col-md-6" value="{{$from_date}}"></td>
                                    <td class="text-right":><b>To Month/year:</b></td>
                                    <td><input type="textt" name="to_date" class="datepicker-months form-control col-md-6" value="{{$to_date}}"></td>
                                    <td><input type="submit" class="btn btn-success" value="Search"></td>
                                </div>
                            </tr>
                        </table><br>
                    </form>
                    <form action="{{route('printPerformanceReport')}}" method="get">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="text-right"><input type="submit" value="Print Out" class="btn btn-warning"></div>
                    @if($users_first!=0)
                    @if(count($rap)==0)
                        <div class="text-center alert-danger">
                            <h4>There are not any reports in to {{$from_date}} from {{$to_date}}<b></b></h4>
                        </div>
                    @endif
                    <div class="container">
                        <div class="column" style="width: 50%; float: left;">
                            <h2 style="text-align: center;">Rating Annual Column</h2>
                            {!! $bar->container() !!}
                        </div>
                         <div class="pie" style="width: 50%; float: left;">
                            <h2 style="text-align: center;">Rating Annual Pie</h2>
                            <br>
                            {!! $pie->container() !!}
                        </div>
                    </div>

                    <script src="https://unpkg.com/vue"></script>
                    <script>
                        var app = new Vue({
                            el: '.container',
                        });
                    </script>
                    {!! $bar->script() !!}
                    {!! $pie->script() !!}
                    @else
                    <div class="container">
                        <div class="pie" style="width: 50%;float: left;">
                            <h2 style="text-align: center;">Rating Annual Column</h2>
                            <br>
                            {!! $bar_all->container() !!}
                        </div>
                        <div class="pie" style="width: 50%; float: left;">
                            <h2 style="text-align: center;">Rating Annual Pie</h2>
                            <br>
                            {!! $pie_all->container() !!}
                        </div>
                    </div>

                    <script src="https://unpkg.com/vue"></script>
                    <script>
                        var app = new Vue({
                            el: '.container',
                        });
                    </script>
                    {!! $bar_all->script() !!}
                    {!! $pie_all->script() !!}
                    @endif
                    <br><br><br><br>
                    <div class="table-responsive Training">
                        <table class="table table-bordered table-striped text-center">
                            <tr>
                                <th rowspan="2">NO.</th>
                                <th rowspan="2">Employee Name</th>
                                <th rowspan="2">Job Title</th>
                                <th colspan="7">Rating Monthly MSC Objectives (Achieved or Not)</th>
                                <th rowspan="2">Monthly Rates</th>
                                <th rowspan="2">Monthly Performance Appraisal Level</th>
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
                            <?php $i=1; ?>
                            @foreach($rap as $rap)
                            <tr>
                                <td>{{$i++}}</td>
                                <td></td>
                                <td></td>
                                <td><input type="radio" @if($rap->must_do_1 == 1) checked = "checked" @endif disabled = "disabled"></td>
                                <td><input type="radio" @if($rap->must_do_2 == 1) checked = "checked" @endif disabled = "disabled"></td>
                                <td><input type="radio" @if($rap->must_do_3 == 1) checked = "checked" @endif disabled = "disabled"></td>
                                <td><input type="radio" @if($rap->must_do_4 == 1) checked = "checked" @endif disabled = "disabled"></td>
                                <td><input type="radio" @if($rap->should_do_1 == 1) checked = "checked" @endif disabled = "disabled"></td>
                                <td><input type="radio" @if($rap->should_do_2 == 1) checked = "checked" @endif disabled = "disabled"></td>
                                <td><input type="radio" @if($rap->could_do_1 == 1) checked = "checked" @endif disabled = "disabled"></td>
                                <td>{{$rap->monthly_rate}}</td>
                                <td>{{$rap->monthly_performance_level}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
