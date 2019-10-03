@extends('layouts.frontend.main')

@section('content')
<script>
(function (global) { 

if(typeof (global) === "undefined") {
    throw new Error("window is undefined");
}

var _hash = "!";
var noBackPlease = function () {
    global.location.href += "#";

    // making sure we have the fruit available for juice (^__^)
    global.setTimeout(function () {
        global.location.href += "!";
    }, 50);
};

global.onhashchange = function () {
    if (global.location.hash !== _hash) {
        global.location.hash = _hash;
    }
};

global.onload = function () {            
    noBackPlease();

    // disables backspace on page except on input fields and textarea..
    document.body.onkeydown = function (e) {
        var elm = e.target.nodeName.toLowerCase();
        if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
            e.preventDefault();
        }
        // stopping event bubbling up the DOM tree..
        e.stopPropagation();
    };          
}

})(window);
</script>

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
