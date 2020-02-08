@extends('layouts.app')

@section('content')
<style type="text/css">
    #dtHorizontalExample th, td {
    white-space: nowrap;
    }
    .Training table tbody td input[type=text]{
        width: 210px;
    }
    .box{
        width: 100%;
    }
    .box tr td{
        width: 50%;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
                <div class="card-header">Training Management / Indidual Training</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('postIATP',$personal_info->user_id)}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>TRAINING MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>POST TRAINING EVALUATION</b></h3><br>
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
                    <p class="text-left" ><b>TRAINING PRESENTATION:</b></p>
                    <p>Participant is requested to submit a post-training report or a presentation slide to HRM in 15 days from the training completion date. This report includes training summary, comments and recommendation about the training event.</p>
                    <p>Participant shall arrange to present about what they have learnt and benefited from the training course to their Line manager and other team members.</p><br>
                    <form>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <p class="text-left" ><b>TRAINING EVALUATION:</b></p>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th rowspan="2">NO.</th>
                                <th>Rating Scales</th>
                                <th colspan="2">Very Poor</th>
                                <th colspan="2">Poor</th>
                                <th colspan="2">Average</th>
                                <th colspan="2">Good</th>
                                <th colspan="2">Excellent</th>
                            </tr>
                            <tr>
                                <th>Item</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>

                            </tr>
                            <tr class="bg-primary">
                                <th>1</th>
                                <th>Conduct of Program</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1.1</td>
                                <td>Style & Clarity of presentation</td>
                                <td><input type="radio" name="style_clarity" value="1"></td>
                                <td><input type="radio" name="style_clarity" value="2"></td>
                                <td><input type="radio" name="style_clarity" value="3"></td>
                                <td><input type="radio" name="style_clarity" value="4"></td>
                                <td><input type="radio" name="style_clarity" value="5"></td>
                                <td><input type="radio" name="style_clarity" value="6"></td>
                                <td><input type="radio" name="style_clarity" value="7"></td>
                                <td><input type="radio" name="style_clarity" value="8"></td>
                                <td><input type="radio" name="style_clarity" value="9"></td>
                                <td><input type="radio" name="style_clarity" value="10"></td>
                            </tr>
                            <tr>
                                <td>1.2</td>
                                <td>Organization of program</td>
                                <td><input type="radio" name="organization_of_program" value="1"></td>
                                <td><input type="radio" name="organization_of_program" value="2"></td>
                                <td><input type="radio" name="organization_of_program" value="3"></td>
                                <td><input type="radio" name="organization_of_program" value="4"></td>
                                <td><input type="radio" name="organization_of_program" value="5"></td>
                                <td><input type="radio" name="organization_of_program" value="6"></td>
                                <td><input type="radio" name="organization_of_program" value="7"></td>
                                <td><input type="radio" name="organization_of_program" value="8"></td>
                                <td><input type="radio" name="organization_of_program" value="9"></td>
                                <td><input type="radio" name="organization_of_program" value="10"></td>
                            </tr>
                            <tr>
                                <td>1.3</td>
                                <td>Response to questions and helpful with problems</td>
                                <td><input type="radio" name="response_to_questions" value="1"></td>
                                <td><input type="radio" name="response_to_questions" value="2"></td>
                                <td><input type="radio" name="response_to_questions" value="3"></td>
                                <td><input type="radio" name="response_to_questions" value="4"></td>
                                <td><input type="radio" name="response_to_questions" value="5"></td>
                                <td><input type="radio" name="response_to_questions" value="6"></td>
                                <td><input type="radio" name="response_to_questions" value="7"></td>
                                <td><input type="radio" name="response_to_questions" value="8"></td>
                                <td><input type="radio" name="response_to_questions" value="9"></td>
                                <td><input type="radio" name="response_to_questions" value="10"></td>
                            </tr>
                            <tr>
                                <td>1.4</td>
                                <td>Quality of ideas & examples given</td>
                                <td><input type="radio" name="quality_of_ideas" value="1"></td>
                                <td><input type="radio" name="quality_of_ideas" value="2"></td>
                                <td><input type="radio" name="quality_of_ideas" value="3"></td>
                                <td><input type="radio" name="quality_of_ideas" value="4"></td>
                                <td><input type="radio" name="quality_of_ideas" value="5"></td>
                                <td><input type="radio" name="quality_of_ideas" value="6"></td>
                                <td><input type="radio" name="quality_of_ideas" value="7"></td>
                                <td><input type="radio" name="quality_of_ideas" value="8"></td>
                                <td><input type="radio" name="quality_of_ideas" value="9"></td>
                                <td><input type="radio" name="quality_of_ideas" value="10"></td>
                            </tr>
                            <tr>
                                <td>1.5</td>
                                <td>Ability to maintain interest</td>
                                <td><input type="radio" name="ability_to_maintain" value="1"></td>
                                <td><input type="radio" name="ability_to_maintain" value="2"></td>
                                <td><input type="radio" name="ability_to_maintain" value="3"></td>
                                <td><input type="radio" name="ability_to_maintain" value="4"></td>
                                <td><input type="radio" name="ability_to_maintain" value="5"></td>
                                <td><input type="radio" name="ability_to_maintain" value="6"></td>
                                <td><input type="radio" name="ability_to_maintain" value="7"></td>
                                <td><input type="radio" name="ability_to_maintain" value="8"></td>
                                <td><input type="radio" name="ability_to_maintain" value="9"></td>
                                <td><input type="radio" name="ability_to_maintain" value="10"></td>
                            </tr>
                            <tr>
                                <td>1.6</td>
                                <td>Knowledge of subject matter</td>
                                <td><input type="radio" name="knowledge_of_subject" value="1"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="2"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="3"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="4"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="5"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="6"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="7"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="8"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="9"></td>
                                <td><input type="radio" name="knowledge_of_subject" value="10"></td>
                            </tr>
                            <tr class="bg-primary">
                                <th>2</th>
                                <th>Handouts & Materials</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2.1</td>
                                <td>Printing clarity & proper binding of materials</td>
                                <td><input type="radio" name="printing_clarity" value="1"></td>
                                <td><input type="radio" name="printing_clarity" value="2"></td>
                                <td><input type="radio" name="printing_clarity" value="3"></td>
                                <td><input type="radio" name="printing_clarity" value="4"></td>
                                <td><input type="radio" name="printing_clarity" value="5"></td>
                                <td><input type="radio" name="printing_clarity" value="6"></td>
                                <td><input type="radio" name="printing_clarity" value="7"></td>
                                <td><input type="radio" name="printing_clarity" value="8"></td>
                                <td><input type="radio" name="printing_clarity" value="9"></td>
                                <td><input type="radio" name="printing_clarity" value="10"></td>
                            </tr>
                            <tr>
                                <td>2.2</td>
                                <td>Covers main subject matter/td>
                                <td><input type="radio" name="covers_main" value="1"></td>
                                <td><input type="radio" name="covers_main" value="2"></td>
                                <td><input type="radio" name="covers_main" value="3"></td>
                                <td><input type="radio" name="covers_main" value="4"></td>
                                <td><input type="radio" name="covers_main" value="5"></td>
                                <td><input type="radio" name="covers_main" value="6"></td>
                                <td><input type="radio" name="covers_main" value="7"></td>
                                <td><input type="radio" name="covers_main" value="8"></td>
                                <td><input type="radio" name="covers_main" value="9"></td>
                                <td><input type="radio" name="covers_main" value="10"></td>
                            </tr>
                        </table>
                        <table class="box">
                            <tr>
                                <td><p class="text-left" ><b>3. Overall rating of the trainer over 100%:</b></p></td>
                                <td><input type="text" name="overall_rating" class="form-control" placeholder="......../100%"></td>
                            </tr>
                            <tr>
                                <td><p class="text-left" ><b>4.   Comments about the course leader & program:</b></p></td>
                                <td><textarea name="comments_leader_program" class="form-control" rows="3"></textarea></td>
                            </tr>
                             <tr>
                                <td><p class="text-left" ><b>5.   Suggestions for improvement (if any):</b></p></td>
                                <td><textarea name="suggestions_for_improvement" class="form-control" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <td ><p class="text-left" ><b>6.   How you have benefited from this program: </b><br><span>(ability to apply in practice, in improving problem solving skill, knowledge, professional qualifications, etc.,)</span></p></td>
                                <td><textarea name="suggestions_for_improvement" class="form-control" rows="3"></textarea></td>
                            </tr>
                        </table>
                        
                    </form><br>
                    <div class="form-group text-center">
                        <label for="submit"><b>SUBMIT TO SUPERVISOR FOR APPROVAL:</b>&emsp;</label>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success col-md-3">
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection