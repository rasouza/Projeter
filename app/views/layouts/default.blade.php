<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>Projeter - @yield('page-title')</title>
{{ HTML::style("css/main.css") }}

{{ HTML::script("http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js") }}

{{ HTML::script("js/plugins/spinner/ui.spinner.js") }}
{{ HTML::script("js/plugins/spinner/jquery.mousewheel.js") }}

{{ HTML::script("http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js") }}

{{ HTML::script("js/plugins/charts/excanvas.min.js") }}
{{ HTML::script("js/plugins/charts/jquery.flot.js") }}
{{ HTML::script("js/plugins/charts/jquery.flot.orderBars.js") }}
{{ HTML::script("js/plugins/charts/jquery.flot.pie.js") }}
{{ HTML::script("js/plugins/charts/jquery.flot.resize.js") }}
{{ HTML::script("js/plugins/charts/jquery.sparkline.min.js") }}

{{ HTML::script("js/plugins/forms/uniform.js") }}
{{ HTML::script("js/plugins/forms/jquery.cleditor.js") }}
{{ HTML::script("js/plugins/forms/jquery.validationEngine-en.js") }}
{{ HTML::script("js/plugins/forms/jquery.validationEngine.js") }}
{{ HTML::script("js/plugins/forms/jquery.tagsinput.min.js") }}
{{ HTML::script("js/plugins/forms/autogrowtextarea.js") }}
{{ HTML::script("js/plugins/forms/jquery.maskedinput.min.js") }}
{{ HTML::script("js/plugins/forms/jquery.dualListBox.js") }}
{{ HTML::script("js/plugins/forms/jquery.inputlimiter.min.js") }}
{{ HTML::script("js/plugins/forms/chosen.jquery.min.js") }}

{{ HTML::script("js/plugins/wizard/jquery.form.js") }}
{{ HTML::script("js/plugins/wizard/jquery.validate.min.js") }}
{{ HTML::script("js/plugins/wizard/jquery.form.wizard.js") }}

{{ HTML::script("js/plugins/uploader/plupload.js") }}
{{ HTML::script("js/plugins/uploader/plupload.html5.js") }}
{{ HTML::script("js/plugins/uploader/plupload.html4.js") }}
{{ HTML::script("js/plugins/uploader/jquery.plupload.queue.js") }}

{{ HTML::script("js/plugins/tables/datatable.js") }}
{{ HTML::script("js/plugins/tables/tablesort.min.js") }}
{{ HTML::script("js/plugins/tables/resizable.min.js") }}

{{ HTML::script("js/plugins/ui/jquery.tipsy.js") }}
{{ HTML::script("js/plugins/ui/jquery.collapsible.min.js") }}
{{ HTML::script("js/plugins/ui/jquery.prettyPhoto.js") }}
{{ HTML::script("js/plugins/ui/jquery.progress.js") }}
{{ HTML::script("js/plugins/ui/jquery.timeentry.min.js") }}
{{ HTML::script("js/plugins/ui/jquery.colorpicker.js") }}
{{ HTML::script("js/plugins/ui/jquery.jgrowl.js") }}
{{ HTML::script("js/plugins/ui/jquery.breadcrumbs.js") }}
{{ HTML::script("js/plugins/ui/jquery.sourcerer.js") }}

{{ HTML::script("js/plugins/calendar.min.js") }}
{{ HTML::script("js/plugins/elfinder.min.js") }}

{{ HTML::script("js/custom.js") }}

{{ HTML::script("js/charts/chart.js") }}

</head>

<body>

<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="{{ URL::action('HomeController@showWelcome') }}"><img src="{{ URL::asset('images/logo.png')}}" alt="" /></a></div>
    
    <div class="sidebarSep mt0"></div>
    
    <!-- Search widget -->
    <form action="" class="sidebarSearch">
        <input type="text" name="search" placeholder="search..." id="ac" />
        <input type="submit" value="" />
    </form>
    
    <div class="sidebarSep"></div>

    <!-- General balance widget -->
    <div class="genBalance">
        <a href="#" title="" class="amount">
            <span>General balance:</span>
            <span class="balanceAmount">$10,900.36</span>
        </a>
        <a href="#" title="" class="amChanges">
            <strong class="sPositive">+0.6%</strong>
        </a>
    </div>
    
    <!-- Next update progress widget -->
    <div class="nextUpdate">
        <ul>
            <li>Next update in:</li>
            <li>23 hrs 14 min</li>
        </ul>
        <div class="pWrapper"><div class="progressG" title="78%"></div></div>
    </div>
    
    <div class="sidebarSep"></div>
    
    <!-- Left navigation -->
    
    <ul id="menu" class="nav">
	@section('left-navigation')
        <li class="users"><a href="#" title=""  class="exp"><span>Marketing</span></a>
            <ul class="sub">
                <li><a href="#" title="">Newsletters</a></li>
                <li class="last"><a href="{{ URL::action('Marketing_TargetController@index') }}" title="">CRM</a></li>
            </ul>
        </li>
        <li class="building"><a href="#" title=""><span>Operacional</span></a>
            <ul class="sub">
                <li class="last"><a href="{{ URL::action('Operacional_ChargerunController@index') }}" title="">Chargerun</a></li>
            </ul>
        </li>
        <li class="cart"><a href="#" title=""><span>Comercial</span></a></li>
        <li class="dash"><a href="http://demo.kopyov.com/crown/" title="" target="_blank"><span>DEMO</span></a></li>
	@show
    </ul>
    
</div>


<!-- Right side -->
<div id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="{{ URL::asset('images/userPic.png') }}" alt="" /></a><span>Howdy, {{ $user }}!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/topnav/profile.png') }}" alt="" /><span>Profile</span></a></li>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/topnav/tasks.png') }}" alt="" /><span>Tasks</span></a></li>
                    <li class="dd"><a title=""><img src="{{ URL::asset('images/icons/topnav/messages.png') }}" alt="" /><span>Messages</span><span class="numberTop">8</span></a>
                        <ul class="userDropdown">
                            <li><a href="#" title="" class="sAdd">new message</a></li>
                            <li><a href="#" title="" class="sInbox">inbox</a></li>
                            <li><a href="#" title="" class="sOutbox">outbox</a></li>
                            <li><a href="#" title="" class="sTrash">trash</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/topnav/settings.png') }}" alt="" /><span>Settings</span></a></li>
                    <li><a href="login.html" title=""><img src="{{ URL::asset('images/icons/topnav/logout.png') }}" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="#" title=""><img src="{{ URL::asset('images/loginLogo.png') }}" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="{{ URL::asset('images/icons/light/home.png') }}" alt="" />Dashboard</span>
            <ul class="smallDropdown">
		<li><a href="#" title="">Home</a></li>
		<li><a href="#" title=""  class="exp"><img src="{{ URL::asset('images/icons/light/stats.png') }}" alt="" />Marketing</a>
		    <ul>
		        <li><a href="#" title="">Newsletters</a></li>
		        <li class="last"><a href="#" title="">CRM</a></li>
		    </ul>
		</li>
		<li><a href="#" title="">Operacional</a></li>
		<li><a href="#" title="">Comercial</a></li>
		<li><a href="http://demo.kopyov.com/crown/" title="" target="_blank"><img src="{{ URL::asset('images/icons/light/home.png') }}" alt="" />DEMO</a></li>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    <!-- Title area -->
    
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>@yield('page-title')</h5>
                <span>@yield('page-description')</span>
            </div>
            <div class="middleNav">
                <ul>
			@section('middle-nav')
                    <li class="mUser"><a title=""><span class="users"></span></a>
                        <ul class="mSub1">
                            <li><a href="#" title="">Add user</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Orders</a></li>
                        </ul>
                    </li>
                    <li class="mMessages"><a title=""><span class="messages"></span></a>
                        <ul class="mSub2">
                            <li><a href="#" title="">New tickets<span class="numberRight">8</span></a></li>
                            <li><a href="#" title="">Pending tickets<span class="numberRight">12</span></a></li>
                            <li><a href="#" title="">Closed tickets</a></li>
                        </ul>
                    </li>
                    <li class="mFiles"><a href="#" title="Or you can use a tooltip" class="tipN"><span class="files"></span></a></li>
                    <li class="mOrders"><a title=""><span class="orders"></span><span class="numberMiddle">8</span></a>
                        <ul class="mSub4">
                            <li><a href="#" title="">Pending uploads</a></li>
                            <li><a href="#" title="">Statistics</a></li>
                            <li><a href="#" title="">Trash</a></li>
                        </ul>
                    </li>
			@show
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    
    <!-- Page statistics and control buttons area -->
    <div class="statsRow">
        <div class="wrapper">
            <div class="controlB">
                <ul>	
			<!-- ICONs are in icons/control/32/ -->
			@section('quick-buttons')
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/control/32/plus.png') }}" alt="" /><span>Add new session</span></a></li>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/control/32/database.png') }}" alt="" /><span>New DB entry</span></a></li>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/control/32/hire-me.png') }}" alt="" /><span>Add new user</span></a></li>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/control/32/statistics.png') }}" alt="" /><span>Check statistics</span></a></li>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/control/32/comment.png') }}" alt="" /><span>Review comments</span></a></li>
                    <li><a href="#" title=""><img src="{{ URL::asset('images/icons/control/32/order-149.png') }}" alt="" /><span>Check orders</span></a></li>
			@show
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    
    <div class="line"></div>
    
    <!-- Main content wrapper -->
    
    <div class="wrapper">
    	
       @yield('content')
    
    </div>
    
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
    </div>

</div>

<div class="clear"></div>

</body>
</html>
