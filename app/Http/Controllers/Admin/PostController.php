<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\post;
use App\Http\Requests\Admin\PostRequest;
use App\Http\Requests\Admin\PostUpdateRequest;
use App\Http\Requests\PostUpdateRequest as RequestsPostUpdateRequest;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = post::all();
        return view('pages.admin.post.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $data['picture'] = $request->file('picture')->store(
            'assets/post',
            'public'
        );

        post::create($data);
        return redirect()->route('post');
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
        $item = post::findOrFail($id);

        return view('pages.admin.post.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsPostUpdateRequest $request, $id)
    {
        $item = post::findOrFail($id);
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        if ($request->file('picture')) {
            unlink('storage/' . $item->picture);
            $data['picture'] = $request->file('picture')->store(
                'assets/post',
                'public'
            );
        }

        $item->update($data);

        return redirect()->route('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = post::findOrFail($id);
        unlink('storage/' . $item->picture);
        $item->delete();

        return redirect()->route('post');
    }
}
