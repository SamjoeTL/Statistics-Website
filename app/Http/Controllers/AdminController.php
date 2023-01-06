<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Models\students;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    //
    $students= students::all();
    return view('backpage.admin',compact('students'),['tittle' => "admin"]);
    }

    public function home(){
        return view('backpage.Home');
        }
    public function students(Request $request) {
        students::create($request->except('_token'));
        return redirect('admin');
    }

    public function create(){
        //
        return view('backpage.create',['tittle' => "create"]);
        }

        public function edit($NIM){
            //
            $students= students::all();
            $students = students::find($NIM);
            // dd($students);
            return view('backpage.edit', compact(["students"]));
            }

            public function update($NIM, Request $request) {
                $students= students::all();
                $students = students::find($NIM);
                $students->update($request->except(['_token' => "submit"]));
                return redirect('admin');
             }

             public function destroy($NIM)
             {
                $students = students::find($NIM);
                $students->delete();
                return redirect('admin');
             }
             function printDataStudentPDF()
            {
                $students = Students::all();
                $pdf = PDF::loadView('backpage.printDataStudentPDF',['students' => $students]);
                return $pdf->download('Students Data.pdf');
            }
            function printDataStudentEXCEL()
            {
                return Excel::download(new StudentsExport, 'Student data.xlsx');
            }
            public function importView(Request $request){
                return view('backpage.import');
            }

            public function import(Request $request){
                Excel::import(new StudentsImport,
                $request->file('file')->store('files'));
                return redirect()->back();
            }

}
