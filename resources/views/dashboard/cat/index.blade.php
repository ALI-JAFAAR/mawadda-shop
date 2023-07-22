@extends('layout.app')

@section('content')

	

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add Category</h1>
                            </div>
                            @if ($msg = Session::get('error'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">X</button>
                                            <strong>{{$msg}}</strong>
                                        </div>
                                      @endif
                                      @if(count($errors) >0)
                                        <div class="alert alert-danger">

                                            <ul>
                                                @foreach( $errors->all() as $error)
                                                    <li>
                                                        {{$error}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                            <form class="user" enctype="multipart/form-data" method="post">

                            	{{ @csrf_field() }}
                                
                                <div class="form-group ">
                                    <input type="text" name="name" class="form-control form-control-user" placeholder=" Name" style="height: 60px !important;">
                                </div>

                                <div class="form-group ">
                                    <label>Category Image</label>
                                    <input type="file" name="img" class="form-control form-control-user"  style="height: 60px !important;">
                                </div>
                                <button  class="btn btn-primary btn-user btn-block">
                                    Save Data
                                </button>
                                
                            </form>
                           
                        </div>
                    </div>
		</div>


@endsection