<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;
use Flash;

class ImageController extends AppBaseController
{
    /** @var ImageRepository $imageRepository*/
    private $imageRepository;

    public function __construct(ImageRepository $imageRepo)
    {
        $this->imageRepository = $imageRepo;
    }

    /**
     * Display a listing of the Image.
     */
    public function index(Request $request)
    {
        $images = $this->imageRepository->paginate(10);

        return view('images.index')
            ->with('images', $images);
    }

    /**
     * Show the form for creating a new Image.
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created Image in storage.
     */
    public function store(CreateImageRequest $request)
    {
        $input = $request->all();

        $image = $this->imageRepository->create($input);

        Flash::success('Image saved successfully.');

        return redirect(route('images.index'));
    }

    /**
     * Display the specified Image.
     */
    public function show($id)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        return view('images.show')->with('image', $image);
    }

    /**
     * Show the form for editing the specified Image.
     */
    public function edit($id)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        return view('images.edit')->with('image', $image);
    }

    /**
     * Update the specified Image in storage.
     */
    public function update($id, UpdateImageRequest $request)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        $image = $this->imageRepository->update($request->all(), $id);

        Flash::success('Image updated successfully.');

        return redirect(route('images.index'));
    }

    /**
     * Remove the specified Image from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $image = $this->imageRepository->find($id);

        if (empty($image)) {
            Flash::error('Image not found');

            return redirect(route('images.index'));
        }

        $this->imageRepository->delete($id);

        Flash::success('Image deleted successfully.');

        return redirect(route('images.index'));
    }
}
