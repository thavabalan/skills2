<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Skill;
use App\Exports\CandidatesExport;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use auth;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
      $candidates = Candidate::all();
      $skills = Skill::all();
      $auth = Auth::user();
      return view('candidate.index')->withCandidates($candidates)->withSkills($skills)->withAuth($auth);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $candidates = Candidate::all();
      $skills = Skill::all();
      $auth = Auth::user();
      return view('candidate.create')->withCandidates($candidates)->withSkills($skills)->withAuth($auth);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $candidate = new Candidate;
      $candidate -> knowledge_level = $request -> knowledge_level;
      $candidate -> highest_certificate = $request -> highest_certificate;
      $candidate -> no_of_projects = $request -> no_of_projects;
      $candidate -> experience = $request -> experience;
      $candidate -> comment = $request -> comment;
      $candidate -> email = $request -> email;
      $candidate -> save();
      $candidate->skills()->sync($request->skills, false);
      Session::flash('success', 'The Candidate was successfully save!');

      return redirect()->route('candidates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $candidate = Candidate::find($id);
      $skills = Skill::all();
      $auth = Auth::user();
      $skills2 = array();
      foreach ($skills as $skill) {
          $skills2[$skill->id] = $skill->name;
      }
      // return the view and pass in the var we previously created
      return view('candidate.edit')->withCandidate($candidate)->withSkills($skills)->withSkills($skills2)->withAuth($auth);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      // Save the data to the database
      $candidate = Candidate::find($id);
      $candidate->knowledge_level = $request->input('knowledge_level');
      $candidate->highest_certificate = $request->input('highest_certificate');
      $candidate->no_of_projects = $request->input('no_of_projects');
      $candidate->experience = $request->input('experience');
      $candidate->comment = $request->input('comment');
      $candidate->email = $request->input('email');
      $candidate->save();
      if (isset($request->skills)) {
          $candidate->skills()->sync($request->skills);
      } else {
          $candidate->skills()->sync(array());
      }
      // set flash data with success message
      Session::flash('success', 'This post was successfully Updated.');
      // redirect with flash data to posts.show
      return redirect()->route('candidates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $candidate = Candidate::find($id);
      $candidate->skills()->detach();
      $candidate->skills()->detach();
      $candidate->delete();
      Session::flash('success', 'The Candidate was successfully deleted.');
      return redirect()->route('candidates.index');
    }
    public function export()
{
        return Excel::download(new CandidatesExport, 'candidate.xlsx');
}
}
