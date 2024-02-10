@extends('welcome')

@section('content')
    <h1 class="mt-20 text-center font-bold mb-0">
        <u>
            Exams department
        </u>
    </h1>
    <table class="table-auto min-w-full text-center mt-6  grid grid-cols-auto place-content-center ...">
        <tr>
            <th class="border border-black pl-6">Form</th>
            <th class="border border-black pl-6">Best student</th>
            <th class="border border-black pl-6">Best Class</th>
            <th class="border border-black pl-6">Best Subject</th>
        </tr>
        <tr>
            <td class="border border-black" class="pl-6">Form Four</td>
            <td class="border border-black" class="pl-6">Ian Maina</td>
            <td class="border border-black" class="pl-6">Form 4E</td>
            <td class="border border-black" class="pl-6">History</td>
        </tr>
        <tr>
            <td class="border border-black" class="pl-6">Form Three</td>
            <td class="border border-black" class="pl-6">Juliet Mwangi</td>
            <td class="border border-black" class="pl-6">Form 3W</td>
            <td class="border border-black" class="pl-6">English</td>
        </tr>
        <tr>
            <td class="border border-black" class="pl-6">Form Two</td>
            <td class="border border-black" class="pl-6">Michael Mwaura</td>
            <td class="border border-black" class="pl-6">Form 2N</td>
            <td class="border border-black" class="pl-6">CRE</td>
        </tr>
        <tr>
            <td class="border border-black" class="pl-6">Form One</td>
            <td class="border border-black" class="pl-6">Mercy Nyawira</td>
            <td class="border border-black" class="pl-6">Form 1E</td>
            <td class="border border-black" class="pl-6">Kiswahili</td>
        </tr>
    </table>
    <div class="flex row w-full mt-32">
        <div class="f1 border border-black mr-20 ml-8 p-6">
            <h2 class="font-bold">
                <P>Form 1</P>
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: Kiswahili</p>
            <p>Student: Mercy Nyawira</p>
            <p>Class: 1E</p>
            <p>Best improved: Job Maina</p>
        </div>
        <div class="f2 border border-black align-middle mr-20 p-6">
            <h2 class="font-bold">
                <p>Form 2</p>
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: CRE</p>
            <p>Student: Michael Mwaura</p>
            <p>Class: 2N</p>
            <p>Best improved: Joan Mugure</p>
        </div>
        <div class="f3 border border-black align-text-bottom mr-20 p-6">
            <h2 class="font-bold">
                <p>Form 3</p>
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: English</p>
            <p>Student: Juel Mwangi</p>
            <p>Class: 3W</p>
            <p>Best improved: Ann Chebet</p>
        </div>
        <div class="f4 border border-black align-text-bottom mr-20 p-6">
            <h2 class="font-bold">
                <p>Form 4</p>
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: History</p>
            <p>Student: Ian Maina</p>
            <p>Class: 4E</p>
            <p>Best improved: Alex Mwangi</p>
        </div>
    </div><br>
    <h1 class="text-center font-extrabold">
        <u>
            Subjects performance per class
        </u>
    </h1>

    <div class="flex row w-full">
        <table class="pr-4 ml-6 border mt-10 border-black">
            <caption class="font-bold">Form One</caption>
            <tr>
                <th class="border border-black">Subject Name</th>
                <th class="border border-black p-6">Mean Score</th>
                <th class="border border-black p-6">Mean Grade</th>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Math</td>
                <td class="border border-black" class="pl-10">5.32</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">English</td>
                <td class="border border-black" class="pl-10">4.09</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Physics</td>
                <td class="border border-black" class="pl-10">6.54</td>
                <td class="border border-black" class="pl-10">C+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Biology</td>
                <td class="border border-black" class="pl-10">7.34</td>
                <td class="border border-black" class="pl-10">B-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Chemistry</td>
                <td class="border border-black" class="pl-10">5.63</td>
                <td class="border border-black" class="pl-10">C+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">History</td>
                <td class="border border-black" class="pl-10">7.20</td>
                <td class="border border-black" class="pl-10">B-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Geography</td>
                <td class="border border-black" class="pl-10">4.12</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Business studies</td>
                <td class="border border-black" class="pl-10">8.24</td>
                <td class="border border-black" class="pl-10">B</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Computer studies</td>
                <td class="border border-black" class="pl-10">8.02</td>
                <td class="border border-black" class="pl-10">B</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Kiswahili</td>
                <td class="border border-black" class="pl-10">9.03</td>
                <td class="border border-black" class="pl-10">B+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">C.R.E</td>
                <td class="border border-black" class="pl-10">7.52</td>
                <td class="border border-black" class="pl-10">B</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Agriculture</td>
                <td class="border border-black" class="pl-10">6.52</td>
                <td class="border border-black" class="pl-10">C+</td>
            </tr>

        </table>
    
        <table class="pr-8 ml-8  mt-10 border border-black">
            <caption class="font-bold">Form Two</caption>
            <tr>
                <th class="border border-black">Subject Name</th>
                <th class="border border-black p-6">Mean Score</th>
                <th class="border border-black p-6">Mean Grade</th>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Math</td>
                <td class="border border-black" class="pl-10">3.24</td>
                <td class="border border-black" class="pl-10">D+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">English</td>
                <td class="border border-black" class="pl-10">4.56</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Physics</td>
                <td class="border border-black" class="pl-10">3.02</td>
                <td class="border border-black" class="pl-10">D+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Biology</td>
                <td class="border border-black" class="pl-10">5.22</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Chemistry</td>
                <td class="border border-black" class="pl-10">2.86</td>
                <td class="border border-black" class="pl-10">D</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">History</td>
                <td class="border border-black" class="pl-10">6.54</td>
                <td class="border border-black" class="pl-10">C+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Geography</td>
                <td class="border border-black" class="pl-10">5.23</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Business studies</td>
                <td class="border border-black" class="pl-10">4.89</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Computer studies</td>
                <td class="border border-black" class="pl-10">6.45</td>
                <td class="border border-black" class="pl-10">C+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Kiswahili</td>
                <td class="border border-black" class="pl-10">5.26</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">C.R.E</td>
                <td class="border border-black" class="pl-10">7.86</td>
                <td class="border border-black" class="pl-10">B</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Agriculture</td>
                <td class="border border-black" class="pl-10">4.73</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>


        </table>

    
        <table class="pr-8 ml-8  mt-10 border border-black">
            <caption class="font-bold">Form Three</caption>
            <tr>
                <th class="border border-black">Subject Name</th>
                <th class="border border-black p-6">Mean Score</th>
                <th class="border border-black p-6">Mean Grade</th>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Math</td>
                <td class="border border-black" class="pl-10">2.67</td>
                <td class="border border-black" class="pl-10">D</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">English</td>
                <td class="border border-black" class="pl-10">6.74</td>
                <td class="border border-black" class="pl-10">C+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Physics</td>
                <td class="border border-black" class="pl-10">3.22</td>
                <td class="border border-black" class="pl-10">D+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Biology</td>
                <td class="border border-black" class="pl-10">4.74</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Chemistry</td>
                <td class="border border-black" class="pl-10">2.03</td>
                <td class="border border-black" class="pl-10">D</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">History</td>
                <td class="border border-black" class="pl-10">5.63</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Geography</td>
                <td class="border border-black" class="pl-10">4.43</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Business studies</td>
                <td class="border border-black" class="pl-10">3.14</td>
                <td class="border border-black" class="pl-10">D+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Computer studies</td>
                <td class="border border-black" class="pl-10">5.76</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Kiswahili</td>
                <td class="border border-black" class="pl-10">4.32</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">C.R.E</td>
                <td class="border border-black" class="pl-10">5.87</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Agriculture</td>
                <td class="border border-black" class="pl-10">5.02</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>

        </table>
    
        <table class="mt-10 ml-8 mr-8 border border-black">
            <caption class="font-bold">Form Four</caption>
            <tr>
                <th class="border border-black">Subject Name</th>
                <th class="border border-black p-6">Mean Score</th>
                <th class="border border-black p-6">Mean Grade</th>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Math</td>
                <td class="border border-black" class="pl-10">1.84</td>
                <td class="border border-black" class="pl-10">D-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">English</td>
                <td class="border border-black" class="pl-10">4.56</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Physics</td>
                <td class="border border-black" class="pl-10">2.43</td>
                <td class="border border-black" class="pl-10">D</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Biology</td>
                <td class="border border-black" class="pl-10">3.25</td>
                <td class="border border-black" class="pl-10">D+</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Chemistry</td>
                <td class="border border-black" class="pl-10">1.96</td>
                <td class="border border-black" class="pl-10">D-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">History</td>
                <td class="border border-black" class="pl-10">5.63</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Geography</td>
                <td class="border border-black" class="pl-10">4.54</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Business studies</td>
                <td class="border border-black" class="pl-10">2.35</td>
                <td class="border border-black" class="pl-10">D</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Computer studies</td>
                <td class="border border-black" class="pl-10">4.03</td>
                <td class="border border-black" class="pl-10">C-</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">Kiswahili</td>
                <td class="border border-black" class="pl-10">5.02</td>
                <td class="border border-black" class="pl-10">C</td>
            </tr>
            <tr>
                <td class="border border-black" class="pl-10">C.R.E</td>
                <td class="border border-black" class="pl-10">3.87</td>
                <td class="border border-black" class="pl-10">C-</td>
                <tr>
                    <td class="border border-black" class="pl-10">Agriculture</td>
                    <td class="border border-black" class="pl-10">2.54</td>
                    <td class="border border-black" class="pl-10">D</td>
                </tr>
    
            </tr>

        </table>
    </div>

        <table class="ml-12 mb-28 mt-12">
            <tr class="border border-black">
                <th class="border border-black">Name</th>
                <th class="border border-black">Math</th>
                <th class="border border-black">English</th>
                <th class="border border-black">Physics</th>
                <th class="border border-black">Biology</th>
                <th class="border border-black">Chemistry</th>
                <th class="border border-black">History</th>
                <th class="border border-black">Geography</th>
                <th class="border border-black">Business</th>
                <th class="border border-black">Computer</th>
                <th class="border border-black">Kiswahili</th>
                <th class="border border-black">CRE</th>
                <th class="border border-black">Agriculture</th>
                <th class="border border-black">Total</th>
            </tr>
            @foreach ($users as $user )
                    $total = 0;
                <tr>
                    <td class="border border-black">{{ $user['name'] }}</td>
                    <td class="border border-black">{{ $user['Math'] }}</td>
                    <td class="border border-black">{{ $user['English'] }}</td>
                    <td class="border border-black">{{ $user['Physics'] }}</td>
                    <td class="border border-black">{{ $user['Biology'] }}</td>
                    <td class="border border-black">{{ $user['Chemistry'] }}</td>
                    <td class="border border-black">{{ $user['History'] }}</td>
                    <td class="border border-black">{{ $user['Geography'] }}</td>
                    <td class="border border-black">{{ $user['Business'] }}</td>
                    <td class="border border-black">{{ $user['Computer'] }}</td>
                    <td class="border border-black">{{ $user['Kiswahili'] }}</td>
                    <td class="border border-black">{{ $user['CRE'] }}</td>
                    <td class="border border-black">{{ $user['Agriculture'] }}</td>
                    <td class="border border-black">{{ $user['Total'] }}</td>

                </tr>


            @endforeach
            
        </table>




@endsection