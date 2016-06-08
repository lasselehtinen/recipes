<?php
/* (c) Lasse Lehtinen <lasse.lehtinen@iki.fi>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Restart Supervisor processes
 */
task('supervisor:restart', function () {
    run('supervisorctl restart all');
})->desc('Restarting all Supervisor processes');
