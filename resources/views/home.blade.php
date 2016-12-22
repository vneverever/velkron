@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>55.73<sup style="font-size: 20px">$</sup></h3>

                    <p>Today</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>77.03<sup style="font-size: 20px">$</sup></h3>

                    <p>Yesterday</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>323.58<sup style="font-size: 20px">$</sup></h3>

                    <p>This Month</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>5329.67<sup style="font-size: 20px">$</sup></h3>

                    <p>Last Month</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div id="stocks-div"  class="col-md-12">
            {!! \Lava::render('LineChart', 'Stocks', 'stocks-div') !!}
            </div>
        </div>

@endsection
