<?php
	class GetComment{
		private $articleID = ""; // the ID of the article which was commented
		private $pseudonym = array(); // List of returned Pseudonyms by SQL-Query
		private $heading = array(); // List of returned Headings by SQL-Query
		private $comment = array(); // List of returned Comments by SQL-Query
		private $release = array();	// List of returned Releases by SQl-Query 
		private $mysqli; // mysqli-Object initialized by constructor
		private $NumOfReturnedComments = 2; // How many comments the SQL-Query should return
		
		/* Prepare the whole mysqli-Object in the constructor for easy usage
		 * Stop if any error occures */
		function __construct($articleID){ // possible: own Object for all comments from specific articles discribed by the articleID
			 
			 /*
			 * check articleID for correctness or stop with error
			 */
			if(is_numeric($articleID)){ 
				$this->articleID = $articleID;
			}else{
				echo ("Es ist ein Fehler bei der Abfrage aufgetreten. Bitte versuchen Sie es sp&auml;ter" . 
				" noch einmal und melden Sie die Fehlernummer unter: roehl.aaron@yahoo.com. Fehlernummer: 1");
				return -1;
			}
			
			require_once('dbvars.php'); // file includes mysql connection infos
			
			/*
			 * create new mysqli object with values from 'dbvars.php' and check for errors
			 */
			$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
			if($mysqli->connect_errno) die("Verbindung zur Datenbank fehlgeschlagen.");
			
			/*
			 * save parts of the comments from mysql-query into comment-part-arrays 
			 */
			if($SelectCommentPartsPreparedQuery = $mysqli->prepare("SELECT 
																pseudonym, 
																heading, 
																comment 
												  			  FROM 
																Comments 
											      			  WHERE 
																articleID=? 
												  			  LIMIT 
																0, " . $this->NumOfReturnedComments))
			{
				$SelectCommentPartsPreparedQuery->bind_param("i", $this->articleID); // set articleID as integer to query
				$SelectCommentPartsPreparedQuery->execute();
				$SelectCommentPartsPreparedQuery->bind_result($pseudonym, $heading, $comment); // define comment-parts from query
				/*
				 * save as many items as returned by query into comment-parts-arrays 
				 */
				while($SelectCommentPartsPreparedQuery->fetch()){ 
					array_push($this->pseudonym, $pseudonym);
					array_push($this->heading, $heading);
					array_push($this->comment, $comment);
					//array_push($this->release, $release);
				}
				$SelectCommentPartsPreparedQuery->close(); // close prepared query but not mysqli connection for possible reuse
			}else{
				/*
				 * there was an error preparing the comment-parts-statement
				 */
				echo ("Es ist ein Fehler bei der Abfrage aufgetreten. Fehlernummer: 2");
// TODO: is the following close needed or is it closed by returning from this function??
// Maybe destroy it in the destructor??
				$mysqli->close(); // try to close connection before returning error
				return -1;
			}
			$mysqli->close();
		}

//----------------------------------------	
		
		/* Following functions return specific parts of a Comment by their position
		 * in the (dazugehoerenden) Array */
		public function getCommentHeading($arrayPos_of_heading){
			return $this->heading[$arrayPos_of_heading];
		}
		
		public function getComment($arrayPos_of_comment){
			return $this->comment[$arrayPos_of_comment];
		}
		
		public function getCommentPseudonym($arrayPos_of_pseudonym){
			return $this->pseudonym[$arrayPos_of_pseudonym];
		}
		
		// For output-loops: return resultcount
		public function getNumOfReturnedComments(){
			return $this->NumOfReturnedComments;
		}
	}
?>