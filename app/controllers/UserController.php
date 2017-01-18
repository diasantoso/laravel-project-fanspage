<?php


class UserController extends BaseController {

	public function doLogin() {
		$rules = array (
			'username'  =>  'required',
			'password'  =>  'required'
			);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails())
			{
				return Redirect::to('administrator/index')->withErrors($validation)->withInput();
			}
			else
			{
					$input['username'] = Input::get('username');
					$input['password'] = Input::get('password');
					if (Auth::attempt($input)) {
						if(  Auth::user()->role == 1 ) {
							return Redirect::to('administrator/dashboard');
						}
						else {
							Auth::logout();
							return Redirect::to('administrator/index')->with('gagal', true)->with('message','Maaf username/password anda salah');
						}
					} else {

						return Redirect::to('administrator/index')->with('gagal', true)->with('message','Maaf username/password anda salah');
					}
			}
	}

	public function doLogout() {
		Auth::logout();
		return Redirect::to('administrator/index');
	}


	public function doLoginuser() {
		$rules = array (
			'username'  =>  'required',
			'password'  =>  'required'
			);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails())
			{
				return Redirect::to('join_us')->withErrors($validation)->withInput();
			}
			else
			{
					$input['username'] = Input::get('username');
					$input['password'] = Input::get('password');
					if (Auth::attempt($input)) {
						return Redirect::to('news');
					} else {
						return Redirect::to('join_us')->with('gagal', true)->with('message','Maaf username/password anda salah');
					}
			}
	}

	public function doLogoutuser() {
		Auth::logout();
		return Redirect::to('index');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

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
	public function store(){
	$rules = array (
		'fullname'  =>  'required',
		'username'  =>  'required',
		'password'  =>  'required',
		'email' => 'required|different:fullname',
		'image'  =>  'required'
		);
		$validation = Validator::make(Input::all(), $rules);
		if ($validation->fails())
		{
			return Redirect::to('join_us')->withErrors($validation)->withInput();
		}
		else
		{
			$data=Input::all();
			$data['password'] = Hash::make(Input::get('password'));
			if (Input::hasFile('image')) {
				Input::file('image')->move('files', Input::file('image')->getClientOriginalName());
				$data['image'] = Input::file('image')->getClientOriginalName();
			}
			User::create($data);
			return Redirect::to('index');
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

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}
}
