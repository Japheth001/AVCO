<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Battery</b>

                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1100px; margin-top:-75px;" class="btn btn-primary"> <a href="{{route('all.expense')}}"/>
                    <i class="fa-solid fa-file-invoice-dollar"></i>

                    </button>
                </div>


                    <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-125px;" class="btn btn-primary"> <a href="{{route('form.mantain')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>



        </h2>



    </x-slot>

    <link href="{{asset('forme/w3.css')}}" rel="stylesheet">

    <form id="regForm" action="">

<h1>Battery Master </h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Name:
  <p><input placeholder="First name..." oninput="this.className = ''"></p>
  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''"></p>
  <p><input placeholder="mm" oninput="this.className = ''"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>




<script src="{{asset('forme/w3js.js')}}"></script>
</x-app-layout>
