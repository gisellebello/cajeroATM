<!-- resources/views/principal.blade.php -->

@extends('layouts.app')

@section('content')

        <!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    <h1> Cajero automatico </h1>

    <!-- CRUD Form -->
    <form action="{{ url('atm') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}


        <div class="form-group">
            <label for="atm" class="col-sm-3 control-label">¿Que cantidad quiere disponer?</label>

            <div class="col-sm-6">
                <input type="text" name="amount" id="atm-amount" class="form-control">
            </div>
        </div>

        <!-- Login Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Enviar
                </button>
            </div>
        </div>
    </form>
</div>

<!-- TODO: Current Tasks -->
@endsection