@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('لوحة التحكم') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<div  class=" d-flex justify-content-between">
                                        <a href="#">إعدادات</a>
<a href="/registrations" class="text-right">قائمة المسجلين </a>
                    <a href="/formations">التحكم في الدورات </a>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
