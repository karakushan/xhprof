<?php
if (extension_loaded('xhprof') && isset($_GET['xhprof'])) {
	include_once 'xhprof_lib/utils/xhprof_lib.php';
	include_once 'xhprof_lib/utils/xhprof_runs.php';
	xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
}