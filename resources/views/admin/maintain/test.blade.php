<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <b>Approve Request</b>
        </h2>



    </x-slot>

    <!DOCTYPE html>
    <html>
    <body>

            <h2>HTML Forms</h2>
            <form action="{{ route('approve.now', ['id' => $mantains->id])}} method="post" enctype="multipart/form-data" 
            
                    @csrf
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname" value="John"><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" value="Doe"><br><br>
                        <input type="submit" value="Submit">
                    </form> 

        <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>



    </x-app-layout>