<div class="navbar-content">
	<div class="main-navigation navbar-collapse collapse">
		<div class="navigation-toggler">
			<i class="clip-chevron-left"></i>
			<i class="clip-chevron-right"></i>
		</div>
		<ul class="main-navigation-menu">
			<li class="{{ set_active('pelapak/home') }}">
				<a href="{{ url('pelapak/home') }}"><i class="icon-laptop"></i>
					<span class="title">Home</span>
					<span class="selected"></span>					
				</a>
			</li>			
			<li class="{{ set_active(['pelapak/setting', Request::is('pelapak/setting/*')]) }}">
				<a href="{{ url('pelapak/setting') }}"><i class="clip-stack"></i>
					<span class="title">Setting</span>
					<span class="selected"></span>					
				</a>
			</li>
			<li class="{{ set_active(['pelapak/paket', Request::is('pelapak/paket/*')]) }}">
				<a href="{{ url('/pelapak/paket') }}"><i class="clip-stack"></i>
					<span class="title">Data Paket</span>
					<span class="selected"></span>
				</a>
			</li>
			<li class="{{ set_active(['pelapak/pemesanan', Request::is('pelapak/pemesanan/*')]) }}">
				<a href="{{ url('/pelapak/pemesanan') }}"><i class="clip-stack"></i>
					<span class="title">Data Pemesanan</span>
					<span class="selected"></span>
				</a>
			</li>
			<li class="{{ set_active(['pelapak/konfirmasi', Request::is('pelapak/konfirmasi/*')]) }}">
				<a href="{{ url('/pelapak/konfirmasi') }}"><i class="clip-stack-2"></i>
					<span class="title">Konfirmasi</span>
					<span class="selected"></span>
				</a>
			</li>
			<li class="{{ set_active(['pelapak/review', Request::is('pelapak/review/*')]) }}">
				<a href="{{ url('pelapak/review') }}"><i class="clip-stack"></i>
					<span class="title">Review</span>
					<span class="selected"></span>
				</a>
			</li>
			<li>
				<a href="{{ url('pelapak/logout') }}"
                    onclick="event.preventDefault();
                 	document.getElementById('logout-form').submit();">
                    <i class="clip-exit"></i>
					<span class="title">Keluar</span>
					<span class="selected"></span>
                </a>

                <form id="logout-form" action="{{ url('pelapak/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
			</li>				
		</ul>
	</div>
</div>