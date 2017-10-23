<header>
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">Home</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('section.foods',['string' => 'Breakfast']) }}"><i class="fa fa-cutlery" aria-hidden="true"></i> Breakfast <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('section.foods',['string' => 'Lunch']) }}"><i class="fa fa-bed" aria-hidden="true"></i> Lunch</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('section.foods',['string' => 'Dinner']) }}"><i class="fa fa-gift" aria-hidden="true"></i> Dinner</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('section.foods',['string' => 'Drink']) }}"><i class="fa fa-coffee" aria-hidden="true"></i> Drinks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact us</a>
				</li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart (0)</a>
				</li>
			</ul>
		</div>
	</nav>
</header>