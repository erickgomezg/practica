@extends('layouts/app');
@section('content')
    <div id="calc">
        <output id='ope'></output>
        <output id='out'></output><br>
        <table>
            <tr>
                <td><button id="num1">1</button></td>
                <td><button id="num2">2</button></td>
                <td><button id="num3">3</button></td>
            </tr>
            <tr>
                <td><button id="num4">4</button></td>
                <td><button id="num5">5</button></td>
                <td><button id="num6">6</button></td>
            </tr>
            <tr>
                <td><button id="num7">7</button></td>
                <td><button id="num8">8</button></td>
                <td><button id="num9">9</button></td>
            </tr>
            <tr>
                <button id="num0">0</button>
                <button id="resta">-</button>
                <button id="suma">+</button>
                <button id="multi">*</button>
                <button id="divi">/</button>
            </tr>
            <tr>
                <button>Del</button>
                <button  id="C">C</button>
                <button id="IGUAL">=</button>
            </tr>
        </table>
        <input type="text" name="texto" id="pant">

        <script type="text/javascript">
        var o = "", ope;
        let nu1 = 0, nu2 = 0;
            document.querySelector('#num1').addEventListener('click',()=>{
                o = o + '1';
                document.querySelector('#out').innerHTML = o;
            });    
            document.querySelector('#num2').addEventListener('click',()=>{
                o = o + '2'; 
                document.querySelector('#out').innerHTML = o;
            });   
            document.querySelector('#num3').addEventListener('click',()=>{
                o = o + '3'; 
                document.querySelector('#out').innerHTML = o;
            });   
            document.querySelector('#num4').addEventListener('click',()=>{
                o = o + '4'; 
                document.querySelector('#out').innerHTML = o;
            });   
            document.querySelector('#num5').addEventListener('click',()=>{
                o = o + '5'; 
                document.querySelector('#out').innerHTML = o;
            });   
            document.querySelector('#num6').addEventListener('click',()=>{
                o = o + '6'; 
                document.querySelector('#out').innerHTML = o;
            });
            document.querySelector('#suma').addEventListener('click',()=>{
                o = "";
                ope = 'suma'; 
                nu1 = document.querySelector('#out').textContent;
                console.log(nu1); 
                document.querySelector('#out').innerHTML = "";
                document.querySelector('#ope').innerHTML = '+';
            });
            document.querySelector('#resta').addEventListener('click',()=>{
                o = o + '-'; 
                document.querySelector('#out').innerHTML = o;
            });
            document.querySelector('#C').addEventListener('click',()=>{
                o = ''; 
                document.querySelector('#out').innerHTML = o;
            });
            document.querySelector('#IGUAL').addEventListener('click',()=>{
               
                nu2 = document.querySelector('#out').textContent;
                var r =  parseFloat(nu1) + parseFloat(nu2);
                document.querySelector('#out').innerHTML = r;
                document.querySelector('#ope').innerHTML = "";
            });    
        </script>


    </div>
@endsection