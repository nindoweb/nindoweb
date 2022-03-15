@extends('partials.app')

@section('title', __('Hiring'))

@section('content')
    <main>

        <div class="container d-flex flex-column justify-content-between">
            <section id="teamHeader" class="d-flex flex-column">
                <h1>
                    Nindo <span class="singleLeter">H</span>iring
                </h1>
                <h3>
                </h3>
                <p>
                    If you are skilled and talented in IT field, so there’s a chair for you in here.
                </p>
            </section>
            <section id="HiringSection1">
                <div class="parentHiring d-flex justify-content-between flex-column">
                    <form action="{{ route('api.hiring.store') }}" method="post" id='formSubmit' name="formSubmit" oninput="upload()" class="d-flex justify-content-between flex-wrap flex-lg-row">
                        <fieldset class="d-flex" style="position: relative;">
                            <legend>
                                Full name
                            </legend>
                            <input class="d-flex justify-content-end"  type="text" name="name" id="nameUser">
                        </fieldset>
                        <fieldset class="d-flex justify-content-end" style="position: relative;">
                            <legend id='userName'>
                                Your job title
                            </legend>
                            <input class="d-flex justify-content-end" type="text" name="job" id="jobUser">
                        </fieldset>
                        <fieldset class="jobOffer d-fle justify-content-end" style="position: relative;">
                            <legend id='userName'>
                                E-mail
                            </legend>
                            <input class="d-flex justify-content-end" type="email" name="email" id="emailUser">
                        </fieldset>
                        <div class="result cover d-flex justify-content-center align-items-center flex-column">
                            <div onclick="ResumeFileChose()" class="result result1 mb-0 active"> <span>Upload resume</span><p class="mb-0 text-center">(Up to 5 MB)</p></div>
                            <div disabled class='result result2 d-flex flex-row justify-content-around align-items-center' type="submit">
                                <div class="loader mb-0"></div><p class="uploading mb-0 d-flex justify-content-left">... Uploading</p>
                            </div>
                            <div class='result result3 d-flex flex-row justify-content-between align-items-center' type="submit"><span onclick='resendPdf()' class="uploaded col-6 d-flex align-items-center justify-content-center mb-0"><img class="mx-1 " src="./images/Vector.jpg" width="15" height="15" alt=""> Uploaded</span> <p class="changeFile d-flex justify-content-center mb-0" onclick="ResumeFileChoseAgain()" onchange="ResumeFileChoseAgain()">Change file</p></div>
                        </div>
                        <input  type="file" name="file" id="myPdf">
                        <div class="btn d-flex justify-content-end align-items-center px-0">
                            <button type="submit" id="but_upload" class="hiringBtn d-flex justify-content-center align-items-center">Submit</button>
                        </div>
                    </form>


                </div>

            </section>
        </div>
    </main>
@endsection
