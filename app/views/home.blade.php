@extends('layouts.default')

@section('page-title')
    HOME
@stop

@section('title-area')
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>Base de e-mails</h5>
            <span>Gerencie a lista de e-mails marketing</span>
        </div>
        <div class="middleNav">
            <ul>
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
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
@stop
