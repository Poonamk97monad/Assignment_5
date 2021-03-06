@extends('parent')
@if ($strMessage =Session::get('success') )
    <div class="alert alert-success">
        <p>{{$strMessage}}</p>
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="app">
    <div class="container" >
        <div class="col-md-9">
            <resources-search></resources-search>
        </div>
    </div>
    <br><br>
    <div class="container" >
        <div class="col-md-12">

    </div>
</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
