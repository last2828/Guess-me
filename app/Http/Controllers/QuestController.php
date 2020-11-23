<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Level;
use App\Models\Quest;
use App\Models\QuestLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $quests = Quest::where('user_id', Auth::id())->get();

      return view('author.quests.index', compact('quests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      $levels = Level::all();
      return view('author.quests.create', compact(['categories', 'levels']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();
      $data['user_id'] = Auth::id();

      if($data['logo_image'] != null)
      {
        $logoImage = Storage::disk('local')->put('/public/quests-logotypes', $request->logo_image);

        $baseName = basename($logoImage);
        $originalName = $request->logo_image->getClientOriginalName();

        $data['logo_image_url'] = Storage::url($logoImage);
        $data['logo_image_basename'] = $baseName;
        $data['logo_image_original_name'] = $originalName;
      }

      Quest::create($data);

      return redirect()->route('quests.index');
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
        $quest = Quest::find($id);
        $categories = Category::all();
        $levels = Level::all();

        return view('author.quests.edit', compact(['quest', 'categories', 'levels']));
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
      $data = $request->except(['_token', '_method']);
      $quest = Quest::find($id);

      if($request->only('logo_image') != null)
      {
        Storage::delete('/public/quests-logotypes/' . $quest->logo_image_basename);
        $logoImage = Storage::disk('local')->put('/public/quests-logotypes', $request->logo_image);

        $baseName = basename($logoImage);
        $originalName = $request->logo_image->getClientOriginalName();

        $data['logo_image_url'] = Storage::url($logoImage);
        $data['logo_image_basename'] = $baseName;
        $data['logo_image_original_name'] = $originalName;
      }

      Quest::where('id', $id)->update($data);

      return redirect()->route('quests.index');
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
