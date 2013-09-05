@extends('layouts.default');

@section('page-title')
	CRM
@stop
@section('page-description')
	Create a new group for targeting the mailing lists
@stop

@section('quick-buttons')
	@include('marketing.quick-buttons')
@stop

@section('content')
	@foreach($errors->all() as $error)
		{{ $error }}
	@endforeach
	{{ Form::open(array('id' => 'validate', 'action' => 'TargetController@store', 'files' => true, 'class' => 'form')) }}
        <fieldset>
            <div class="widget">
                <div class="title"><img src="{{ URL::asset('images/icons/dark/list.png') }}" alt="" class="titleIcon" /><h6>Target Info</h6></div>
                <div class="formRow">
                    <label>Target group name<span class="req">*</span></label>
                    <div class="formRight"><input type="text" class="validate[required]" name="name" id="name"/></div>
                    <div class="clear"></div>
                </div>                

                <div class="formRow">
                    <label>Upload CSV</label>
                    <div class="formRight">
                    	{{ Form::file('mailing', array('id' => 'file')) }}
                    </div><div class="clear"></div>
                </div>

                <div class="formSubmit"><input type="submit" value="criar" class="blackB" /></div>
                <div class="clear"></div>
            </div>
        </fieldset>
        
		<div class="nNote nWarning hideit">
            <p><strong>WARNING: </strong>Import fields feature not implemented yet.</p>
        </div>

        <fieldset>
            <div class="widget">
                <div class="title"><img src="{{ URL::asset('images/icons/dark/transfer.png') }}" alt="" class="titleIcon" /><h6>Import Fields</h6></div>

                <div class="body">
	                <div class="leftPart">
	                    <div class="filter"><span>Filter: </span>
	                    	<input type="text" id="box1Filter" class="boxFilter" />
	                    	<input type="button" id="box1Clear" class="fBtn" value="x" />
	                    	<div class="clear"></div>
	                    </div>
	                    
	                    <select id="box1View" multiple="multiple" class="multiple" style="height:300px;">
	                    <option value="">Name</option>
	                    <option value="">Last Name</option>
	                    <option value="">Company</option>
	                    <option value="">Additional Address</option>
	                    <option value="">Address 1</option>
	                    <option value="">Address 2</option>
	                    <option value="">Address 3</option>
	                    <option value="">Address 4</option>
	                    <option value="">City</option>
	                    <option value="">State</option>
	                    <option value="">Postcode</option>
	                    <option value="">Country</option>
	                    <option value="">Email</option>
	                    <option value="">TaxVAT</option>
	                    <option value="">Order #</option>
	                    <option value="">Phone Number</option>
	                    <option value="">Customer #</option>
	                    <option value="">Recurring Profile #</option>
	                    <option value="">Recurring Profile Start Date</option>
	                    <option value="">Product ID</option>
	                    <option value="">Offer SKU</option>
	                    <option value="">Subtotal Incl Tax</option>
	                    <option value="">Shipping</option>
	                    <option value="">Discount</option>
	                    <option value="">Delivery Order Count</option>
	                    <option value="">Profile Status</option>
	                    <option value="">Dispatched</option>
	                    </select>
	                    <br/>
	                    <span id="box1Counter" class="countLabel"></span>
	                    
	                    <div class="dn"><select id="box1Storage" name="box1Storage"></select></div>
	                </div>
	                    
	                <div class="dualControl">
	                    <button id="to2" type="button" class="basic mr5 mb15">&nbsp;&gt;&nbsp;</button>
	                    <button id="allTo2" type="button" class="basic">&nbsp;&gt;&gt;&nbsp;</button><br />
	                    <button id="to1" type="button" class="basic mr5">&nbsp;&lt;&nbsp;</button>
	                    <button id="allTo1" type="button" class="basic">&nbsp;&lt;&lt;&nbsp;</button>
	                </div>
	                    
	                <div class="rightPart">
	                    <div class="filter"><span>Filter: </span><input type="text" id="box2Filter" class="boxFilter" /><input type="button" id="box2Clear" class="fBtn" value="x" /><div class="clear"></div></div>
	                    <select id="box2View" multiple="multiple" class="multiple" style="height:300px;"></select><br/>
	                    <span id="box2Counter" class="countLabel"></span>
	                    
	                    <div class="dn"><select id="box2Storage"></select></div>
	                </div>
                	<div class="clear"></div>
                </div>

            </div>
        </fieldset>
        
    {{ Form::	close() }}
@stop