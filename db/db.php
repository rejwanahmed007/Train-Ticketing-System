<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'tts');
		return $conn;
	}
?>