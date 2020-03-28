<!DOCTYPE html>
<html>
<head>
	<title>Annual Objectives Building Submitted</title>	
</head>
<body >

	@foreach($personal_info as $personal_info)
	<p>Dear {{ $personal_info->supervisor_name}} </p>

	<p> {{ $personal_info->first_name }} {{ $personal_info->middle_name }} {{ $personal_info->last_name }} build Annual Objectives and submitted for your review and approval. Click <a href="{{ route('AMEAMO',Auth::user()->id)}}">here</a>  to review, and either approve or reject it. </p>

	<p> You can access more information, including click-by-click instructions for MSC, at the {{ asset('/pdf/guidelines_MSC.pdf')  }} </p>

	<p> Thank you, </p>

	<p> HRIS Online Support </p>
	@endforeach
	
</body>
</html>