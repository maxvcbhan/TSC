<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
      <table class="table">
       <thead>
        <tr>
            <th>#</th>
            <th>Dscribe</th>
            <th>Location</th>
            <th>Status</th>
            
        </tr>
        </thead>
     <tbody>
     @if($notifies)
	@foreach($notifies as $notify)
            <tr>
                <td>
                 <a href="/../notify/{{ $notify->id }}">    
                       {{ $notify->id }}
                  </a></td>
                <td>{{ $notify->describe }}</td>
                <td>{{ $notify->location }}</td>
                <td>{{ $notify->status }}</td>
                <td> <a class="btn btn-primary" href="{{ URL::route('rating.edit', $notify->rate_id) }}">ประเมิน</a> 
                </td>


            </tr>
        @endforeach
        @endif
     </tbody>
     </table>
	 
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

