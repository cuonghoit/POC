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
                            <div class="row  ">
                                <div class="col-md-3 ">
                                     <label for="fromdate"> <b>
                                            Training & Development Period From: </b>
                                        </label>
                                </div>
                                <div class="col-md-3">
                                     <input type="date" name="fromdate">
                                </div>
                                <div class="col-md-3">
                                    <label fromto>
                                        <b> To: </b>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                      <input type="date" name="todate">
                                </div>
                            </div>
                              
                            </table>
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
                                    <th colspan="2">Traning Free</td>
                                    <th colspan="12">Training & Development Schedule</td>
                                </tr>
                                <tr class="bg-secondary">
                                    <th >
                                        US$
                                    </th>
                                    <th>
                                        VND
                                    </th>
                                    <th>
                                        Jan
                                    </th>
                                    <th>
                                        Feb
                                    </th>
                                    <th>
                                        Mar
                                    </th>   
                                    <th>
                                        Apr
                                    </th>
                                    <th>
                                        May
                                    </th>
                                    <th>
                                        Jun
                                    </th>
                                    <th>
                                        Jul
                                    </th>
                                    <th>
                                        Aug
                                    </th>
                                    <th>
                                        Sep
                                    </th>
                                    <th>
                                        Oct
                                    </th>
                                    <th>
                                        Now
                                    </th>
                                    <th>
                                        Dec
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
                                    
                                    <td>
                                        
                                     
                                    </td>
                                        
                                        
                                    </td>
                                    
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                    
                                    
                                    </td>
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
