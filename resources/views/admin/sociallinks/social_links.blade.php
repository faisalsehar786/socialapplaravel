
<button type="button" class="btn btn-primary  pull-right" data-toggle="modal" data-target="#userModal" style="margin-top: 3px">  <i class="fa fa-plus"></i> Add Social Link   
</button>  
<!-- insert user Modal -->
<div class="modal fade" id="userModal" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content--> 
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body">
				{{-- form start  --}}
				<form method="POST" action="{{ route('social_links_add') }}" enctype="multipart/form-data">
					@csrf

				     <input type="hidden" name="slug" class="slug">
                   <div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

						<div class="col-md-6">
							<input  type="text" class="form-control nameval" name="name" value="{{ old('name') }}" required autofocus>

							@if ($errors->has('name'))
							<span class="invalid-feedback" role="alert">
								<strong class="form-text text-muted text-danger">{{ $errors->first('name') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Placeholder</label>

						<div class="col-md-6">
							<input  type="text" class="form-control" name="placeholder" value="{{ old('placeholder') }}"  autofocus placeholder="e.g facebook">

							@if ($errors->has('placeholder'))
							<span class="invalid-feedback" role="alert">
								<strong class="form-text text-muted text-danger">{{ $errors->first('placeholder') }}</strong>
							</span>
							@endif
						</div>
					</div>
                 
					   <div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">icon Image</label>

						<div class="col-md-6">
							<input  type="file" class="form-control" name="icon" value="{{ old('icon') }}"  autofocus required=""  accept="image/*">

							@if ($errors->has('icon'))
							<span class="invalid-feedback" role="alert">
								<strong class="form-text text-muted text-danger">{{ $errors->first('icon') }}</strong>
							</span>
							@endif
						</div>
					</div>

					 <div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">url type</label>

						<div class="col-md-6">
							<select name="url_type" class="form-control url_type">
								<option value="simple">Simple</option>
								<option value="custom">Custom</option>
							</select>
						</div>
					</div>
    

					 <div class="form-group row comp_url">
						<label for="name" class="col-md-4 col-form-label text-md-right">url</label>

						<div class="col-md-6">
							<input  type="text" class="form-control" name="comp_url" value="{{ old('comp_url') }}"  autofocus >

							@if ($errors->has('comp_url'))
							<span class="invalid-feedback" role="alert">
								<strong class="form-text text-muted text-danger">{{ $errors->first('comp_url') }}</strong>
							</span>
							@endif
						</div>
					</div>


					 <div class="form-group row base_url">
						<label for="name" class="col-md-4 col-form-label text-md-right">base url</label>

						<div class="col-md-6">
							<input  type="text" class="form-control" name="base_url" value="{{ old('base_url') }}"  autofocus >

							@if ($errors->has('base_url'))
							<span class="invalid-feedback" role="alert">
								<strong class="form-text text-muted text-danger">{{ $errors->first('base_url') }}</strong>
							</span>
							@endif
						</div>
					</div>

					 <div class="form-group row sub_part_url">
						<label for="name" class="col-md-4 col-form-label text-md-right">sub part url</label>

						<div class="col-md-6">
							<input  type="text" class="form-control" name="sub_part_url" value="{{ old('sub_part_url') }}"  autofocus >

							@if ($errors->has('sub_part_url'))
							<span class="invalid-feedback" role="alert">
								<strong class="form-text text-muted text-danger">{{ $errors->first('sub_part_url') }}</strong>
							</span>
							@endif
						</div>
					</div>




					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">
							Save
						</button>  
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
				{{-- end form --}}
			</div>
		</div>
	</div>
</div>
{{-- user insert modal ends here --}}
<div class="panel panel-success" style="margin-top: 15px">
  <div class="panel-heading">Social Links</div>
  <div class="panel-body">
	<table class="table table-striped table-bordered table-hover" id="dataTableAuction">
		<thead>
			<tr>
				<th>Id</th>
				<th>Icon</th> 
				<th>name</th>
				<th>Link Structure</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($sociallinks as $element)
			<tr>
		    <td>{{$element->id}}</td>
		    <td>

		    	<img src="{{ asset('frontend/assets/img/icon/') }}/{{$element->icon}}" class='rounded-circle mr-1' width='60' height='60'/>
		    	

		    </td>
		    <td>{{$element->name}}</td>
		    <td>
           @if ($element->url_type=='simple')
           @php
           	  $linkstyle=$element->comp_url;
           @endphp
         
           @else
            @php
           	  $linkstyle=$element->base_url.'/'.$element->sub_part_url;
           @endphp
           @endif
		  {{ $linkstyle}}
		</td>

		     <td>
		     	
		     	<div class="btn-group">
                  <button type="button" class="btn btn-danger btn-sm shadow-lg border-0 dropdown-toggle btn-block shadow-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Operations
                  </button><div class="dropdown-menu">
                   
                
                    <a class="dropdown-item" href="{{ route('social_links_edit',['id'=>$element->id]) }}">Edit</a>
                   
                    <button class="dropdown-item deleteAuction btn-danger btn-block" del-id="{{ $element->id }}">Delete</button>
                  </div>
                </div>
		     </td>
		    
			</tr>
			@endforeach
			
		  
		</tbody>
	</table>
  </div>
</div>



		