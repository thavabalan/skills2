<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Company;
use App\Candidate;
use Auth;

class PageController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function getIndex() {
    $auth = Auth::user();
    $skills = Skill::count();
    $companies = Company::count();
    $candidate = Candidate::count();
    $results = Company::selectRaw('monthname(created_at) month, count(*) data')
                ->groupBy('month')
                ->orderBy('month', 'desc')
                ->get();
		return view('welcome',array('results' => $results))->withSkills($skills)->withCompanies($companies)->withCandidate($candidate)->withAuth($auth);
	}

}
