<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FeatureRepository;
use Illuminate\Http\Request;
use Flash;

class FeatureController extends AppBaseController
{
    /** @var FeatureRepository $featureRepository*/
    private $featureRepository;

    public function __construct(FeatureRepository $featureRepo)
    {
        $this->featureRepository = $featureRepo;
    }

    /**
     * Display a listing of the Feature.
     */
    public function index(Request $request)
    {
        $features = $this->featureRepository->paginate(10);

        return view('features.index')
            ->with('features', $features);
    }

    /**
     * Show the form for creating a new Feature.
     */
    public function create()
    {
        return view('features.create');
    }

    /**
     * Store a newly created Feature in storage.
     */
    public function store(CreateFeatureRequest $request)
    {
        $input = $request->all();

        $feature = $this->featureRepository->create($input);

        Flash::success('Feature saved successfully.');

        return redirect(route('features.index'));
    }

    /**
     * Display the specified Feature.
     */
    public function show($id)
    {
        $feature = $this->featureRepository->find($id);

        if (empty($feature)) {
            Flash::error('Feature not found');

            return redirect(route('features.index'));
        }

        return view('features.show')->with('feature', $feature);
    }

    /**
     * Show the form for editing the specified Feature.
     */
    public function edit($id)
    {
        $feature = $this->featureRepository->find($id);

        if (empty($feature)) {
            Flash::error('Feature not found');

            return redirect(route('features.index'));
        }

        return view('features.edit')->with('feature', $feature);
    }

    /**
     * Update the specified Feature in storage.
     */
    public function update($id, UpdateFeatureRequest $request)
    {
        $feature = $this->featureRepository->find($id);

        if (empty($feature)) {
            Flash::error('Feature not found');

            return redirect(route('features.index'));
        }

        $feature = $this->featureRepository->update($request->all(), $id);

        Flash::success('Feature updated successfully.');

        return redirect(route('features.index'));
    }

    /**
     * Remove the specified Feature from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $feature = $this->featureRepository->find($id);

        if (empty($feature)) {
            Flash::error('Feature not found');

            return redirect(route('features.index'));
        }

        $this->featureRepository->delete($id);

        Flash::success('Feature deleted successfully.');

        return redirect(route('features.index'));
    }
}
