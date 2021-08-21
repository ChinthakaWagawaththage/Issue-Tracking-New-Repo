<?php

namespace App\Http\Controllers;

use App\Http\Resources\Issue\IssueCollection;
use App\Http\Resources\Issue\IssueResource;
use App\Models\Category;
use App\Models\Image;
use App\Models\Issue;
use App\Models\IssueCategory;
use App\Models\IssueSubcategory;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$issues = Issue::paginate(5);
        return IssueResource::collection(Issue::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issue = new Issue();
        $issue->title = $request->title;
        $issue->body = $request->body;
        $issue->uuid = $request->uuid;
        $issue->slug = $request->slug;

        $images = $request->images;
        foreach ($images as $image)
        {
            Image::create([
                'imagable_id' => $image['imagable_id'],
                'imagable_type' => 'App\Models\Image',
                'size' => $image['size'],
                'path' => $image['path'],
                'name' => $image['name'],
                'extension' => $image['extension']
            ]);
        }

        $categories = $request->categories;
        foreach($categories as $category)
        {
            IssueCategory::create([
                'issue_id' => $category['issue_id'],
                'category_id' => $category['category_id']
            ]);
        }

        $subcategories = $request->subcategories;
        foreach($subcategories as $subcategory)
        {
            IssueSubcategory::create([
                'issue_id' => $subcategory['issue_id'],
                'subcategory_id' => $subcategory['subcategory_id']
            ]);
        }

        $issue->save();

        return response([
           'data' => new IssueResource($issue)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        return new IssueResource($issue);

        $issues = Issue::with('images')->get($issue);
        return $issues;
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        $issue->update($request->all());

        return response([
            'data' => new IssueResource($issue)
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return response(null,204);

    }


}
