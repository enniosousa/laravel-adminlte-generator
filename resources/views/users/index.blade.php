@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="float-left">Usuários</h1>
        <h1 class="float-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.create') !!}">Adicionar novo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="card mt-4">
                    @include('users.table')
                </div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

