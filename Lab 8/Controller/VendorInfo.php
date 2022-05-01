<?php 

require_once ('Model/model.php');

function fetchAllVendors(){
	return showAllVendors();

}
function fetchVendor($id){
	return showVendor($id);

}