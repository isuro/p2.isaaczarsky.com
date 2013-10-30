<?php
class practice_controller extends base_controller {

	public function practice(){
		# Set up View   
		$this->template->content = View::instance('v_practice');
		$this->template->title   = "Practice";

		# Render View
		echo $this->template;

		// $data = Array(
		// 	'first_name' => 'Sam', 
		// 	'last_name' => 'Seaborn', 
		// 	'email' => 'seaborn@whitehouse.gov');

		/*
		Insert requires 2 params
		1) The table to insert to
		2) An array of data to enter where key = field name and value = field data
		
		The insert method returns the id of the row that was created
		*/
		
		// $user_id = DB::instance(DB_NAME)->insert('users', $data);

		// echo 'Inserted a new row; resulting id:'.$user_id;
	}
}