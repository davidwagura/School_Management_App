@extends('welcome')

@section('content')
    <h1 class="mt-20 text-center font-bold mb-0">
        <u>
            Exams department
        </u>
    </h1>
    <table class="table-auto min-w-full text-center mt-6  grid grid-cols-auto place-content-center ...">
        <tr>
            <th class="pl-6">Form</th>
            <th class="pl-6">Best student</th>
            <th class="pl-6">Best Class</th>
            <th class="pl-6">Best Subject</th>
        </tr>
        <tr>
            <td class="pl-6">Form Four</td>
            <td class="pl-6">Ian Maina</td>
            <td class="pl-6">Form 4E</td>
            <td class="pl-6">History</td>
        </tr>
        <tr>
            <td class="pl-6">Form Three</td>
            <td class="pl-6">Juliet Mwangi</td>
            <td class="pl-6">Form 3W</td>
            <td class="pl-6">English</td>
        </tr>
        <tr>
            <td class="pl-6">Form Two</td>
            <td class="pl-6">Michael Mwaura</td>
            <td class="pl-6">Form 2N</td>
            <td class="pl-6">CRE</td>
        </tr>
        <tr>
            <td class="pl-6">Form One</td>
            <td class="pl-6">Mercy Nyawira</td>
            <td class="pl-6">Form 1E</td>
            <td class="pl-6">Kiswahili</td>
        </tr>
    </table>
    <div class="flex row w-full mt-48">
        <div class="f1 border border-black mr-20 ml-8">
            <h2 class="font-bold">
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: Kiswahili</p>
            <p>Student: Mercy Nyawira</p>
            <p>Class: 1E</p>
            <p>Best improved: Job Maina</p>
        </div>
        <div class="f2 border border-black align-middle mr-20">
            <h2 class="font-bold">
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: CRE</p>
            <p>Student: Michael Mwaura</p>
            <p>Class: 2N</p>
            <p>Best improved: Joan Mugure</p>
        </div>
        <div class="f3 border border-black align-text-bottom mr-20">
            <h2 class="font-bold">
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: English</p>
            <p>Student: Juel Mwangi</p>
            <p>Class: 3W</p>
            <p>Best improved: Ann Chebet</p>
        </div>
        <div class="f4 border border-black align-text-bottom mr-20">
            <h2 class="font-bold">
                <u>
                    Best performing: 
                </u>
            </h2>
            <p>subject: History</p>
            <p>Student: Ian Maina</p>
            <p>Class: 4E</p>
            <p>Best improved: Alex Mwangi</p>
        </div>
    </div>




@endsection