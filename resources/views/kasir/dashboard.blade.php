@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->


<div class="row">
    <div class="col-lg-12">

       <center> <div class="box">
            <div class="box-body text-center">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $member }}</h3>

                            <p>Total Member</p>
                        </div>

                        <a href="{{ route('member.index') }}" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <br>
                <a href="{{ route('transaksi.baru') }}" class="btn btn-success btn-lg">Transaksi Baru</a>
                <br><br>
                <a href="{{ route('member.index') }}" class="btn btn-success btn-lg bg-red">Member Baru</a>
            </center>



                <br><br><br>
            </div>
        </div>
    </div>
</div>
<!-- /.row (main row) -->
@endsection
