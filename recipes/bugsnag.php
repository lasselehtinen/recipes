<?php
/* (c) Lasse Lehtinen <lasse.lehtinen@iki.fi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Get Bugsnag API key from deployment paths .env file
env('bugsnag_api_key', function () {
    return run("cd {{release_path}} && cat .env | grep 'BUGSNAG_API_KEY' | awk -F'=' '{print $2}'")->toString();
});

// Get latest Git commit hash 
env('latest_commit_id', function () {
    return run("cd {{release_path}} && git log --format='%H' -n 1")->toString();
});

/**
 * Send notification to Bugsnag
 */
task('bugsnag:notification', function () {	
    run('curl -d "apiKey={{bugsnag_api_key}}&branch={{branch}}&revision={{latest_commit_id}}" http://notify.bugsnag.com/deploy');
})->desc('Send deployment notification to Bugsnag');

