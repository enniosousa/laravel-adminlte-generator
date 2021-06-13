@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>Usuário</h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="card m-2 p-2">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    <div class="col-12">
                        <a href="{!! route('users.index') !!}" class="btn btn-default">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection