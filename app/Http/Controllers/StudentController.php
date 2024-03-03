<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Psy\CodeCleaner\FunctionContextPass;

class StudentController extends Controller
{
    //student create page
    public function create()
    {
        $students = Student::orderBy('created_at', 'desc')->get()->toArray();
        //dd($students);
        return view('create', compact('students'));
    }

    //student create
    public function studentCreate(Request $request)
    {
        // dd($request->all());
        // $this->studentValidationCheck($request);
        $data = $this->getPostData($request);
        //dd($data);
        Student::create($data);
        return redirect()->route('student#createPage');
    }

    //student delete
    public function studentDelete($id)
    {
        // dd($id);
        Student::where('id', $id)->delete();
        return redirect()->route('student#createPage');
    }

    //direct update page
    public function updatePage($id)
    {
        //dd($id);
        $student = Student::where('id', $id)->first()->toArray();
        //dd($student);
        return view('update', compact('student'));
    }

    //direct edit page
    public function editPage($id)
    {
        // dd($id);
        $student = Student::where('id', $id)->first()->toArray();
        return view('edit', compact('student'));
    }

    //update student
    public function update(Request $request)
    {
        //dd($request->all());
        $updateData = $this->getPostData($request);
        //dd($updateData);
        $id = $request->studentId;
        Student::where('id', $id)->update($updateData);
        return redirect()->route('student#createPage');
    }

    //get post data
    private function getPostData($request)
    {
        // dd('this is private function call test');
        $response = [
            'name' => $request->studentName,
            'description' => $request->studentDescription,
        ];

        return $response;
    }

    //student validation check
    // private function studentValidationCheck($request)
    // {
    //     $validationRules = [
    //         'studentName' => 'required|unique:posts,title|max:10|min:2',
    //         'studentDescription' => 'required|min:5'
    //     ];

    //     $validationMessage = [
    //         'studentName.required' => 'Student Name ဖြည့်ရန်လိုအပ်ပါသည်။',
    //         'studentDescription.required' => 'Student Description ဖြည့်ရန်လိုအပ်ပါသည်။',
    //         'studentName.min' => 'အနည်းဆုံး ၅ လုံးအထက်ရှိရပါမည်။',
    //         'studentName.unique' => 'Student Name ခေါင်းစဉ်တူနေပါသည်။ထပ်မံရိုက်ကြည့်ပါ။'
    //     ];
    //     Validator::make($request->all(), $validationRules, $validationMessage)->validate();
    // }
}
