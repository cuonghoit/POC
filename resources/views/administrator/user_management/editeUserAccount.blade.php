@extends('layouts.app')

@section('content')
<style type="text/css">
    #dtHorizontalExample th, td {
    white-space: nowrap;
    }
    .Training table tbody td input[type=text]{
        width: 210px;
    }

    
</style>
<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">

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
                    <h3 class="text-center" ><b>USER ACCOUNT</b></h3><br>
                    <p class="text-left" ><b>PERSONAL INFO</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td><label for="" >Staff Name:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value=""><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="">DOB:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="">Staff Number:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="">ID Card/Passport No:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="Supervisor">Supervisor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" value="" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="">Email:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                        </tr>
                    </table><br>
                    <p class="text-left" ><b>JOB INFO</b></p>
                    <table style="width: 100%;">
                        <tr>
                            <div class="form-group">
                                <td><label for="" >Hired Date:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value=""><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="">Supersivor:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="">Job Title:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="">Supervisor Email:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="Supervisor">Date in Current Position:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="supervisor" value="" ><td></td>
                            </div>
                            <div class="form-group">
                                <td><label for="">Department:
                                </label></td>
                                <td><input type="text" class="form-control col-md-10" name="" value="" ><td></td>
                            </div>
                        </tr>
                    </table><br>
                    <div class="form-group text-center">
                        <input type="submit" name="submit" value="Edite user" class="btn btn-warning col-md-3">
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection