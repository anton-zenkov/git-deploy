<?php

return array(

	// The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
	'TOKEN' => 'myscret',
	
	// The URL to your repository
	'REMOTE_REPOSITORY' => 'https://github.com/user/repo.git',

	// The branch route
	'BRANCH' => 'refs/heads/master',

	// The name of the file you want to log to.
	'LOGFILE' => 'deploy.log',
	
	//do git reset --hard HEAD
	'RESET' => true,

	// A command to execute before pulling
	'BEFORE_PULL' => '',

	// A command to execute after successfully pulling
	'AFTER_PULL' => '',
);
