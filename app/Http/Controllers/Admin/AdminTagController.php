<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminTagController extends Controller
{
    public function index() {

        $tags = Tag::latest()->get();
        // return $tag;
        return view('admin.tag.index', compact('tags'));
    }
    public function store(Request $request) {
        $formField = $request->validate([
            'name' => 'required',
        ]);

        $tag = Tag::where('name', $formField['name'])->first();

        if($tag) {
            return back()->with('error', 'tag exist');
        } else {
            Tag::create($formField);
            return back()->with('success','tag add successfully');
        }

    }

    public function update(Request $request, $id) {
        $tag = Tag::findOrFail($id);

        $formField = $request->validate([
            'name' => 'required',
        ]);

        $existingTag = Tag::where('name', $formField['name'])->first();

        if ($existingTag && $existingTag->id != $id) {
            return back()->with('error', 'Tag already exists');
        }

        $tag->name = $formField['name'];
        $tag->save();

        return redirect()->route('admin.tag')->with('success', 'Tag updated successfully');
    }
    public function delete(Request $request, $id){
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('admin.tag')->with('success', 'tag deleted successfully');

    }
}
