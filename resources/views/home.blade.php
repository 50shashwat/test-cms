@extends('layouts.frontend.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome/Congrats you are registered successfully with us. You can now view our products.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
