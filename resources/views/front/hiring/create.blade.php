@extends('front.layouts.app')

@section('title', __('Hiring'))

@section('content')
<main>
    <div class="container d-flex flex-column justify-content-between">
        <section id="teamHeader" class="d-flex flex-column">
            <h1>
                Nindo <span style="color: red;margin-left: -20px;">H</span>iring
            </h1>
            <h3 class="mt-1 mb-3">
                <!-- Web development services agency -->
            </h3>
            <p class="mt-2">
                If you are skilled and talented in IT field, so there’s a chair for you in here.           
            </p>
        </section>
        <section id="HiringSection1">
            <div class="parentHiring d-flex justify-content-between flex-column">
                <form oninput="upload()" onsubmit="formSubmit()" class="d-flex justify-content-between flex-wrap  
                flex-lg-row" action="" method="post" enctype="multipart/form-data">
                @csrf
                    <fieldset class="d-flex" style="position: relative;">
                        <legend>
                            Full name
                        </legend>
                        <input class="d-flex justify-content-end px-4"  type="text" name="name" id="">
                    </fieldset>
                    <fieldset class="d-flex justify-content-end" style="position: relative;">
                        <legend id='userName'>
                            Your job title
                        </legend>
                        <input class="d-flex justify-content-end px-4" type="text" name="job_title" id="">
                    </fieldset>
                    <fieldset class="jobOffer d-fle justify-content-end" style="position: relative;">
                        <legend id='userName'>
                            E-mail
                        </legend>
                        <input class="d-flex justify-content-end px-4" type="email" name="email" id="">
                    </fieldset>
                    <div onclick="ResumeFileChose()" class="result cover d-flex justify-content-center align-items-center flex-column">
                        <span class=" mb-0">Upload resume</span> <p class="mb-0">(Up to 5 MB)</p>
                    </div>
                    <input onclick="ChosedFile()" id='file' name="file" type="file" class='result active d-flex flex-column justify-content-center align-items-center' value=""/>
                    <div class='result result1 d-flex flex-row justify-content-around align-items-center' type="submit"><span class="uploading mb-0">Uploading ...</span> <p class="loader mb-0"></p></div>
                    <div class='result result2 d-flex flex-row justify-content-between align-items-center' type="submit">
                        <span class="uploaded  d-flex align-items-center justify-content-center mb-0">
                            <img class="mx-1" src="./images/Vector.jpg" width="15" height="15" alt="">
                            Uploaded
                        </span> 
                        <p class="changeFile d-flex justify-content-center mb-0">Change file</p>
                    </div>
                </form>
                <div class="btn d-flex justify-content-end align-items-center px-0">
                    <button onclick='HiringSub()' type="submit" class="hiringBtn d-flex justify-content-center align-items-center py-2">Submit</button>

                </div>
                <!-- <button type="submit" class="d-block py-2">Submit</button> -->

                <!-- <div class="textAria d-flex justify-content-end">
                    <p>
                        Your name (or company)
                    </p>
                    <textarea name="textAria"></textarea>
                </div> -->
                <!-- <div class="d-flex justify-content-end">
                    <button class="d-block py-2" type="submit">Submit</button>
                </div> -->

            </div>
            
        </section>
    </div>
</main>
@endsection