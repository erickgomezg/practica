@extends('layouts/app');
@section('content')
    <div>
        <input type="text" name="texto" id="texto">
        <button onclick="num1" id="num1">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>5</button>
        <button>6</button>
        <button>7</button>
        <button>8</button>
        <button>9</button>
        <button>0</button>
        <button>-</button>
        <button>+</button>
        <button>*</button>
        <button>/</button>
        <button>Del</button>
        <button>C</button>
        <button>=</button>

        <script type="text/javascript">
            document.querySelector('#num1').addEventListener('click',()=>{

            });    
        </script>


    </div>
@endsection