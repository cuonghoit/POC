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
                    MSC Objective / Annual MSC
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>{{  __("PERFORMANCE MANAGEMENT SYSTEM") }}</b></h4><br>
                    <h3 class="text-center" >
                        <b>
                            @hasanyrole('general_director')
                            {{ __('COMPANY ANNUAL MSC OBJECTIVES') }}
                            @else
                                {{ __('BUILDING MY ANNUAL MSC OBJECTIVES') }}
                            @endif
                        </b>
                    </h3><br>


                    @if(count($errors)>0)
                        <div class="atler">
                            @foreach($errors->all() as $er)
                                <b class="text-danger">{{$er}}</b><br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('notice'))
                        <div class="text-danger">
                            <div class="alert alert-danger" role="alert">
                            {{ session('notice') }}
                        </div>
                        </div>
                    @endif
                    <form action="{{ route('searchMscAnnual',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                           @hasanyrole('general_director')
                           <div class="col-md-2">
                               <p>Select Department:</p>
                           </div>
                           <div class="col-md-3">
                               <select class="selectpicker form-control" data-live-search="true" name="department" autocomplete="off">
                                   <option value="">Select Department</option>
                                   @foreach($department_list as $pi)
                                       <option value="{{ $pi->user_id }}" @if($department == $pi->user_id) selected="selected" @endif >{{$pi->first_name}} {{$pi->middle_name}} {{$pi->last_name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           @endif
                           <div class="col-md-2">
                               <p>Select Year:</p>
                           </div>
                           <div class="col-md-2">
                               <input type="text" name="year" class="datepicker text-center form-control col-md-10 " value="{{ $year }}">
                           </div>
                           <div class="col-md-2">
                               <input type="submit" class="btn btn-success" value="Search">
                           </div>
                        </div>
                    </form>

                    <form action="{{ route('submitMscAnnual',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="year_choosen" class="datepicker-months text-center form-control
                    col-md-10 " value="{{$year}}">
                    @include('layouts.personal_info')

                        <div class="form-group">
{{--                        <input type="hidden" name="isPrintPdf" value="false"/>--}}
                            <div class="text-right"><button data-action="{{ route('export') }}" class="btn btn-warning btn-reject" >{{ __('Export to Excel') }}</button></div>
                        </div>
                    <div class="table-responsive">
                    <table class="table table-bordered text-center table-striped">

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
                                    Months
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
                            @php $status = ''; @endphp
                            @foreach($msc_performance as $mp)
                            @php $status = $mp->name; @endphp
                                <?php switch ($mp->name) {
                                    case 'Approved':
                                        $classColor = 'text-success';
                                        break;
                                    case 'Rejected':
                                        $classColor = 'text-danger';
                                        break;
                                    default:
                                        $classColor = '';
                                        break;
                                } ?>
                            @if(strcmp($mp->name, 'Pending') != 0)
                            <tr>
                                <td>
                                    {{$i++}}
                                    <input type="hidden" name="id[]"  value="{{$mp->id}}">
                                </td>
                                <td>{{$mp->objective_category}}
                                <input type="hidden"name="objective_category[]" value="{{$mp->objective_category}}"></td>
                                <td>
                                    <input type="text" name="milestone[]"  value="{{$mp->milestone_behavior}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="target[]"  value="{{$mp->target_to_archive}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="jan[]" value="{{$mp->jan}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="feb[]" value="{{$mp->feb}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="mar[]" value="{{$mp->mar}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="apr[]" value="{{$mp->apr}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="may[]" value="{{$mp->may}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="jun[]" value="{{$mp->jun}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="jul[]" value="{{$mp->jul}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="aug[]" value="{{$mp->aug}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="sep[]" value="{{$mp->sep}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="oct[]" value="{{$mp->oct}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="nov[]" value="{{$mp->nov}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="dec[]" value="{{$mp->dec}}" disabled="disabled">
                                </td>
                                <td class="{{$classColor}}">
                                    {{$mp->name}}
                                </td>
                                <td>
                                    <input disabled="disabled" name="note[]" style="border: none; background: none;" value="{{$mp->note}}">
                                </td>
                            </tr>

                            @else
                                <tr>
                                    <td>
                                        {{$i++}}
                                   <input type="hidden" name="id[]"  value="{{$mp->id}}">
                                    </td>
                                    <td>{{$mp->objective_category}}
                                    <input type="hidden"name="objective_category[]" value="{{$mp->objective_category}}" ></td>
                                    <td>
                                        <input type="text" name="milestone[]"  value="{{$mp->milestone_behavior}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="target[]"  value="{{$mp->target_to_archive}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="jan[]" value="{{$mp->jan}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="feb[]" value="{{$mp->feb}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="mar[]" value="{{$mp->mar}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="apr[]" value="{{$mp->apr}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="may[]" value="{{$mp->may}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="jun[]" value="{{$mp->jun}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="jul[]" value="{{$mp->jul}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="aug[]" value="{{$mp->aug}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="sep[]" value="{{$mp->sep}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="oct[]" value="{{$mp->oct}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="nov[]" value="{{$mp->nov}}" >
                                    </td>
                                    <td>
                                        <input type="text" name="dec[]" value="{{$mp->dec}}" >
                                    </td>
                                    <td class="{{$classColor}}">
                                        {{$mp->name}}
                                    </td>
                                    <td>
                                        {{$mp->note}}
                                    </td>
                                </tr>
                            @endif
                            @endforeach

                            @if($i === 1)
                                @php $status = 'Pending'; @endphp
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ __("Must-Do 1") }}<input type="hidden"name="objective_category[]" value="{{ __("Must-Do 1") }}" ></td>
                                    <td><input type="text" name="milestone[]"  value="" ></td>
                                    <td><input type="text" name="target[]"  value="" ></td>
                                    <td><input type="text" name="jan[]" value="" ></td>
                                    <td><input type="text" name="feb[]" value="" ></td>
                                    <td><input type="text" name="mar[]" value="" ></td>
                                    <td><input type="text" name="apr[]" value="" ></td>
                                    <td><input type="text" name="may[]" value="" ></td>
                                    <td><input type="text" name="jun[]" value="" ></td>
                                    <td><input type="text" name="jul[]" value="" ></td>
                                    <td><input type="text" name="aug[]" value="" ></td>
                                    <td><input type="text" name="sep[]" value="" ></td>
                                    <td><input type="text" name="oct[]" value="" ></td>
                                    <td><input type="text" name="nov[]" value="" ></td>
                                    <td><input type="text" name="dec[]" value="" ></td>
                                    <td class="">{{ __("Pending") }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ __("Must-Do 2") }}<input type="hidden"name="objective_category[]" value="{{ __("Must-Do 2") }}" ></td>
                                    <td><input type="text" name="milestone[]"  value="" ></td>
                                    <td><input type="text" name="target[]"  value="" ></td>
                                    <td><input type="text" name="jan[]" value="" ></td>
                                    <td><input type="text" name="feb[]" value="" ></td>
                                    <td><input type="text" name="mar[]" value="" ></td>
                                    <td><input type="text" name="apr[]" value="" ></td>
                                    <td><input type="text" name="may[]" value="" ></td>
                                    <td><input type="text" name="jun[]" value="" ></td>
                                    <td><input type="text" name="jul[]" value="" ></td>
                                    <td><input type="text" name="aug[]" value="" ></td>
                                    <td><input type="text" name="sep[]" value="" ></td>
                                    <td><input type="text" name="oct[]" value="" ></td>
                                    <td><input type="text" name="nov[]" value="" ></td>
                                    <td><input type="text" name="dec[]" value="" ></td>
                                    <td class="">{{ __("Pending") }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ __("Must-Do 3") }}<input type="hidden"name="objective_category[]" value="{{ __("Must-Do 3") }}" ></td>
                                    <td><input type="text" name="milestone[]"  value="" ></td>
                                    <td><input type="text" name="target[]"  value="" ></td>
                                    <td><input type="text" name="jan[]" value="" ></td>
                                    <td><input type="text" name="feb[]" value="" ></td>
                                    <td><input type="text" name="mar[]" value="" ></td>
                                    <td><input type="text" name="apr[]" value="" ></td>
                                    <td><input type="text" name="may[]" value="" ></td>
                                    <td><input type="text" name="jun[]" value="" ></td>
                                    <td><input type="text" name="jul[]" value="" ></td>
                                    <td><input type="text" name="aug[]" value="" ></td>
                                    <td><input type="text" name="sep[]" value="" ></td>
                                    <td><input type="text" name="oct[]" value="" ></td>
                                    <td><input type="text" name="nov[]" value="" ></td>
                                    <td><input type="text" name="dec[]" value="" ></td>
                                    <td class="">{{ __("Pending") }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ __("Must-Do 4") }}<input type="hidden"name="objective_category[]"
                                                                    value="{{ __("Must-Do 4") }}" ></td>
                                    <td><input type="text" name="milestone[]"  value="" ></td>
                                    <td><input type="text" name="target[]"  value="" ></td>
                                    <td><input type="text" name="jan[]" value="" ></td>
                                    <td><input type="text" name="feb[]" value="" ></td>
                                    <td><input type="text" name="mar[]" value="" ></td>
                                    <td><input type="text" name="apr[]" value="" ></td>
                                    <td><input type="text" name="may[]" value="" ></td>
                                    <td><input type="text" name="jun[]" value="" ></td>
                                    <td><input type="text" name="jul[]" value="" ></td>
                                    <td><input type="text" name="aug[]" value="" ></td>
                                    <td><input type="text" name="sep[]" value="" ></td>
                                    <td><input type="text" name="oct[]" value="" ></td>
                                    <td><input type="text" name="nov[]" value="" ></td>
                                    <td><input type="text" name="dec[]" value="" ></td>
                                    <td class="">{{ __("Pending") }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ __("Should-Do 1") }}<input type="hidden"name="objective_category[]" value="{{ __("Should-Do 1") }}" ></td>
                                    <td><input type="text" name="milestone[]"  value="" ></td>
                                    <td><input type="text" name="target[]"  value="" ></td>
                                    <td><input type="text" name="jan[]" value="" ></td>
                                    <td><input type="text" name="feb[]" value="" ></td>
                                    <td><input type="text" name="mar[]" value="" ></td>
                                    <td><input type="text" name="apr[]" value="" ></td>
                                    <td><input type="text" name="may[]" value="" ></td>
                                    <td><input type="text" name="jun[]" value="" ></td>
                                    <td><input type="text" name="jul[]" value="" ></td>
                                    <td><input type="text" name="aug[]" value="" ></td>
                                    <td><input type="text" name="sep[]" value="" ></td>
                                    <td><input type="text" name="oct[]" value="" ></td>
                                    <td><input type="text" name="nov[]" value="" ></td>
                                    <td><input type="text" name="dec[]" value="" ></td>
                                    <td class="">{{ __("Pending") }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ __("Should-Do 2") }}<input type="hidden"name="objective_category[]"
                                                                      value="{{ __("Should-Do 2") }}" ></td>
                                    <td><input type="text" name="milestone[]"  value="" ></td>
                                    <td><input type="text" name="target[]"  value="" ></td>
                                    <td><input type="text" name="jan[]" value="" ></td>
                                    <td><input type="text" name="feb[]" value="" ></td>
                                    <td><input type="text" name="mar[]" value="" ></td>
                                    <td><input type="text" name="apr[]" value="" ></td>
                                    <td><input type="text" name="may[]" value="" ></td>
                                    <td><input type="text" name="jun[]" value="" ></td>
                                    <td><input type="text" name="jul[]" value="" ></td>
                                    <td><input type="text" name="aug[]" value="" ></td>
                                    <td><input type="text" name="sep[]" value="" ></td>
                                    <td><input type="text" name="oct[]" value="" ></td>
                                    <td><input type="text" name="nov[]" value="" ></td>
                                    <td><input type="text" name="dec[]" value="" ></td>
                                    <td class="">{{ __("Pending") }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ __("Could-Do 1") }}<input type="hidden"name="objective_category[]" value="{{ __("Could-Do 1") }}" ></td>
                                    <td><input type="text" name="milestone[]"  value="" ></td>
                                    <td><input type="text" name="target[]"  value="" ></td>
                                    <td><input type="text" name="jan[]" value="" ></td>
                                    <td><input type="text" name="feb[]" value="" ></td>
                                    <td><input type="text" name="mar[]" value="" ></td>
                                    <td><input type="text" name="apr[]" value="" ></td>
                                    <td><input type="text" name="may[]" value="" ></td>
                                    <td><input type="text" name="jun[]" value="" ></td>
                                    <td><input type="text" name="jul[]" value="" ></td>
                                    <td><input type="text" name="aug[]" value="" ></td>
                                    <td><input type="text" name="sep[]" value="" ></td>
                                    <td><input type="text" name="oct[]" value="" ></td>
                                    <td><input type="text" name="nov[]" value="" ></td>
                                    <td><input type="text" name="dec[]" value="" ></td>
                                    <td class="">{{ __("Pending") }}</td>
                                    <td></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    </div>
                     <br>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-striped">
                            <tr>
                                <div class="form-group">
                                    <td><label for="staff_sign">Staff Signature:
                                    </label></td>
                                    <td><input type="text" class="form-control col-md-12" name="staff_sign"
                                    @if(strcmp($status, 'Submited') == 0) value="Submited" @endif disabled="disabled"
                                    ></td>
                                </div>
                                <div class="form-group">
                                    <td><label for="manager_sign">Line Manager's Signature:
                                    </label></td>
                                    <td><input type="text" class="form-control col-md-12" name="manager_sign"
                                    @if(strcmp($status, 'Approved') == 0) value="Approved" @elseif(strcmp($status, 'Rejected') == 0)value="Approved" @endif disabled="disabled"
                                    ></td>
                                </div>
                                <div class="form-group">
                                    <td><label for="hrm">HRM Recorded by HRM:
                                    </label></td>
                                    <td><input type="text" class="form-control col-md-12" name="hrm"
                                    @if(strcmp($status, 'Reviewed') == 0) value="Reviewed" @endif disabled="disabled"
                                    ></td>
                                </div>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group text-center">

                        <label for="submit" ><b>
                                @hasanyrole('general_director')
                                {{ __('APPROVE/REJECT:') }}
                                <button data-action="{{ route('unlockBMAMO',Auth::user()->id) }}" class="btn btn-success btn-reject">{{ __("Unlock") }}</button>
                                @else

                                    @if(strcmp($status, 'Submited') == 0)
                                        <button name="submited" class="btn btn-success " style="white-space: nowrap;" >Submited</button>
                                    @elseif(strcmp($status, 'Approved') == 0)
                                        <button name="approved" class="btn btn-success" >Approved</button>
                                    @elseif(strcmp($status, 'Pending') == 0)
                                    {{ __('SUBMIT TO DEPARTMENT FOR APPROVAL: ') }}
                                        <button data-action="{{ route('saveMscAnnual',Auth::user()->id) }}" class="btn btn-success btn-reject" >Save</button>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success">

                                    @endif
                                @endif

                            </b>&emsp;
                        </label>




                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
