@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Training Management / Company Annual Trainning Plan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="text-center">
                        PHU QUOC PETROLEUM OPERATING COMPANY <br>
                        <b>TRAINING MANAGEMENT SYSTEM</b> <br> <br>
                    <h4 class="text-center"><b>
                        APPROVE COMPANY ANNUAL TRAINING PLAN</b>
                    </h4>
                    <br>
                   
                        <form>
                            <table style="width: 100%;">
                                <tr>
                                    <td>Training & Development period from:</td>
                                    <div class="form-group">
                                        <td><b>From Year:</b></td>
                                        <td><input type="text" name="dateFrom" class="datepicker form-control col-md-8" value=""></td>
                                        <td><b>To Year: </b></td>
                                        <td><input type="text" name="dateTo" class="datepicker form-control col-md-8" value=""></td>
                                    </div>
                                </tr>
                            </table><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center" style="white-space: nowrap;" >
                                <tr class="bg-secondary" >
                                    <th rowspan="2" >
                                        No.
                                    </th>
                                    <th rowspan="2">
                                        Name of Staff
                                    </th>
                                    <th rowspan="2">
                                        Name of Training & <br> Development Program
                                    </th>
                                    <th rowspan="2">
                                        Disciplines <br> (Geology, Finance, HRM, Legal …)
                                    </th>
                                    <th rowspan="2">
                                        Type of Program <br> (e-Learning, Classroom …)
                                    </th>
                                    <th rowspan="2">
                                        Purpose of Program <br> (Close Competency Gaps, <br>Develop Competencies, Doctorate …)
                                    </th>
                                    <th rowspan="2">
                                        Provider
                                    </th>
                                    <th rowspan="2">
                                        Location
                                    </th>
                                    <th colspan="2" >Traning Free</td>
                                    <th rowspan="2" >From Date</td>
                                    <th rowspan="2" >To Date</th>
                                    <th rowspan="2" >Note</th>
                                </tr>
                                <tr class="bg-secondary">
                                    <th >
                                        US$
                                    </th>
                                    <th>
                                        VND
                                    </th>
                                </tr>
                                <tr class="bg-primary">
                                    <td></td>
                                    <td colspan="22" class="text-left">
                                        DEPARTMENT: ADMIN
                                    </td>
                                   
                                </tr>
                                 
                                <tr >
                                    
                                    <td>1</td>
                                    
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
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <td>2</td>
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
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr >
                                    <td>3</td>
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
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="bg-primary">
                                    <td></td>
                                    <td colspan="22" class="text-left">
                                        DEPARTMENT: DRILLING & COMPLETION
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>4</td>
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
                                    <td></td>
                                    <td></td>
                                </tr>
                                   <tr>
                                    <td>5</td>
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
                                    <td></td>
                                    <td></td>
                                </tr>
                                   <tr>
                                    <td>6</td>
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
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7</td>
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
                                    <td></td>
                                    <td></td>

                                </tr>
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
</div>
@endsection
