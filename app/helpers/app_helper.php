<?php
	function get_ans($question_id)
	{
		$ans = Modules::run('exams/Exams/get_ans',$question_id);
		return $ans;
	}

	function check_pretest($exam_id)
	{
		$check = Modules::run('exams/Exams/check_pretest',$exam_id);
		return $check;
	}
?>