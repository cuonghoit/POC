<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<p> Dear [Staff Name], </p>

	<p> [Supervisor Name] rejected your Annual Objectives. Click <a href="{{ route('BMAMO', Auth::user()->id) }}">here</a> to view the reason for rejection and your supervisor’s comments  then revise your Annual Objectives accordingly. </p>

	<p> You can access more information, including click-by-click instructions for MSC, at the {{ asset('/pdf/guidelines_MSC.pdf')  }}. </p>

	<p> Thank you, </p>

	<p> HRIS Online Support </p>

</body>
</html>