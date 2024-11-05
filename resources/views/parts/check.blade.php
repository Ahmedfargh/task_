<form action="{{route('process_check_list')}}" method="post"class="main_content container">
    <!----section question--->
    @csrf
    <div class="first-section check-section row text-center">
        <p class="col-12">are fibros clean,dry and free of spills or obstructions?</p>
        <input type="hidden" name="first_question" value="are fibros clean,dry and free of spills or obstructions?">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[0]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[0]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(0,1);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[0]" placeholder="comment for question 1">
        </div>
    </div>
    <!----section two-->
    <div class="second-section check-section row text-center">
        <p class="col-12">is there adequte lighting  in all areas?</p>
        <input type="hidden" name="second_question" value="is there adequte lighting  in all areas?">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(1,0);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[1]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[1]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(1,2);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[1]" placeholder="comment for question 2">
        </div>
    </div>
    <!--section3---->
    <div class="third-section check-section row text-center">
        <p class="col-12">are emergency Route clearly markedand unobstructed?</p>
        <input type="hidden" name="third_question" value="are emergency Route clearly markedand unobstructed?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(2,1);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[2]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[2]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(2,3);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[2]" placeholder="comment for question 3">
        </div>
    </div>
    <!--section4-->
    <div class="four-section check-section row text-center">
        <p class="col-12">Are File extinguisher available,accessible,not expired and properly maintained?</p>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(3,2);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <input type="hidden" name="four_question" value="Are File extinguisher available,accessible,not expired and properly maintained?" class="">
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[3]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[3]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(3,4);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[3]" placeholder="comment for question 4">
        </div>
    </div>
    <!---section 5-->
    <div class="five-section check-section row text-center">
        <p class="col-12">Are employees trained in emergency procedures and fire drills?</p>
        <input type="hidden" name="five_question" value="Are employees trained in emergency procedures and fire drills?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(4,3);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[4]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[4]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(4,5);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[4]" placeholder="comment for question 5">
        </div>
    </div>
    <!---section 6-->
    <div class="six-section check-section row text-center">
        <p class="col-12">Are employees trained in emergency procedures and fire drills?</p>
        <input type="hidden" name="six_question" value="Are employees trained in emergency procedures and fire drills?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(5,4);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[5]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[5]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(5,6);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[5]" placeholder="comment for question 6">
        </div>
    </div>
    <!---section7-->
    <div class="siven-section check-section row text-center">
        <p class="col-12">Are employees trained in emergency procedures and fire drills?</p>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(6,5);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[6]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[6]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(6,7);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[6]" placeholder="comment for question 7">
        </div>
    </div>
    <div class="eight-section check-section row text-center">
        <p class="col-12">Are first aid kits stocked and accessible?</p>
        <input type="hidden" name="eight_question" value="Are first aid kits stocked and accessible?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(7,6);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[7]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[7]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(7,8);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[7]" placeholder="comment for question 8">
        </div>
    </div>
    <div class="nine-section check-section row text-center">
        <p class="col-12">Are emergency contact numbers posted in visible areas?</p>
        <input type="hidden" name="nine_question" value="Are emergency contact numbers posted in visible areas?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(8,7);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[8]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[8]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(8,9);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[8]" placeholder="comment for question 9">
        </div>
    </div>
    <div class="ten-section check-section row text-center">
        <p class="col-12">Are emergency contact numbers posted in visible areas?</p>
        <input type="hidden" name="ten_question" value="Are emergency contact numbers posted in visible areas?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(9,8);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[9]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[9]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(9,10);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[9]" placeholder="comment for question 10">
        </div>
    </div>
    <div class="eleven-section check-section row text-center">
        <p class="col-12">Are smoke detectors and fire alarms functional?</p>
        <input type="hidden" name="eleven_question" value="Are smoke detectors and fire alarms functional?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(10,9);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[10]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[10]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(10,11);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[10]" placeholder="comment for question 11">
        </div>
    </div>
    <div class="tweleve-section check-section row text-center">
        <p class="col-12">Are smoke detectors and fire alarms functional?</p>
        <input type="hidden" name="tweleve_question" value="Are smoke detectors and fire alarms functional?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(11,10);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[11]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[11]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(11,12);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[11]" placeholder="comment for question 12">
        </div>
    </div>
    <div class="thirteen-section check-section row text-center">
        <p class="col-12">Is the sprinkler system maintained and operational?</p>
        <input type="hidden" name="thirteen_section" value="Is the sprinkler system maintained and operational?" class="">

        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(12,11);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[12]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[12]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(12,13);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[12]" placeholder="comment for question 13">
        </div>
    </div>
    <div class="fourteen-section check-section row text-center">
        <p class="col-12">Are emergency evacuations plans posted?</p>
        <input type="hidden" name="fourteen_section" value="Are emergency evacuations plans posted?" class="">
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(13,12);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[12]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[12]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(13,14);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[12]" placeholder="comment for question 13">
        </div>
    </div>
    <div class="fiveteen-section check-section row text-center">
        <p class="col-12">Are employees aware of the fire alarm and evacuation procedure?</p>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(14,13);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <input type="hidden" name="fiveteen_section" value="Are employees aware of the fire alarm and evacuation procedure?" class="">
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[13]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[13]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(14,15);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[13]" placeholder="comment for question 14">
        </div>
    </div>
    <div class="sixteen-section check-section row text-center">
        <p class="col-12">is the required PPE available for employees (gloves,safety goggles,helmets,hearing protection)?</p>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(15,14);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <input type="hidden" name='sixteen_section'value='is the required PPE available for employees (gloves,safety goggles,helmets,hearing protection)?'>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[14]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[14]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(15,16);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[15]" placeholder="comment for question 14">
        </div>
    </div>
    <div class="seventeen-section check-section row text-center">
        <p class="col-12">Are employees trained on the proper use of PPE?</p>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(16,15);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <input type="hidden" name="seventeen_section" value="Are employees trained on the proper use of PPE?" class="">
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[15]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[15]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(16,17);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[16]" placeholder="comment for question 16">
        </div>
    </div>

    <div class="eighteen-section check-section row text-center">
        <p class="col-12">Are fibors and walkwayys free of tripping hazards (cords,boxs)?</p>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(17,16);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <input type='hidden'name='eighteen_section'value='Are fibors and walkwayys free of tripping hazards (cords,boxs)?'>
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[17]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[17]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(17,18);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[17]" placeholder="comment for question 18">
        </div>
    </div>
    <div class="nineteen-section check-section row text-center">
        <p class="col-12">Are the fibors planned to identify safe passages and dedicated passages for passage?</p>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(18,17);"><span class="fas fa-arrow-left"></span></button>
        </div>
        <input type="hidden" name="nineteen_section" value="Are the fibors planned to identify safe passages and dedicated passages for passage?" class="">
        <div class="radio-button-section col-3">
            <input type="radio" class="yes_answer"name="question[18]"value='1'>
            <label>yes</label>
        </div>
        <div class="radio-button-section col-3 false-answer">
            <input type="radio" class="no_answer" name="question[18]" value="0">
            <label for="">no</label>
        </div>
        <div class="col-3">
            <button class="btn btn-default moving-btn" type="button"onclick="change(18,19);"><span class="fas fa-arrow-right"></span></button>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" name="comment_question[18]" placeholder="comment for question 19">
        </div>
    </div>
    <!----
        the last section
    --->
    <div class="twenty-section check-section row text-center">
        <p class="col-12">inspector name</p>
        <input type="text" class="form-control col-4" name="insepector_name"placeholder='inspector name'required>
        <button class="btn btn-success col-4" type="submit"><span class="fab fa-telegram"></span></button>
        <button class="btn btn-danger col-4" type="reset"onclick="change(19,0)"><span class="fas fa-times"></span></button>
    </div>
</form>