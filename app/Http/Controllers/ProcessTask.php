<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\check_content;
use App\Models\check_process;
use App\Models\check_question;
class ProcessTask extends Controller
{
    //
    
    public function Process_General_work_envoirment(Request $req,$process){
        $check=new check_content;
        $check->check_list_question=$req->input("first_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][0];
        $content->comment=$_POST["comment_question"][0];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("second_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][1];
        $content->comment=$_POST["comment_question"][1];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("four_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][3];
        $content->comment=$_POST["comment_question"][3];
        $content->save();
        return;
    }
    public function process_Emeregency_preparedness(Request $req,$process){
        $check=new check_content;
        $check->check_list_question=$req->input("four_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][3];
        $content->comment=$_POST["comment_question"][3];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("five_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][4];
        $content->comment=$_POST["comment_question"][4];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("eight_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][7];
        $content->comment=$_POST["comment_question"][7];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("nine_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][8];
        $content->comment=$_POST["comment_question"][8];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("eleven_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][10];
        $content->comment=$_POST["comment_question"][10];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("tweleve_question");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][1];
        $content->comment=$_POST["comment_question"][11];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("thirteen_section");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][12];
        $content->comment=$_POST["comment_question"][12];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("fourteen_section");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][13];
        $content->comment=$_POST["comment_question"][13];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("fiveteen_section");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][14];
        $content->comment=$_POST["comment_question"][13];
        $content->save();
        return;
    }
    public function process_personal_protective_equipment(Request $req,$process){
        $check=new check_content;
        $check->check_list_question=$req->input("sixteen_section");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][15];
        $content->comment=$_POST["comment_question"][15];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("seventeen_section");
        $check->save();
        //dd($_POST);
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][14];
        $content->comment=$_POST["comment_question"][16];
        $content->save();
        return;
    }
    public function process_slips_trips_falls(Request $req,$process){
        $check=new check_content;
        $check->check_list_question=$req->input("eighteen_section");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][17];
        $content->comment=$_POST["comment_question"][17];
        $content->save();
        $check=new check_content;
        $check->check_list_question=$req->input("nineteen_section");
        $check->save();
        $content=new check_question;
        $content->check_process_id=$process->id;
        $content->question_id=$check->id;
        $content->answer=$_POST["question"][18];
        $content->comment=$_POST["comment_question"][18];
        $content->save();
        return ;
    }
    public function create_process(Request $req){
        $process=new check_process;
        $process->inspector_name=$req->input("insepector_name");
        $process->save();
        return $process;
    }
    public function Process(Request $req){
        $process=$this->create_process($req);
        $this->Process_General_work_envoirment($req,$process);
        $this->process_Emeregency_preparedness($req,$process);
        $this->process_personal_protective_equipment($req,$process);
        return "Done";
    }
}
