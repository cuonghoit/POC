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
                        <b>TRAINING MANAGEMENT SYSTEM</b>
                    </h5>    
                    <h4 class="text-center"><b>
                        COMPANY ANNUAL TRAINING PLAN</b>
                    </h4>
                    <br>
                    <div >
                        <form>
                            <p class="text-left">ANNUAL TRAINING PLAN</p>
                            <table>
                                <tr>
                                    <td>Training & Development period from:</td>
                                    <td><input type="date" class="form-control"></td>
                                    <td>To: </td>
                                    <td><input type="date" class="form-control"></td>
                                </tr>
                            </table>
                            <hr>
                            <div class="justify-content-center">
                                <div class="col-md-12">
                                    <table   class="table">
                                        <tr>
                                            <td  rowspan="2">No.</td>
                                            <td  rowspan="2">Name of Staff</td>
                                            <td rowspan="2">Staff Number</td>
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
                                            <td>1</td>
                                            <td>Nguyễn Thành An</td>
                                            <td>3312</td>
                                            <td>a</td>
                                            <td>b</td>
                                            <td>c</td>
                                            <td>d</td>
                                            <td>e</td>
                                            <td>f</td>
                                            <td>g</td>
                                            <td>h   </td>
                                        </tr>
                                    </table>
                                    <table class="table" >
                                        <tr >
                                            <td colspan="12" class="text-center">
                                                Training & Development Schedule
                                            </td>
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
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
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
