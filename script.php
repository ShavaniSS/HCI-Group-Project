<?php

public function calculateRating($document)
 {
  
    $calculated_total_sum = 0.0;
    $score = 0.0;
    $percentage = 0.0;
    $i = 0.0;
	$get_text_box_value = '';
	
    foreach()
	{ 
		$get_text_box_value= ($this).val;
		if(is_numeric($get_text_box_value))
		{
			$calculated_total_sum += (float)(get_text_box_value);
			$i+= 4;
			$score= ((calculated_total_sum/i)*30);
			$percentage = ((score/30)*100);
		}
									
