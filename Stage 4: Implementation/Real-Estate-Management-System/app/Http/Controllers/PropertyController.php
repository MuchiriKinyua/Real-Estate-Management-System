<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;
use Flash;

class PropertyController extends AppBaseController
{
    /** @var PropertyRepository $propertyRepository*/
    private $propertyRepository;

    public function __construct(PropertyRepository $propertyRepo)
    {
        $this->propertyRepository = $propertyRepo;
    }

    /**
     * Display a listing of the Property.
     */
    public function index(Request $request)
    {
        $properties = $this->propertyRepository->paginate(10);

        return view('properties.index')
            ->with('properties', $properties);
    }

    /**
     * Show the form for creating a new Property.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created Property in storage.
     */
    public function store(CreatePropertyRequest $request)
    {
        $input = $request->all();

        $property = $this->propertyRepository->create($input);

        Flash::success('Property saved successfully.');

        return redirect(route('properties.index'));
    }

    /**
     * Display the specified Property.
     */
    public function show($id)
    {
        $property = $this->propertyRepository->find($id);

        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }

        return view('properties.show')->with('property', $property);
    }

    /**
     * Show the form for editing the specified Property.
     */
    public function edit($id)
    {
        $property = $this->propertyRepository->find($id);

        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }

        return view('properties.edit')->with('property', $property);
    }

    /**
     * Update the specified Property in storage.
     */
    public function update($id, UpdatePropertyRequest $request)
    {
        $property = $this->propertyRepository->find($id);

        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }

        $property = $this->propertyRepository->update($request->all(), $id);

        Flash::success('Property updated successfully.');

        return redirect(route('properties.index'));
    }

    /**
     * Remove the specified Property from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $property = $this->propertyRepository->find($id);

        if (empty($property)) {
            Flash::error('Property not found');

            return redirect(route('properties.index'));
        }

        $this->propertyRepository->delete($id);

        Flash::success('Property deleted successfully.');

        return redirect(route('properties.index'));
    }
}
