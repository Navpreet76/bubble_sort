<?php
		/* Populate a sample array where each value is a random number between 0 and 10000. Implement a bubble sort algorithm that returns a new array that's sorted with smallest number on the left. Do this without creating another array */

		for($x=1; $x <= 100; $x++)
	{
		$numbers[] = rand(1, 10000);
	}	 
	
	// var_dump($numbers);
	
	function bubble_sort($numbers)
	{		
		for($counter=0; $counter < count($numbers); $counter++)
		{
			for($num=0; $num < (count($numbers) - 1); $num++)
			{					
				$second = $num + 1;
				$first = $numbers[$num];
				
				if($numbers[$second] < $first)
				{
					$temporary = $first;
					$numbers[$num] = $numbers[$second];
					$numbers[$second] = $temporary;
				}			
				//var_dump($numbers);
			}
		}
	}
		
	function microtime_float()
	{
		list($usec, $sec) = explode(" ", microtime());
		return ((float)$usec + (float)$sec);
	}
			
	$time_start = microtime_float();

	bubble_sort($numbers);

	$time_end = microtime_float();
	
	$time = $time_end - $time_start;

	echo "Did nothing in $time seconds\n";
	
?>