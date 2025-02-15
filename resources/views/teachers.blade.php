@extends('layouts.main')
@section('container')
    <section class="margin-top">
        <div class="bg-primary2">
            <div class="content p-3">

                <div class="row d-flex justify-content-between p-5">
                    <div class="col-7 px-5 mb-5" data-aos="fade-right">
                        <p class="text-white" style="font-size: 55px;">Our Teachers</p>
                        <p class="text-white" style="text-align: justify; line-height: 1.1em; font-size:20px; width: 700px">
                            Home / <span style="color: var(--button)">Our Teachers</span></p>
                    </div>
                </div>

            </div>

        </div>
        <div class="content col pt-5 px-5 ">
            <div class="row mb-4">
                <div class="card bg-contact me-3 form py-2 mb-2" style="border-radius: 15px; border: 0 !important">
                    <input type="text" class="form-control form-input py-1"
                        style="background-color:#DCDCDC; border-radius: 15px; border: 0 !important"
                        placeholder="Search for courses, skills, or videos">
                </div>
            </div>
            <div class="row ">
                <div class="card bg-contact me-3 mb-5" style="border-radius: 15px; border: 0 !important">
                    <div class="row p-5 d-flex justify-content-center">
                        @foreach ($teachers as $teacher)
                            <div class="col-3 mb-2">
                                <div class="card card-teacher ">
                                    @if (!is_null($teacher['image']))
                                        <img class="card-img-top-2" src="/{{ $teacher['image'] }}" alt="">
                                    @else
                                        <img class="card-img-top-2" src="images/profile-picture/teacher.jpg" alt="">
                                    @endif
                                </div>
                                <div class="box-teacher-name m-auto">
                                    <div class="col p-2">
                                        <h5 class="pt-2">{{ $teacher['name'] }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
