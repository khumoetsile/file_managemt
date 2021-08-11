@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User') $user->name }}</div>

                <div class="card-body">
                    <form action="{{ route('admin.users.update',$user) }}" >
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
