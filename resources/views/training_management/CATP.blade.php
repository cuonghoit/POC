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
                        COMPANY ANNUAL TRAINING PLAN</b>
                    </h4>
                    <br>
                   
                        <form>
                            <div class="row  ">
                                <div class="col-md-3 ">
                                     <label for="fromdate"> <b>
                                            Training & Development Period From: </b>
                                        </label>
                                </div>
                                <div class="col-md-3">
                                     <input type="text" name="fromdate" class="datepicker form-control">
                                </div>
                                <div class="col-md-3">
                                    <label fromto>
                                        <b> To: </b>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                      <input type="text" name="todate" class="datepicker form-control">
                                </div>
                            </div>
                              <br>
                            </table>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center" style="white-space: nowrap;" >
                                <tr class="bg-secondary" >
                                    <th rowspan="2">
                                        No.
                                    </th>
                                    <th rowspan="2">
                                        Name of Staff
                                    </th>
                                    <th rowspan="2">
                                        Staff Number
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
                                    <th colspan="2">Traning Free</th>
                                    <th colspan="2">Training & Development Schedule</th>
                                    <th rowspan="2">Note</th>
                                    <th colspan="3">Status</th>

                                </tr>
                                <tr class="bg-secondary">
                                    <th >
                                        US$
                                    </th>
                                    <th>
                                        VND
                                    </th>
                                    <th>
                                        From Date
                                    </th>
                                    <th>
                                        To Date
                                    </th>
                                    <th>Finished</th>
                                    <th>Unfinished</th>
                                    <th>Submitted</th>
                                  
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
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>   

                                </tr>
                            </table>
                    </div>
                                <h6 class="text-center">SUBMIT TO GENERAL DIRECTOR FOR APPROVAL:
                                    <input type="submit" name="submit" class="btn btn-secondary"> 
                                </h6>
                                <div class="float-right">
                                    <button class="btn-primary">Print out</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
