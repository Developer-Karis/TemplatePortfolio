<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.carousel.allCarousels', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.createCarousel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = new Carousel();
        $img->src = $request->file('imageCarousel')->hashName();
        $img->save();
        $request->file('imageCarousel')->storePublicly('mesImages', 'public');
        return redirect()->back();
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
        $editCarousel = Carousel::find($id);
        return view('admin.carousel.editCarousel', compact('editCarousel'));
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
        $updateCarousel = Carousel::find($id);
        $updateCarousel->src = $request->file('newImageCarousel')->hashName();
	    // 2 . Supprimer l'image de base
	    Storage::disk('public')->delete('mesImages/' . $updateCarousel->src);
        // 3 . Modifier le chemin de l'image dans la colonne src par celui de la nouvelle image
        $updateCarousel->save();
	    // 4 . Rajouter l'image dans le dossier
	    $request->file('newImageCarousel')->storePublicly('mesImages', 'public');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCarousel = Carousel::find($id);
        $deleteCarousel->delete();
        return redirect()->back();
    }
}
