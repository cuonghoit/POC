@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
                <div class="card-header">
                    Training Management / Training Implementation
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    
                    	    </div>
                    @endif
                    <form action="" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <h4 class="text-center" >PHU QUOC PETROLEUM OPERATING COMPANY<br>
                        <b>TRAINING MANAGEMENT SYSTEM</b></h4><br>
                    <h3 class="text-center" ><b>TRAINING REQUEST</b></h3><br>
                    <div class="row">
	                    <div class="col-md-1 font-weight-bold">
	                    	Ref:
	                    </div>
	                    <div class="col-md-5 "> No. / YYYY / PQPOC-HRM </div>
	                    <div class="col-md-1 font-weight-bold"> Date:
	                    </div>
	                    <div class="col-md-5 "> HCMC, DD/MM/YYYY</div>
                  	</div>
                  	<br>
                  	<table class=" table table-bordered table-striped">
                  		<tr>
                  			<td class="font-weight-bold">Program title:</td>
                  			<td></td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Training purpose:</td>
                  			<td></td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Training participant:</td>
                  			<td></td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Course content:</td>
                  			<td></td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Duration:</td>
                  			<td>… days (From….. to…..)</td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Venue:</td>
                  			<td></td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Training provider:</td>
                  			<td></td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Supporting document:</td>
                  			<td>
                  				-	Attachment #1: Course content. <br>
								-	Attachment #2: Quotation. <br>
								-	Attachment #3: Participant’s Training & Financial Commitment signed with PQPOC. <br>
								-	…

                  			</td>
                  		</tr>
                  		<tr >
                  			<td class="font-weight-bold"></td>
                  			<td> - </td>
                  		</tr>

                  	</table>
                  	<table class=" table table-bordered table-striped">
                  		<tr>
                  			<td class="font-weight-bold">Total estimated cost: <br> Including:
</td>
                  			<td> … USD/VND</td>
                  			<td> Budget Cost Code: </td>
                  			<td> G0311 </td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Tuition fee:</td>
                  			<td> … USD/VND </td>
                  			<td> Taxes (VAT/CIT -if any): </td>
                  			<td></td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Logistic fee (travel, accommodation):</td>
                  			<td>Refer to Company Staff policy</td>
                  			<td> Other fees (if any):</td>
                  			<td> … USD/VND</td>
                  		</tr>
                  	</table>
                  	<table class=" table table-bordered table-striped">
                  		<tr colspan="7" class="font-weight-bold">
                  			Registration:
                  		</tr>
                  		<tr>
                  			<th>No.</th>
                  			<th>Staff name</th>
                  			<th> Position/Department </th>
                  			<th> Cost/Pax</th>
                  			<th> Employee Code</th>
                  			<th> Staff signature </th>
                  			<th> Supervisor’s approval </th>

                  		</tr>
                  		<tr>
                  			<td>1</td>
                  			<td></td>
                  			<td></td>
                  			<td></td>
                  			<td></td>
                  			<td> Date: </td>
                  			<td> Date: </td>
                  			<td> </td>
                  		</tr>
                  		<tr>
                  			<td>2</td>
                  			<td></td>
                  			<td></td>
                  			<td></td>
                  			<td></td>
                  			<td>Date:</td>
                  			<td> Date:</td>
                  		</tr>

                  	</table>
                  	<table class=" table table-bordered table-striped">
                  		<tr>
                  			<td class="font-weight-bold">Commitment:</td>
                  			<td>
                  				<p>Training participant must commit to follow PVN’s Training Policy and Training & Financial Commitment signed with PQPOC.</p>
                  			</td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Remark:</td>
                  			<td>
                  				• &nbsp Participant is requested to do post-training evaluation along with a presentation slide to HRM in 14 days from the training completion date. This report includes training summary, comments and recommendation about the training event. <br>
                  				• &nbsp Participant shall arrange to present about what they have learnt and benefited from the training course to their Line manager and other team members.
                  			</td>
                  		</tr>
                  	</table>
                  	<table class=" table table-bordered table-striped">
                  		<tr>
                  			<td class="font-weight-bold">Prepared by HRM -training & development:</td>
                  			<td>(*signature of HRM training specialist)</td>
                  			<td>
                  				Name: <br>
                  				Date:
                  			</td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Verified by HRM Manager:</td>
                  			<td>(*signature of HRM Manager)</td>
                  			<td>
                  				Name: <br>
                  				Date:
                  			</td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Checked by Chief Accountant:</td>
                  			<td>(*signature of Chief Accountant)</td>
                  			<td>
                  				Name: <br>
                  				Date:
                  			</td>
                  		</tr>
                  		<tr>
                  			<td class="font-weight-bold">Approved by General Director:</td>
                  			<td>(*signature of GD)</td>
                  			<td>
                  				Name: <br>
                  				Date:
                  			</td>
                  		</tr>
                  	</table>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection