<p class="text-left" ><b>GENERAL INFO</b></p>
{{  $personal_info->supervisor->id }}
<table style="width: 100%;">
    <tr>
        <div class="form-group">
            <td><label for="Satff_Name">{{ __("Staff name") }}:
                </label></td>
            <td><input type="text" class="form-control col-md-10" name="staffName" disabled="disabled" value="{{$personal_info->first_name}} {{$personal_info->middle_name}} {{$personal_info->last_name}} "><td></td>
        </div>
        <div class="form-group">
            <td><label for="Supervisor">{{ __("Supervisor") }}:
                </label></td>
            <td><input type="text" class="form-control col-md-10" name="supervisor" disabled="disabled" value="{{$personal_info->supervisor->first_name}} {{$personal_info->supervisor->middle_name}} {{$personal_info->supervisor->last_name}}" ><td></td>
        </div>
        <div class="form-group">
            <td><label for="Staff_Number">{{ __("Staff number") }}:
                </label></td>
            <td><input type="text" class="form-control col-md-10" name="staffNumber" disabled="disabled" value="{{$personal_info->staff_number}}" ><td></td>
        </div>
    </tr>
    <tr>
        <div class="form-group">
            <td><label for="supervisorJobTitle">{{ __("Supervisor job title") }}:
                </label></td>
            <td><input type="text" class="form-control col-md-10" name="supervisorJobTitle" disabled="disabled" value="{{$personal_info->supervisor->job_title}}" ><td></td>
        </div>
        <div class="form-group">
            <td><label for="jobTitle">{{ __("Job title") }}:
                </label></td>
            <td><input type="text" class="form-control col-md-10" name="jobTitle" disabled="disabled" value="{{$personal_info->job_title}}" ><td></td>
        </div>
        <div class="form-group">
            <td><label for="workingLocation">{{ __("Working location") }}:
                </label></td>
            <td><input type="text" class="form-control col-md-10" name="workingLocation" disabled="disabled" value="{{$personal_info->working_location}}" ><td></td>
        </div>

    </tr>
    <tr>
        <div class="form-group">
            <td><label for="dateOfHire">{{ __("Date joining") }}:
                </label></td>
            <td><input type="Date" class="form-control col-md-10" name="dateOfHire" disabled="disabled" value="{{$personal_info->date_of_hire}}" ><td></td>
        </div>
        <div class="form-group">
            <td><label for="dateInCurrentJobTitle">{{ __("Date in current position") }}:
                </label></td>
            <td><input type="date" class="form-control col-md-10" name="dateInCurrentJobTitle" disabled="disabled" value="{{$personal_info->date_in_current_job_title}}" ><td></td>
        </div>
        <div class="form-group">
            <td><label for="department">{{ __("Department") }}:
                </label></td>
            <td><input type="text" class="form-control col-md-10" name="department" disabled="disabled" value="{{$personal_info->department}}" ><td></td>
        </div>
    </tr>
</table><br>
