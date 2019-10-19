@extends('layouts.backend.app')

@section('head')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection


@section('script')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <script >
    $(document).ready(function() {

        $('#editor').summernote({
        height:250,
        });

    });
    </script>
    <script>
       function changeCategory(){
           let select = document.getElementById("category");
           let id = select.options[select.selectedIndex].value;

            let url = "{{env('APP_URL')}}/api/categories/"+id;
            fetch(url, { headers: { "Content-Type": "application/json; charset=utf-8" }})
            .then(res=> res.json())
            .then(response=>{
                let subcategoriesData = document.getElementById('subcategory');
                subcategoriesData.innerHTML = `<option value="">Select None</option>`;
                response.forEach(element => {
                    subcategoriesData.innerHTML+= `
                            <option value="`+element.id+`"  > `+element.name+`</option>
                            `;
                });
            });
        }

        function changeSubCategory(){
           let select = document.getElementById("subcategory");
           let id = select.options[select.selectedIndex].value;
            let url = "{{env('APP_URL')}}/api/subcategories/"+id;
            fetch(url, { headers: { "Content-Type": "application/json; charset=utf-8" }})
            .then(response=> response.json())
            .then(response=>{
                let innercategoriesData = document.getElementById('innercategory');
                innercategoriesData.innerHTML = `<option value="">Select None</option>`;
                response.forEach(element => {
                    innercategoriesData.innerHTML+= `
                            <option value="`+element.id+`"  > `+element.name+`</option>
                            `;
                });
            });
        }
    </script>
@endsection


@section('content')
<div class="container">
    
<h2>Create Product</h2>
    
    {!! Form::open(['url' => '/admin/products', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('backend.products.form', ['submitButtonText' => 'Create Product'])
    {!! Form::close() !!}


</div>
    

@endsection

