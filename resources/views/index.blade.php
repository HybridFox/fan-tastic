@extends('layouts.app')

@section('content')
    <div class="cta">
        <div class="cta__center">
            <div class="container">
                <h1 class="cta__header">
                    Fan-Tastic: A collection of events from all different kinds of fandom
                </h1>
                <h3 class="cta__subheader">
                    Something here about how great this is
                </h3>
                <div class="cta__search">
                    <input type="text" class="cta__field" placeholder="Location, Name, Fandom,...">
                    <i class="fa fa-search cta__searchicon"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
