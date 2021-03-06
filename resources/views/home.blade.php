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
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Weekly Visitors Report  -  {{{$data['sumVisitor'] or 0}}}</h3>
                    </div>
                    <div class="box-body" id="visitors-div">
                        {!! \Lava::render('AreaChart', 'Visitors', 'visitors-div') !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Weekly Earnings Report  -  {{{$data['sumEarnings'] or 0}}}$</h3>
                    </div>
                    <div class="box-body" id="earnings-div">
                        {!! \Lava::render('AreaChart', 'Earnings', 'earnings-div') !!}
                    </div>
                </div>
            </div>
        </div>

@endsection
