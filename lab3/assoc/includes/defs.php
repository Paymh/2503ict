<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $name or $year or $state from form. */
function search($param) 
{
    global $pms; 
	$results = array();
    if (!empty($param)) 
    {
		foreach ($pms as $pm) 
		{
	    	if (stripos($pm['name'], $param) !== FALSE || stripos($pm['from'], $param) !== FALSE || strpos($pm['to'], $param) !== FALSE || stripos($pm['state'], $param) !== FALSE)
	    	{
				array_push($results,$pm);
	    	}
		}
		$pms = $results;
    }
	return $pms;
}
?>
