<?php
class TargetController extends BaseController {

	/**
	 * Display a listing of the Targets.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('marketing.target.index');
	}

	/**
	 * Display form to create a new mailing
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('marketing.target.create');
	}

	/**
	 * Store the mailing in database
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array('mailing' => 'required');
		$validator = Validator::make(Input::all(), $rules);

		if ($validator ->fails())
			return Redirect::action('TargetController@create')->withErrors($validator);
		
		else {
			$target = new Target();
			$target->importCSV(Input::get('name'), Input::file('mailing'));

			return View::make('marketing.target.index')
				->with('success', true)
				->with('cont', $target->cont);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}