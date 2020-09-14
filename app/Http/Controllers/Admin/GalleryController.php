<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\gallery;
use App\Http\Requests\Admin\GalleryRequest;
use App\gallerycategory;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = gallerycategory::all();
        $items = gallery::all();
        return view('pages.admin.gallery.index', ['items' => $items, 'category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['picture'] = $request->file('picture')->store(
            'assets/gallery',
            'public'
        );

        gallery::create($data);

        return redirect()->route('gallery');
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
        $item = gallery::findOrFail($id);
        return view('pages.admin.gallery.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['picture'] = $request->file('picture')->store(
            'assets/gallery',
            'public'
        );

        $item = gallery::findOrFail($id);
        unlink('storage/' . $item->picture);
        $item->update($data);

        return redirect()->route('gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = gallery::findOrFail($id);
        unlink('storage/' . $item->picture);
        $item->delete();

        return redirect()->route('gallery');
    }

    public function storeCategory(Request $request)
    {
        $data = $request->all();
        gallerycategory::create($data);

        return redirect()->route('gallery');
    }

    public function destroyCategory(Request $request, $id)
    {
        $item = gallerycategory::findOrFail($id);
        $item->delete();

        return redirect()->route('gallery');
    }
}
