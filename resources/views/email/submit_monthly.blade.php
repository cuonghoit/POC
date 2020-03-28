<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p> Dear [Supervisor Name], </p>

	<p> [Staff Name] built Monthly Objectives and submitted for your review and approval. Click <a href="{{ route('AMEMMO', Auth::user()->id) }}">here</a> to review, and either approve or reject it. </p>

	<p> You can access more information, including click-by-click instructions for MSC, at the {{ asset('/pdf/guidelines_MSC.pdf')  }}. </p>

	<p> Thank you,</p>

	<p> HRIS Online Support</p>

</body>
</html>