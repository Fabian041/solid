@extends('app')

@section('content')
<br/>
<center><big><big>
	<font face='calibri' color='grey'>
		<marquee direction="left" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();" width="15%">
			SALAM AKU PRIMA !! 
		</marquee> 
		<marquee direction="right" scrollamount="4" width="15%" onmouseover="this.stop();" onmouseout="this.start();">
			CHAMPION !!
		</marquee>
	</font>
</big></big></center>			
<center>
	<big><big><big><big><big>
		<font face='calibri' color='grey'><b>SOLID</font><font face='calibri' color='grey'> (Aisin Operational Invoice Document)</b></font>
	</big></big></big></big></big>
</center>
<br/><br/>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-7">
					<div class="item active">
						<center>
							<img src="{{ asset('img/bg.JPG') }}" width='75%' class="img-thumbnail img-responsive">
						</center>
			</div>
		</div>
		<div class="col-md-4">
			<center>
			<div class="panel panel-success">
				<div class="panel-heading"><big><big><big><font face='calibri'><b><center>SIGN IN</center></b></font></big></big></big></div>
				<div class="panel-info"><div class="panel-heading">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Pft!</strong> invalid E-Mail Address or Password<br>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-0 control-label"></label>
							<div class="col-md-12">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" autofocus required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-0 control-label"></label>
							<div class="col-md-12">
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-1 col-md-offset-0">
								<button type="submit" class="btn btn-primary"><big><font face='calibri'><b>LOGIN</b></font></big></button>
							</div>
						</div>
					</form>
				</div>
				</div>
				</div>
			</div>
		</center>
		</div>
	</div>
</div>
<br/><br/><br/>
@endsection
