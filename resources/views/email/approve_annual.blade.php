<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<p>Dear [Staff Name], </p>

	<p>[Supervisor Name] approved your Annual Objectives. Click <a href="{{ route('BMAMO', Auth::user()->id) }}"> here</a>  to review and follow to achieve your objectives.   </p>

	<p>You can access more information, including click-by-click instructions for MSC, at the {{ asset('/pdf/guidelines_MSC.pdf')  }}. </p>

	<p>Thank you, </p>

	<p>HRIS Online Support </p>

</body>
</html>