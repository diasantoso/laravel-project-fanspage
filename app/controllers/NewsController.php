<?php

class NewsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$NewsController = News::all();

		if(!Auth::check())
	    return View::make('administrator/index');
	  else
		{
			if(  Auth::user()->role == 1 ) {
				return View::make('administrator/viewpost', compact('NewsController'));
			}
			else {
				return View::make('administrator/index');
			}
		}
	}

	public function indexHomePage()
	{
		$NewsController = News::paginate(3);
		return View::make('news', compact('NewsController'));
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
 		'title'  =>  'required',
		'content'  =>  'required',
		'images'  =>  'required'
 		);
 		$validation = Validator::make(Input::all(), $rules);

 		if ($validation->fails())
 		{
 			return Redirect::to('administrator/addpost')->withErrors($validation)->withInput();
 		}
 		else
 		{
 			$news = new News;
 								$news->title = Input::get('title');
 								$news->content = Input::get('content');
								if(Input::hasFile('images'))
								{
										Input::file('images')->move('files', Input::file('images')->getClientOriginalName());
										$news->image = Input::file('images')-> getClientOriginalName();
								}
 								$news->save();

 			return Redirect::to('administrator/viewpost');
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
		$NewsController=News::find($id);
		return View::make('administrator/editpost',compact('NewsController'));
	}

	public function showDetail($id)
	{
		$NewsController=News::find($id);
		return View::make('detailnews',compact('NewsController'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$NewsController=News::find($id);
		$data=Input::except('_token','_method');
		if(Input::hasFile('images'))
		{
				Input::file('images')->move('files', Input::file('images')->getClientOriginalName());
				$data['images'] = Input::file('images')-> getClientOriginalName();
		} else {
				$data['images'] = $NewsController->images;
		}
		$NewsController->update($data);
		return Redirect::to('administrator/viewpost');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			News::find($id)->delete();
			return Redirect::to('administrator/viewpost');
	}
}
