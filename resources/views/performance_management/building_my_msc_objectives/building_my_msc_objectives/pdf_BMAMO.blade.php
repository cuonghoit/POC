@extends('layouts.pdf_app')

@section('content')

<div class="">
    <div class="row justify-content-center">
            <div class="card">
                <div class="">
                    <h6 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>PERFORMANCE MANAGEMENT SYSTEM</b></h6><br>
                    <h5 class="text-center" >
                        <b>
                            @hasanyrole('general_director')
                            {{ __('COMPANY ANNUAL MSC OBJECTIVES') }}
                            @else
                                {{ __('BUILDING MY ANNUAL MSC OBJECTIVES') }}
                            @endif
                        </b>
                    </h5><br>

                    <table class="table table-bordered text-center text-nowrap w-auto text-xsmall">

                        <thead class="bg-success">
                            <tr >
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
                                    Target to Achieve
                                </th>
                                <th colspan="12">
                                    Training & Development Schedule
                                </th>
                                <th rowspan="2">
                                    Status
                                </th>
                                <th rowspan="2">
                                    NOTE
                                </th>
                            </tr>
                            <tr>
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
                                <th>Nov</th>
                                <th>Dec</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @foreach($msc_performance as $mp)
                            <tr>
                                <td>
                                    {{$i++}}
                                </td>
                                <td>{{$mp->objective_category}}</td>
                                <td>
                                    {{$mp->milestone_behavior}}
                                </td>
                                <td>
                                    {{$mp->target_to_archive}}
                                </td>
                                <td>
                                    {{$mp->jan}}
                                </td>
                                <td>
                                    {{$mp->feb}}
                                </td>
                                <td>
                                    {{$mp->mar}}
                                </td>
                                <td>
                                    {{$mp->apr}}
                                </td>
                                <td>
                                    {{$mp->may}}
                                </td>
                                <td>
                                    {{$mp->jun}}
                                </td>
                                <td>
                                    {{$mp->jul}}
                                </td>
                                <td>
                                    {{$mp->aug}}
                                </td>
                                <td>
                                    {{$mp->sep}}
                                </td>
                                <td>
                                    {{$mp->oct}}
                                </td>
                                <td>
                                    {{$mp->nov}}
                                </td>
                                <td>
                                    {{$mp->dec}}
                                </td>
                                <td>
                                    {{$mp->name}}
                                </td>
                                <td>
                                    {{$mp->note}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="table-responsive">
                        <div class="form-group">
                            <label for="staff_sign">Staff Signature:</label>
                        </div>
                        <div class="form-group">
                            <label for="manager_sign">Line Manager's Signature:</label>
                        </div>
                        <div class="form-group">
                            <label for="hrm">HRM Recorded by HRM:</label>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
