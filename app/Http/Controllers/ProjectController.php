<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $pagination = Project::simplePaginate(2);
        return view('admin.projects.allProjects', compact('projects'))->with('pagination', $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all();
        return view('admin.projects.createProject', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeProjects = new Project();
        $storeProjects->nom = $request->nom;
        $storeProjects->src = $request->file('image')->hashName();
        $storeProjects->description = $request->description;
        $storeProjects->skill_id = $request->skill_id;
        $storeProjects->save();
        $request->file('image')->storePublicly('mesImages', 'public');
        return redirect('/all-projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, $id)
    {
        $edit = Project::find($id);
        $skills = Skill::all();
        return view('admin.projects.editProject', compact('edit', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, $id)
    {
        $updateProject = Project::find($id);
        $updateProject->nom = $request->newName;
        $updateProject->src = $request->file('newImage')->hashName();
        $updateProject->description = $request->newDescription;
        $updateProject->skill_id = $request->skill_id;
	    // 2 . Supprimer l'image de base
	    Storage::disk('public')->delete('mesImages/' . $updateProject->src);
        // 3 . Modifier le chemin de l'image dans la colonne src par celui de la nouvelle image
        $updateProject->save();
	    // 4 . Rajouter l'image dans le dossier
	    $request->file('newImage')->storePublicly('mesImages', 'public');
        return redirect('/all-projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $id)
    {
        $newDelete = Project::find($id);
        Storage::disk('public')->delete($newDelete->src);
        $newDelete->delete();
        return redirect()->back();
    }

    public function search() 
    {
        $search_text = $_GET['query'];
        $projects = Project::where('nom', 'LIKE', '%'.$search_text.'%')->get();
        return view('admin.projects.search', compact('projects'));
    }
}
