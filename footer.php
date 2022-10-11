<?php
if (extension_loaded('xhprof') && isset($_GET['xhprof'])) {
	$profiler_namespace = $_GET['xhprof'] ?? 'default';
	$xhprof_data = xhprof_disable();
	$xhprof_runs = new XHProfRuns_Default();
	$run_id = $xhprof_runs->save_run($xhprof_data, $profiler_namespace);
}