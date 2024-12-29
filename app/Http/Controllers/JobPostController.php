<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    //store job post without validation
    public function store(Request $request){
        
      $data = $request->validate([
        'company_name' => 'required|string|max:255',
        'company_logo' => 'nullable|string|max:255',
        'position' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'posted_on' => 'required|date',
        'closing_date' => 'required|date|after_or_equal:posted_on',
        'job_type' => 'required|string',
        'level' => 'required|string',
        'about_company' => 'required|string',
        'about_position' => 'required|string',
        'responsibilities' => 'required|string',
        'qualifications' => 'required|string',
        'application' => 'required|string',
      ]);
      $data['responsibilities'] = json_encode(
        preg_split('/\r\n|\r|\n/', $request->input('responsibilities'))
      );
      $data['qualifications'] = json_encode(
        preg_split('/\r\n|\r|\n/', $request->input('qualifications'))
    );

    JobPost::create($data);
        return redirect()->back()->with('success', 'Job posted successfully!');
    
    }
    
}
