<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="clip-menu-3"></span>
			</button>
			<a class="navbar-brand" href="{{url('pelapak')}}">
				<img src="{{ url('admins/images/saline-small.png')}}">
			</a>
		</div>
		<div class="navbar-tools">
			<ul class="nav navbar-right">						
				
				@if (Auth::guest())
				<li class="dropdown" style="margin-top: 8px;">
					<a href="{{url('login')}}">
						<i class="clip-user"></i>
						&nbsp;Login
					</a>
				</li>	
				@else
				<li class="dropdown current-user">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<img src="{{asset('upload/pelapak/kecil/'.Auth::user()->gambar)}}" class="circle-img" alt="" width="30">
						<span class="username">{{ Auth::user()->nama }}</span>
						<i class="clip-chevron-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{url('pelapak/profil-pelapak/')}}">
								<i class="clip-user"></i>
								&nbsp;Profil
							</a>
						</li>
						<li>
							<a href="{{ url('/pelapak/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="clip-exit"></i>
								&nbsp;Log Out
                            </a>

                            <form id="logout-form" action="{{ url('/pelapak/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</li>
					</ul>
				</li>
				@endif
			</ul>
		</div>
	</div>
</div>
