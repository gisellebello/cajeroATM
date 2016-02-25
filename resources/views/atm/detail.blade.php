<!-- resources/views/principal.blade.php -->

@extends('layouts.app')

@section('content')

        <!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    <h1> Detalle de billetes </h1>
    <!-- CRUD Form -->
    <form action="{{ url('atm/detail/') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}


        <div class="form-group">
            <label for="atm" class="col-sm-3 control-label">Billetes de 100</label>

            <div class="col-sm-6">
                <input type="text" name="hundred" id="atm-amount" class="form-control" value="<?php echo($hundred);?>">
            </div>
        </div>

        <div class="form-group">
            <label for="atm" class="col-sm-3 control-label">Billetes de 50</label>

            <div class="col-sm-6">
                <input type="text" name="hundred" id="atm-amount" class="form-control" value="<?php echo($fifty);?>">
            </div>
        </div>

        <div class="form-group">
            <label for="atm" class="col-sm-3 control-label">Billetes de 20</label>

            <div class="col-sm-6">
                <input type="text" name="hundred" id="atm-amount" class="form-control" value="<?php echo($twenty);?>">
            </div>
        </div>

        <div class="form-group">
            <label for="atm" class="col-sm-3 control-label">Billetes de 10</label>

            <div class="col-sm-6">
                <input type="text" name="hundred" id="atm-amount" class="form-control" value="<?php echo($ten);?>">
            </div>
        </div>


    </form>
</div>

<!-- TODO: Current Tasks -->
@endsection