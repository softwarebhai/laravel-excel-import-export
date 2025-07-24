<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use App\Models\User;

class UserController extends Controller
{
    public function importView(){
        return view('importFile');
    }

    public function import(Request $request){
        Excel::import(new ImportUser, $request->file('file')->store('files'));
        return redirect()->back()->with('success','File Imported Successfully');
    }

    public function exportUsers(Request $request){
        return Excel::download(new ExportUser, 'users.xlsx');
    }
}
