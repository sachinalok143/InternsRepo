<div class="modal" id="edit_form" style="padding-top: 150px;">
<div class="col-lg-8 col-md-offset-2" style="position:absolute; top:100px; ">
<span onclick="document.getElementById('edit_form').style.display='none'" class="close" title="Close Modal">X</span>
<form  role="form" class="col-md-6 col-md-offset-3 form modal-content animate form vertical-form" style="padding:20px;	" method="POST" id="district_edit_form" ng-submit="updateDistrictDetail()">
<div class="form-group" style=" padding:10px; border:solid 2px gray; border-radius: 5px;">
<h3 style="text-align: center;">Edit district Detail</h3>
</div>
<div class="form-group alert-warning"><%warning%></div>
<div class="form-group">

	<label>State</label>
	<select ng-model="district.state_id" value="district.state_id"  ng-options="state.id as state.name for state in states" id="rto_state_code" class="form-control" required="true">
	</select>
	
</div>	
<div class="form-group">
			<label>Operating Status</label>
				<select ng-model="district.operating_status" value="district.operating_status"  id="operating_status" class="form-control" required="true" >
				<option value="1">Active</option>
				<option value="0">Not Active</option>	
				</select>
</div>
<div class="form-group">
			<label>District Name</label>
			<input type="text" class="form-control" name="name"  ng-model="district.district_name" required="true" pattern="[a-zA-Z ]{1,50}">
		
			

</div>
<div></div>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
		<input class="form-control" type="submit" name="" value="Submit">
		</div>
	</div>
	<div class="col-md-4">
		 <div class="form-group">
		<input class="form-control" type="button" name="" onclick="document.getElementById('edit_form').style.display='none';" value="cancel">
		</div>
	</div>
</div>
</form>
</div>
</div>