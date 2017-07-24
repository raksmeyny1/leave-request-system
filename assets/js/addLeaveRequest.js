/**
 * File : addUser.js
 *
 * This file contain the validation of add user form
 *
 * Using validation plugin : jquery.validate.js
 *
 * @author Kishor Mali
 */

$(document).ready(function(){

	var addUserForm = $("#addUser");

	var validator = addUserForm.validate({
		rules:{
			leavestype :{ required : true, selected : true},
			duration : { required : true },
			startdate : { required : true },
			enddate : {required : true },
			leavestatus :{ required : true, selected : true}
			//role : { required : true, selected : true}
		},
		messages:{
			leavestype :{ required : "This field is required", selected : "Please select atleast one option"  },
			duration : { required : "This field is required" },
			startdate : { required : "This field is required" },
			enddate : {required : "This field is required" },
			leavestatus :{ required : "This field is required", selected : "Please select atleast one option"  }
			//role : { required : "This field is required", selected : "Please select atleast one option" }
		}
	});
});
