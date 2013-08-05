@extends('layouts.default');

@section('page-title')
	Chargerun
@stop
@section('page-description')
	Overview from all Chargerun requests that need to be done
@stop

@section('quick-buttons')
	
@stop

@section('content')
	<div class="nNote nInformation hideit">
        <p><strong>NOTE: </strong>This information is for <strong>{{ date('F', strtotime('+1 month')) }}</strong></p>
    </div>
	<div class="widgets">

		<!-- Beauty Standard -->
		<div class="oneTwo">
			<div class="widget">
		        <div class="title"><img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" /><h6>Beauty standard</h6></div>
		        <div class="body">
                	<div class="list arrowB">
                        <ul>
                            <li><strong>COUNTRY:</strong> BR</li>
							<li><strong>OFFER:</strong> y.12.m.pp.addpremium, y.01.m.pp.gift, beauty_gift_FX6D_M_PP, beauty_gift_FX3D_M_PP, beauty_bijoux_FX12D_M_PP, beauty_FX12D_M_PP, beauty_FX6D_M_PP, beauty_FX3D_M_PP, beauty_FX1D_M_PP, beauty_EL_M_RC</li>
							<li><strong>BOX:</strong> y.{{ date('Y.m', strtotime('+1 month')) }}.s</li>
							<li><strong>ENO:</strong> 14.000</li>
							<li><strong>CHARGE UNTIL:</strong> {{ date('t/m/Y', strtotime('+1 month')) }}</li>
                        </ul>
                    </div>
                </div>
		    </div>
		</div>

		<!-- Premium Standard -->
		<div class="oneTwo">
			<div class="widget">
		        <div class="title"><img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" /><h6>Premium standard</h6></div>
		        <div class="body">
                	<div class="list arrowB">
                        <ul>
                            <li><strong>COUNTRY:</strong> BR</li>
							<li><strong>OFFER:</strong> g.12.m.pp.addbeauty, g.01.m.pp.gift, premium_gift_FX12D_M_PP, premium_gift_FX6D_M_PP, premium_gift_FX3D_M_PP, glossy_FX1D_M_PP, glossy_FX12D_M_PP, glossy_EL_M_RC, beauty_FX1D_M_PP, beauty_EL_M_RC</li>
							<li><strong>BOX:</strong> g.{{ date('Y.m', strtotime('+1 month')) }}.s</li>
							<li><strong>ENO:</strong> 14.000</li>
							<li><strong>CHARGE UNTIL:</strong> {{ date('t/m/Y', strtotime('+1 month')) }}</li>
                        </ul>
                    </div>
                </div>
		    </div>
		</div>

	</div>

	<div class="widgets">
	
		<!-- Harper's Beauty -->
		<div class="oneThree">
			<div class="widget">
		        <div class="title">
		        	<img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" />
		        	<h6>Harper's Beauty</h6>
		        </div>
		        <div class="body">
                	<div class="list arrowB">
                        <ul>
                            <li><strong>COUNTRY:</strong> BR</li>
							<li><strong>OFFER:</strong> y.12.m.pp.harpers, y.06.m.pp.harpers, y.03.m.pp.harpers</li>
							<li><strong>BOX:</strong> y.{{ date('Y.m', strtotime('+1 month')) }}.x.0001</li>
							<li><strong>ENO:</strong> 100</li>
							<li><strong>CHARGE UNTIL:</strong> {{ date('t/m/Y', strtotime('+1 month')) }}</li>
                        </ul>
                    </div>
                </div>
		    </div>
		</div>

		<!-- Harper's Premium -->
		<div class="oneThree">
			<div class="widget">
		        <div class="title">
		        	<img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" />
		        	<h6>Harper's Premium</h6>
		        </div>
		        <div class="body">
                	<div class="list arrowB">
                        <ul>
                            <li><strong>COUNTRY:</strong> BR</li>
							<li><strong>OFFER:</strong> g.12.m.pp.harpers, g.06.m.pp.harpers, g.03.m.pp.harpers</li>
							<li><strong>BOX:</strong> g.{{ date('Y.m', strtotime('+1 month')) }}.x.0001</li>
							<li><strong>ENO:</strong> 100</li>
							<li><strong>CHARGE UNTIL:</strong> {{ date('t/m/Y', strtotime('+1 month')) }}</li>
                        </ul>
                    </div>
                </div>
		    </div>
		</div>

		<!-- Harper's Magazine -->
		<div class="oneThree">
			<div class="widget">
		        <div class="title">
		        	<img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" />
		        	<h6>Harper's Magazine</h6>
		        </div>
		        <div class="body">
                	<div class="list arrowB">
                        <ul>
                            <li><strong>COUNTRY:</strong> BR</li>
							<li><strong>OFFER:</strong> g.12.m.rc.magazine</li>
							<li><strong>BOX:</strong> g.{{ date('Y.m', strtotime('+1 month')) }}.x.0002</li>
							<li><strong>ENO:</strong> 100</li>
							<li><strong>CHARGE UNTIL:</strong> {{ date('t/m/Y', strtotime('+1 month')) }}</li>
                        </ul>
                    </div>
                </div>
		    </div>
		</div>

	</div>

	<div class="widgets">

		<!-- Beauty + Premium -->
		<div class="oneTwo">
			<div class="widget">
		        <div class="title">
		        	<img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" />
		        	<h6>Beauty + Premium</h6>
		        </div>
		        <div class="body">
                	<div class="list arrowB">
                        <ul>
                            <li><strong>COUNTRY:</strong> BR</li>
							<li><strong>OFFER:</strong> g.y.el.m.rc.mix</li>
							<li><strong>BOX:</strong> g.{{ date('Y.m', strtotime('+1 month')) }}.x.0003</li>
							<li><strong>ENO:</strong> 200</li>
							<li><strong>CHARGE UNTIL:</strong> {{ date('t/m/Y', strtotime('+1 month')) }}</li>
                        </ul>
                    </div>
                </div>
		    </div>
		</div>

		<!-- Men -->
		<div class="oneTwo">
			<div class="widget">
		        <div class="title">
		        	<img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" />
		        	<h6>Men</h6>
				</div>
		        <div class="body">
                	<div class="list arrowB">
                        <ul>
                            <li><strong>COUNTRY:</strong> BR</li>
							<li><strong>OFFER:</strong> men_gift_FX6D_Q_PP, men_gift_FX4D_Q_PP, men_FX6D_Q_PP, men_FX4D_Q_PP, men_EL_Q_RC</li>
							<li><strong>BOX:</strong> men-q3-2013</li>
							<li><strong>ENO:</strong> 1000</li>
							<li><strong>CHARGE UNTIL:</strong> {{ date('t/m/Y', strtotime('+1 month')) }}</li>
                        </ul>
                    </div>
                </div>
		    </div>
		</div>

	</div>
@stop