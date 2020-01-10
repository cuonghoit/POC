@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

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
                    <div >
                        <form>
                            <b class="text-left">ANNUAL TRAINING PLAN</b>
                            <table>
                                <tr>
                                    <td><b>Training & Development period from:</b></td>
                                    
                                    <td><input type="date" class="form-control" ></td>
                                    <td>To: </td>
                                    <td><input type="date" class="form-control" class="form-control" ></td>
                                    
                                </tr>
                            </table>
                          <br>
                            <div class="justify-content-center">
                                <div class="col-md-12">
                                    <table   class="table text-center">
                                        <tr>
                                            <td  rowspan="2">No</td>
                                            <td  rowspan="2">Name of Staff</td>
                                           
                                            <td rowspan="2">Name of Training
Development Program</td>
                                            <td rowspan="2">Disciplines <br>
(Geology, Finance, HRM, Legal …)</td>
                                            <td rowspan="2">Type of Program
(e-Learning, Classroom …)</td>
                                            <td rowspan="2">Purpose of program <br>
(Close Competency Gaps, Develop Competencies, Doctorate …)</td>
                                            <td rowspan="2">Provider</td>
                                            <td rowspan="2">Location</td>
                                            <td colspan="2">
                                                Training Free
                                            </td>

                                            
                                        </tr>
                                        <tr>
                                            <td>US$</td>
                                            <td>VND </td>
                                        </tr>
                                    
                                        <tr>
                                            <td >1</td>
                                         
                                            <td></td>
                                            
                                           
                                            <td ></td>
                                            <td ></td>
                                            <td ></td>
                                            <td ></td>
                                            <td ></td>
                                            <td ></td>
                                            
                                       
                                            <td></td>
                                            <td> </td>
                                           
                                        </tr>
                                     
                                    </table>
                                    <table class="table text-center" >
                                        <tr >
                                            <td colspan="12" >
                                                <b>Training & Development Schedule</b>
                                        </tr>
                                        <tr>
                                            <td>Jan</td>
                                            <td>Feb</td>
                                            <td>Mar</td>
                                            <td>Apr</td>
                                            <td>May</td>
                                            <td>Jun</td>
                                            <td>Jul</td>
                                            <td>Aug</td>
                                            <td>Sep</td>
                                            <td>Oct</td>
                                            <td>Nov</td>
                                            <td>Dec</td>
                                        </tr>
                                         <tr>
                                            <td><input type="checkbox" name="month[]" value="1"></td>
                                            <td><input type="checkbox" name="month[]" value="2"></td>
                                            <td><input type="checkbox" name="month[]" value="3"></td>
                                            <td><input type="checkbox" name="month[]" value="4"></td>
                                            <td><input type="checkbox" name="month[]" value="5"></td>
                                            <td><input type="checkbox" name="month[]" value="6"></td>
                                            <td><input type="checkbox" name="month[]" value="7"></td>
                                            <td><input type="checkbox" name="month[]" value="8"></td>
                                            <td><input type="checkbox" name="month[]" value="9"></td>
                                            <td><input type="checkbox" name="month[]" value="10"></td>
                                            <td><input type="checkbox" name="month[]" value="11"></td>
                                            <td><input type="checkbox" name="month[]" value="12"></td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="text-center">SUBMIT TO GENERAL DIRECTOR FOR APPROVAL:
                                    <input type="submit" name="submit" class="btn btn-secondary"> 
                                </p>
                                <div class="float-right">
                                    <button>Print out</button>
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
