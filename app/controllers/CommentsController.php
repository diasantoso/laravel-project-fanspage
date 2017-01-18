<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$commentscontroller=Comments::orderby('id','=','DESC')->get;
		return View::make('detailnews', compact('CommentsController'));
	}

	public function indexBackEnd()
	{
		$CommentsController = Comments::all();

		if(!Auth::check())
	    return View::make('administrator/index');
	  else
		{
			if(  Auth::user()->role == 1 ) {
				return View::make('administrator/viewcomment', compact('CommentsController'));
			}
			else {
				return View::make('administrator/index');
			}
		}
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
			$data['fullname']=Auth::User()->fullname;
			$data['image']=Auth::User()->image;
			$data['comments']=Input::get('comments');
			Comments::create($data);
			return Redirect::to('news');

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
		Comments::find($id)->delete();
		return Redirect::to('administrator/viewcomment');
	}
}
