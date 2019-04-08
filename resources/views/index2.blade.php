@include('layouts.header')

	<div class="container">
		<div class="row">
			<legend>Database Application</legend>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Title</th>
			      <th scope="col">Description</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>		  		
			    <tr class="table-active">
			      <th scope="row">1</th>
			      <td>Laravel</td>
			      <td>I wonder why laravel is so easy</td>
			      <td>
			      		<a href='' class="btn btn-info" >
			      			<font color="white">Read</font>
			      		</a>
			      		<a href='' class="btn btn-success">
			      			<font color="white">Update </font>
			      		</a>
			      		<a href='' class="btn btn-danger">
			      			<font color="white">Delete </font>
			      		</a>
			      </td>
			    </tr>
			    <tr>
			  </tbody>
			</table> 
		</div>
</div>


@include('layouts.footer')