@extends('layouts.app',['title' => 'Houses list'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-20">
                <div class="card-body">
                    <div class="app">
                        <house-seach></house-seach>
                    </div>
                </div>
            </div>
        </div>
@endsection
