<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Skill;
use App\Exports\CompaniesExport;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use Auth;

class CompanyController extends Controller
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
      $companies = Company::all();
      $skills = Skill::all();
      $auth = Auth::user();

      return view('company.index')->withCompanies($companies)->withSkills($skills)->withAuth($auth);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $companies = Company::all();
      $skills = Skill::all();
      $auth = Auth::user();
      return view('company.create')->withCompanies($companies)->withSkills($skills)->withAuth($auth);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $company = new Company;
      $company -> company_name = $request -> company_name;
      $company -> experience = $request -> experience;
      $company -> save();
      $company->skills()->sync($request->skills, false);
      Session::flash('success', 'The Company was successfully save!');

      return redirect()->route('companies.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $company = Company::find($id);
      $company->skills()->detach();
      $company->skills()->detach();
      $company->delete();
      Session::flash('success', 'The Company was successfully deleted.');
      return redirect()->route('companies.index');
    }
    public function export()
{
        return Excel::download(new CompaniesExport, 'companies.xlsx');
}
}
