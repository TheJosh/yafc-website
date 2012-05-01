<?php
$page_title = 'News';
require_once 'head.php';
?>


<h2>Yafc 1.1.3</h2>

<p>Yafc 1.1.3 has been released. This is the first release of the Yafc re-birth.</p>

<ul>
	<li>Applied several patches from Debian.
	<li>Fixed segfault on ' -TAB-'.
	<li>Replaced some custom autoconf checks with macros from autoconf-archive.
	<li>Fixed Kerberos 5 detection and make yafc buildable again if Kerberos 5 is enabled.
	<li>Added a bash completion.
	<li>Implemented ignore masks for the put command.
	<li>Implemented support for argument replacement in shell command.
	<li>Fixed some invalid memory reads/writes.
</ul>


<?php
require_once 'foot.php';
?>
