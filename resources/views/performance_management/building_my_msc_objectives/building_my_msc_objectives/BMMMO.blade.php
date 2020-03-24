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
                Building My MSC Objective / Monthly MSC
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>{{  __("PERFORMANCE MANAGEMENT SYSTEM") }}</b></h4><br>
                    <h3 class="text-center" ><b>BUILDING MY MONTHLY MSC OBJECTIVES</b></h3><br>


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
                    <form action="{{ route('searchMscMonthly',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                            @hasanyrole('general_director')
                            <div class="col-md-2">
                                <p>Select Department:</p>
                            </div>
                            <div class="col-md-3">
                                <select class="selectpicker form-control" data-live-search="true" name="department">
                                    <option value="">Select Department</option>
                                    @foreach($department_list as $pi)
                                        <option value="{{ $pi->user_id }}" @if($department==$pi->user_id) selected="selected" @endif>{{$pi->first_name}} {{$pi->middle_name}} {{$pi->last_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="col-md-2">
                                <p>Select Month/Year:</p>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="year" class="datepicker-months text-center form-control col-md-10 " value="{{$year}}">
                            </div>
                            <div class="col-md-2">
                                    <input class="btn btn-success" type="submit" value="Search">
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('submitMscMothy',Auth::user()->id) }}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="year_choosen" class="datepicker-months text-center form-control
                    col-md-10 " value="{{$year}}">
                    @include('layouts.personal_info')

                    <table class="table table-bordered text-center table-striped">
                        <thead class="bg-success">
                            <tr>
                                <th>No.</th>
                                <th>
                                    Objective Category
                                </th>
                                <th>
                                    SMART Objectives and Monthly Milestone <br> (MSC)(Verb/Ojective/Timing/Result)
                                </th>
                                <th>
                                    Target to Achieve
                                </th>

                                <th>
                                    Action Plans to Achieve Objectives
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
                        <?php $i=1 ?>
                        @php $status = ''; @endphp
                        @foreach($msc_performance as $msc)
                            @php $status = $msc->name; @endphp
                            <?php switch ($msc->name) {
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
                            @if(strcmp($msc->name, 'Pending') == 0)
                            <tr>
                                <td>
                                    {{$i++}}
                                    <input type="hidden" name="id[]" value="{{$msc->id}}"></td>
                                <td>
                                    {{$msc->objective_category}}
                                </td>
                                <td>
                                    <input type="text" name="milestone[]" value="{{$msc->milestone_behavior}}">

                                </td>
                                <td>
                                <input type="text" name="target[]" value="{{$msc->target_to_archive}}" >
                                </td>
                                <td>
                                    <input type="text" name="action_to_chieve[]" value="{{$msc->action_to_chieve}}" >
                                </td>
                                <td class="{{ $classColor }}">{{$msc->name}}</td>
                                <td>
                                    {{$msc->note}}
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td>
                                    {{$i++}}
                                    <input type="hidden" name="id[]" value="{{$msc->id}}"></td>
                                <td>
                                    {{$msc->objective_category}}
                                </td>
                                <td>
                                    <input type="text" name="milestone[]" value="{{$msc->milestone_behavior}}" disabled="disabled">

                                </td>
                                <td>
                                <input type="text" name="target[]" value="{{$msc->target_to_archive}}" disabled="disabled">
                                </td>
                                <td>
                                    <input type="text" name="action_to_chieve[]" value="{{$msc->action_to_chieve}}" disabled="disabled">
                                </td>
                                <td class="{{ $classColor }}">{{$msc->name}}</td>
                                <td>
                                    {{$msc->note}}
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            @if($i === 1)
                                @php $status = 'Pending'; @endphp
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><input type="hidden" name="objective_category[]" value="{{ __('Must-Do 1')
                                    }}"/>{{ __('Must-Do 1')
                                    }}</td>
                                    <td><input type="text" name="milestone[]" value=""></td>
                                    <td><input type="text" name="target[]" value="" ></td>
                                    <td><input type="text" name="action_to_chieve[]" value="" ></td>
                                    <td class="">{{ __('Pending') }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><input type="hidden" name="objective_category[]" value="{{ __('Must-Do 2')
                                    }}"/>{{ __('Must-Do 2') }}</td>
                                    <td><input type="text" name="milestone[]" value=""></td>
                                    <td><input type="text" name="target[]" value="" ></td>
                                    <td><input type="text" name="action_to_chieve[]" value="" ></td>
                                    <td class="">{{ __('Pending') }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><input type="hidden" name="objective_category[]" value="{{ __('Must-Do 3')
                                    }}"/>{{ __('Must-Do 3') }}</td>
                                    <td><input type="text" name="milestone[]" value=""></td>
                                    <td><input type="text" name="target[]" value="" ></td>
                                    <td><input type="text" name="action_to_chieve[]" value="" ></td>
                                    <td class="">{{ __('Pending') }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><input type="hidden" name="objective_category[]" value="{{ __('Must-Do 4')
                                    }}"/>{{ __('Must-Do 4') }}</td>
                                    <td><input type="text" name="milestone[]" value=""></td>
                                    <td><input type="text" name="target[]" value="" ></td>
                                    <td><input type="text" name="action_to_chieve[]" value="" ></td>
                                    <td class="">{{ __('Pending') }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><input type="hidden" name="objective_category[]" value="{{ __('Should-Do 1')
                                    }}"/>{{ __('Should-Do 1') }}</td>
                                    <td><input type="text" name="milestone[]" value=""></td>
                                    <td><input type="text" name="target[]" value="" ></td>
                                    <td><input type="text" name="action_to_chieve[]" value="" ></td>
                                    <td class="">{{ __('Pending') }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><input type="hidden" name="objective_category[]" value="{{ __('Should-Do 2')
                                    }}"/>{{ __('Should-Do 2') }}</td>
                                    <td><input type="text" name="milestone[]" value=""></td>
                                    <td><input type="text" name="target[]" value="" ></td>
                                    <td><input type="text" name="action_to_chieve[]" value="" ></td>
                                    <td class="">{{ __('Pending') }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><input type="hidden" name="objective_category[]" value="{{ __('Could-Do 1')
                                    }}"/>{{ __('Could-Do 1') }}</td>
                                    <td><input type="text" name="milestone[]" value=""></td>
                                    <td><input type="text" name="target[]" value="" ></td>
                                    <td><input type="text" name="action_to_chieve[]" value="" ></td>
                                    <td class="">{{ __('Pending') }}</td>
                                    <td></td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                    <div class="form-group text-center">
                        @if(strcmp($status, 'Submited') == 0)
                            <button class="col-md-3 btn btn-success" name="submited">Submitted</button>
                        @elseif(strcmp($status,'Approved') == 0)
                            <button class="col-md-3 btn btn-success" name="submited">Approved</button>
                        @elseif(strcmp($status, 'Pending') == 0)
                            <label for="submit"><b>SUBMIT TO SUPERVISOR FOR APPROVAL:</b>&emsp;</label>
                            <button data-action="{{ route('saveMscMonthly',Auth::user()->id) }}" class="btn btn-success btn-reject" >Save</button>
                            <input type="submit" name="submit" value="Submit" class="btn btn-success">

                        @endif
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
