@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<?php $i=0; ?>
				<!-- row -->
				<div class="row">
				<!--div-->
				<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="">Learn more</a></p>
							</div>
<<<<<<< HEAD
=======
				
>>>>>>> 8b59a76bef7e8bbe0344bfb6fb5f3318404dcbb9
					<a href="{{route('store.create')}}" class="btn btn-primary">new store</a>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											
											<tr>
												<th>#</th>
												<th>Name</th>
												
												<th> sub_city</th>
												<th>active</th>
											</tr>
										</thead>
										<tbody>
										 @foreach($stores as $store ) 
											 <tr>
											 <th scope="row">{{++$i}}</th>
												<td>{{$store->storecode }} 
													</td>
												
												<td>{{$store->sub_city->sub_cities_name}}</td>
												<td>
											
												<select class="form-control selectpicker"  name="active" id="select-country" data-live-search="true">
										
            							    
										
										<option value="{{$store->active}}" selected>{{$store->active == 1 ? 'active' : 'unactive'  }} </option>
										<option value="{{$store->active == 1 ?   '0' : '1' }}">{{$store->active == 1 ?   'unactive' : 'active' }}</option>
									</select>
									
												</td>
												<td>
												<a href="{{route('store.edit',$store->id)}}" class="btn btn-primary">edit</a>
												<form id="delete" action="{{route('store.destroy',$store->id)}}" method="post">
														@csrf
														@method('DELETE')
											<button id="btnSend" class="btn btn-danger">مسح</button>
											</form>	
											</td>
												</tr> 
											@endforeach
										</tbody>
										
									</table>
								</div><!-- bd -->
								
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
					<tfoot>{{ $stores->links() }}</tfoot>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection