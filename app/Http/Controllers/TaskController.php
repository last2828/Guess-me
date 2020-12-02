<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use App\Models\Task;
use App\Models\TypeAnswer;
use App\Models\TypeTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
      $quest = Quest::with('tasks')->where('slug', $slug)->first();

      return view('author.tasks.index', compact('quest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
      $quest = Quest::where('slug', $slug)->first();
      $typeTask = request('type');

      return view('author.tasks.create', compact(['quest', 'typeTask']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $quest_id)
    {

      try{

        $quest = Quest::with('user')->findOrFail($quest_id);

      }catch(ModelNotFoundException $e){

        return redirect()->back()->withErrors(['error' => $e->getMessage()]);

      }
      try{

        if(!(Auth::id() == $quest->user->id)){
          throw new AccessDeniedException();
        }
          $data = $request->all();
          $data['quest_id'] = $quest->id;

          Task::create($data);
          return redirect()->route('tasks.index', $quest->slug);


      }catch(AccessDeniedException $e){

        return redirect()->route('quests.index')->withErrors(['error' => $e->getMessage()]);
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
      $quest = Quest::with('tasks')->where('slug', $slug)->first();

      return view('author.tasks.edit', compact('quest'));
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
        //
    }
}
