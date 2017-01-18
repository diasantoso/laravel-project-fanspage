<?php

class MerchandiseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$MerchandiseController = Merchandise::all();

		if(!Auth::check())
	    return View::make('administrator/index');
	  else
		{
			if(  Auth::user()->role == 1 ) {
				return View::make('administrator/viewmerchandise', compact('MerchandiseController'));
			}
			else {
				return View::make('administrator/index');
			}
		}
	}

	public function indexHomePage()
	{
		$MerchandiseController = Merchandise::paginate(3);
		return View::make('merchandise', compact('MerchandiseController'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
 	{
 		$rules = array (
 		'name'  =>  'required',
		'description'  =>  'required',
		'images'  =>  'required',
    'price' => 'required'
 		);
 		$validation = Validator::make(Input::all(), $rules);

 		if ($validation->fails())
 		{
 			return Redirect::to('administrator/addmerchandise')->withErrors($validation)->withInput();
 		}
 		else
 		{
 			$merchandise = new Merchandise;
 								$merchandise->name = Input::get('name');
 								$merchandise->description = Input::get('description');
								if(Input::hasFile('images'))
								{
										Input::file('images')->move('files', Input::file('images')->getClientOriginalName());
										$merchandise->image = Input::file('images')-> getClientOriginalName();
								}
                $merchandise->price = Input::get('price');
 								$merchandise->save();

 			return Redirect::to('administrator/viewmerchandise');
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
		$MerchandiseController=Merchandise::find($id);
		return View::make('administrator/editmerchandise',compact('MerchandiseController'));
	}

	public function showDetail($id)
	{
		$NewsController=News::find($id);
		return View::make('detailmerchandise',compact('MerchandiseController'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$MerchandiseController=Merchandise::find($id);
		$data=Input::except('_token','_method');
		if(Input::hasFile('images'))
		{
				Input::file('images')->move('files', Input::file('images')->getClientOriginalName());
				$data['images'] = Input::file('images')-> getClientOriginalName();
		} else {
				$data['images'] = $MerchandiseController->images;
		}
		$MerchandiseController->update($data);
		return Redirect::to('administrator/viewmerchandise');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			Merchandise::find($id)->delete();
			return Redirect::to('administrator/viewmerchandise');
	}
}
