<?php

	require_once __DIR__."/xapi.php";

	$xapi=new Xapi(
		"http://localhost/repo/learninglocker/public/data/xAPI/",
		"7b880fc1f371715ce24309b90e051fcd24d700c3",
		"c089ce76ca667862e615995b909f2ddf9acc1795"
	);

	$statements=$xapi->getStatements();

	$progressed=0;
	$completed=0;

	for ($i=0; $i<sizeof($statements); $i++) {
		$statement=$statements[$i];

//		echo $statement["verb"]["id"]."\n";
//		echo $statement["actor"]["mbox"]."\n";

		if ($statement["verb"]["id"]=="http://adlnet.gov/expapi/verbs/progressed")
			$progressed++;

		if ($statement["verb"]["id"]=="http://adlnet.gov/expapi/verbs/completed")
			$completed++;
	}

	echo "progressed: $progressed\n";
	echo "completed: $completed\n";
	