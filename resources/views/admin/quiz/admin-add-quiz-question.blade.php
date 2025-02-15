@extends('layouts.admin.main-admin')
@section('container')
    <section class="margin-top ">
        <div class="margin-left">
            <div class="bg-white" style="padding-bottom: 9rem">
                <div class="content p-5">
                    <div class="box-recommend p-4 mb-4">
                        <div class="row d-flex justify-content-between">
                            <div class="col-3">
                                <h3 style="margin-bottom: 0">Add Question</h3>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <form action="{{ route('admin_update_quiz-status') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input type="text" name="id" value="{{ $id }}" hidden>
                                        <div class="col">
                                            <button name="status" value="draft"
                                                class="btn btn-button btn-shadow text-dark px-4"
                                                type="submit">Draft</button>
                                        </div>
                                        <div class="col">
                                            <button name="status" value="save"
                                                class="btn btn-button btn-shadow text-dark px-4"
                                                type="submit">save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('admin_save_question') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <div class="box-recommend mt-2 p-4">
                                    <div class="col">
                                        <input type="text" name="quiz" value="{{ $id }}" hidden>
                                        <div class="form-group mb-2">
                                            <label for="form-label text-white" style="font-size: 23px">File (optional)
                                            </label>
                                            <input type="file" name="file" id="file_optional"
                                                class="form-control  p-2" />
                                            @if ($errors->has('file'))
                                                <p class="text-danger">{{ $errors->first('file') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="form-label text-white" style="font-size: 23px">Question</label>
                                            <textarea name="question" id="question" rows="6" class="form-control p-2 text-black" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-start mb-2">
                                        <div class="col-1 d-flex align-items-center me-4">
                                            <p style="font-size: 23px; margin-bottom:0;">Type</p>
                                        </div>
                                        <div class="col-4 d-flex align-items-center" style="font-size: 20px">
                                            <input class="me-2" type="radio" id="radio1" style="font-size: 20px"
                                                name="type" value="multiple choice" checked onclick="showForm()">
                                            Multiple Choice
                                            <label for="radio1"></label>
                                        </div>
                                        <div class="col-4  d-flex align-items-center" style="font-size: 20px">
                                            <input class="me-2" type="radio"id="radio2" style="font-size: 20px"
                                                name="type" value="long answer" onclick="hideForm()">
                                            Long Answer
                                            <label for="radio2"></label>
                                        </div>

                                    </div>
                                    <div class="col" id="form_multiple_choice">
                                        <div class="form-control  mb-2" style="padding:0px">
                                            <div class="d-flex row">
                                                <div class="col-1 d-flex align-items-center justify-content-center"
                                                    style=" position:relative;">
                                                    a.
                                                </div>
                                                <div class="col-10 d-flex align-items-center justify-content-start "
                                                    style="right: 10px; position:relative;">
                                                    <input type="text"name="option_a" id="option_a"
                                                        class="form-control p-2 " style="border:0px" />

                                                </div>
                                                <div class="col-1 d-flex align-items-center justify-content-end">
                                                    <input class="me-2 radio-answer" type="radio"
                                                        style="font-size: 20px" name="answer_multiple_choice"
                                                        value="a">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="form-control mb-2" style="padding:0px">
                                            <div class="d-flex row">
                                                <div class="col-1 d-flex align-items-center justify-content-center"
                                                    style=" position:relative;">
                                                    b.
                                                </div>
                                                <div class="col-10 d-flex align-items-center justify-content-start "
                                                    style="right: 10px; position:relative;">
                                                    <input type="text"name="option_b" id="option_b"
                                                        class="form-control p-2 " style="border:0px" />

                                                </div>
                                                <div class="col-1 d-flex align-items-center justify-content-end">
                                                    <input class="me-2 radio-answer" type="radio"
                                                        style="font-size: 20px" name="answer_multiple_choice"
                                                        value="b">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-control  mb-2" style="padding:0px">
                                            <div class="d-flex row">
                                                <div class="col-1 d-flex align-items-center justify-content-center"
                                                    style=" position:relative;">
                                                    c.
                                                </div>
                                                <div class="col-10 d-flex align-items-center justify-content-start "
                                                    style="right: 10px; position:relative;">
                                                    <input type="text"name="option_c" id="option_c"
                                                        class="form-control p-2 " style="border:0px" />

                                                </div>
                                                <div class="col-1 d-flex align-items-center justify-content-end">
                                                    <input class="me-2 radio-answer" type="radio"
                                                        style="font-size: 20px" name="answer_multiple_choice"
                                                        value="c">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-control  mb-2" style="padding:0px">
                                            <div class="d-flex row">
                                                <div class="col-1 d-flex align-items-center justify-content-center"
                                                    style=" position:relative;">
                                                    d.
                                                </div>
                                                <div class="col-10 d-flex align-items-center justify-content-start "
                                                    style="right: 10px; position:relative;">
                                                    <input type="text"name="option_d" id="option_d"
                                                        class="form-control p-2 " style="border:0px" />

                                                </div>
                                                <div class="col-1 d-flex align-items-center justify-content-end">
                                                    <input class="me-2 radio-answer" type="radio"
                                                        style="font-size: 20px" name="answer_multiple_choice"
                                                        value="d">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="form-group mb-2">
                                                @if ($errors->has('answer_multiple_choice'))
                                                    <p class="text-danger">{{ $errors->first('answer_multiple_choice') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col" id="form_long_answer" style="display:none">
                                        <label for="form-label text-white" style="font-size: 23px">Answer
                                        </label>
                                        <textarea name="answer_long_answer" id="answer_long_answer" rows="3" class="form-control p-2">
                                        </textarea>
                                        @if ($errors->has('answer_long_answer'))
                                            <p class="text-danger">{{ $errors->first('answer_long_answer') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="box-recommend mt-2 p-4 min-height-recommend">
                                    <div class="row d-flex justify-content-start ">
                                        <h4>Question List</h4>
                                    </div>
                                    <hr class="mb-3" style="opacity: 1; border: 2px solid white; margin:0">
                                    @php
                                        $nomor = 1;
                                    @endphp
                                    @foreach ($questions as $question)
                                        <div class="box-list-admin mb-2">
                                            <div class="row d-flex justify-content-start">

                                                <div class="col-1 d-flex justify-content-start align-items-center">
                                                    <h4 style="margin-bottom:0">{{ $nomor++ }}.</h4>
                                                </div>
                                                <div class="col-9 d-flex justify-content-start align-items-center">
                                                    <div class="overflow-ecilips "
                                                        style=" overflow: hidden; text-overflow: ellipsis ; white-space: nowrap;  ">
                                                        <h5 style="font-weight: 500; margin-bottom:0; ">
                                                            {{ $question['question'] }}</h5>

                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end align-items-center">
                                                    <div class="col d-flex justify-content-end align-items-center">
                                                        <a href="{{ route('admin_delete_question', $question['id']) }}"
                                                            style="border: none;"> <span class="iconify ms-2"
                                                                data-icon="ph:x-bold" style="color: red;"
                                                                data-width="25"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <hr class="mb-3" style="opacity: 1; border: 2px solid white; margin:0">
                                    <div class="d-flex justify-content-center pt-1 mb-1">
                                        <button class="btn btn-button btn-shadow text-dark px-4" type="submit">Add
                                            New</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </section>
    <script>
        function checkOptionInput(option) {
            let idInput = "option_" + option;
            let input = document.getElementById(idInput).value;

            let idRadio = "radio_" + option;
            let radio = document.getElementById(idRadio);
            if (input == '') {

                radio.checked = false

            } else {

                radio.checked = true

            }
        }
    </script>
    <script>
        function hideForm() {
            document.getElementById("form_multiple_choice").style.display = "none";
            document.getElementById("form_long_answer").style.display = "block";

        }

        function showForm() {
            document.getElementById("form_multiple_choice").style.display = "block";
            document.getElementById("form_long_answer").style.display = "none";

        }
    </script>
    <script>
        let subMenuQuiz_1 = document.getElementById("subMenuQuiz-1");
        let subMenuQuiz_2 = document.getElementById("subMenuQuiz-2");

        function toggleMenuQuiz1() {
            subMenuQuiz_1.classList.toggle("open-menu");
        }

        function toggleMenuQuiz2() {
            subMenuQuiz_2.classList.toggle("open-menu");
        }
    </script>
@endsection
