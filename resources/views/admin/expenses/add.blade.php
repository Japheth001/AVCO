<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="max-height: 7px;">
           <b>Fill Expense</b>


                       <!-- Button trigger modal -->
                <div>
                    <button type="button" style="background-color: #6666ff; margin-left: 1200px; margin-top:-35px;" class="btn btn-primary"> <a href="{{route('all.tripsheets')}}"/>
                    <i class="fa-regular fa-square-plus"/></i></a>
                    </button>
                </div>

        </h2>


    </x-slot>
<br><br>

<form action="{{url('/expense/update/'.$expenses->id)}}" method="post" enctype="multipart/form-data">
     @csrf
  <div class="form-group" style="margin:auto">
    <label for="exampleInputEmail1">Date</label>
    <input name="expensedate" type="date" class="txtbox" placeholder="Date"/>

  </div>
  <div class="form-group" style="margin:auto">
    <label for="exampleInputPassword1">Amount</label>
    <input name="amount" type="text" class="txtbox" placeholder="Amount"/>
  </div>

  <div class="form-group" style ="margin:auto">
    <label for="exampleInputPassword1">Location</label>
    <input name="location" type="text" class="txtbox" placeholder="Location"/>

  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">Authority</label>
    <input name="authority" type="text" class="txtbox" placeholder="Authority"/>
  </div>

  <button type="submit" class="btn btn-primary" style="margin-left:630px; margin-top:30px">Submit</button>
</form>

<style>
    .form-group {
        width:40%;
        margin:auto;
        margin-Top:60px;
    }
</style>




    </x-app-layout>
