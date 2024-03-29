@extends('welcome') 
  

@section('content') 
    <h1 class="text-center pt-20 mb-0 font-bold">
        <u>
            Fill the form below:
        </u>
    </h1>
    <div class="create-inputs  justify-center items-center pt-6 flex flex-wrap containe">
        <form action="{{ route('student.store') }}" method="post">
            @csrf

            @method('post')
                <label class="text-center justify-around inline mr-2" for="first_name">First Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="first_name"><br>

                <label class="text-center justify-around inline mr-2 mt-8" for="last_name">Last Name:</label>
                <input class="border rounded px-2 py-1 mt-6" type="text" name="last_name"><br>

                <div class="flex row mt-4 ml-3">
                    <label class="text-center justify-around" for="gender">Gender:</label>
                    <select class="flex w-64 h-8 bg-white border ml-6 rounded" id="gender" name="gender">
                        <option  class="block w-full" value="male">Male</option>
                        <option  class="block w-full" value="female">Female</option>
                    </select>
                </div><br>

                <label class="text-center justify-around mr-2 mt-4" for="password">Password:</label>
                <input class="border rounded px-2 py-1" type="text" name="password"><br>

                <div class="flex row mt-4 -ml-16">
                    <label class="justify-around mr-2" for="admission_number">Admission Number:</label>
                    <input class="border rounded px-2 py-1 flex" type="number" name="admission_number">
                </div><br>
                <div class="flex row mt-0">
                    <label class="text-center justify-around" for="home_county">County:</label>
                    <select class="flex w-64 h-8 bg-white border ml-9" id="county" name="home_county">
                        <option  class="block w-full" value="Nyeri">Nyeri</option>
                        <option  class="block w-full" value="Murang'a">Murang'a</option>
                        <option  class="block w-full" value="Murang'a">Murang'a</option>
                        <option  class="block w-full" value="Kiambu">Kiambu</option>
                        <option  class="block w-full" value="Nakuru">Nakuru</option>
                    </select>
                </div><br>
                <div class="-ml-6">
                    <label class="text-center justify-around mr-2" for="date_of_birth">Date Of Birth:</label>
                    <input class="border rounded px-2 py-1" type="text" name="date_of_birth">
                </div><br>
                <div class="text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
                </div>
        </form>
    </div>
@endsection

