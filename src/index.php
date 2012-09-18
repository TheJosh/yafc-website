<?php
$browser_title = 'Yafc FTP Client';
$page_title = 'Yafc FTP Client';
require_once 'head.php';
?>


<p>Yafc is a fork of the old dead <a href="http://yafc.sourceforge.net/">sourceforge project</a> of the same name.
Like the original project, It's <a href="http://www.gnu.org/licenses/gpl-2.0.html">GPL 2</a>.</p>

<p>Yafc is a console Linux application, although it's known to work on a number of similar platforms (e.g. FreeBSD).</p>

<p>We have a project on <a href="https://github.com/sebastinas/yafc">GitHub</a>.</p>


<h2>Features</h2>
<ul>
<li>cached directory listings
<li>extensive tab completion
<li>multiple connections open
<li>automatic reconnect on timed out connections
<li>aliases
<li>colored ls (ie, ls --color, uses $LS_COLORS like GNU ls)
<li>autologin and bookmarks
<li>Kerberos support (version 4 and 5, heimdal, kth-krb or MIT)
<li>SFTP support (SSH2, supports .ssh/config)
<li>recursive get/put/fxp/rm/ls
<li>stats after large get or put
<li>nohup mode get and put
<li>tagging (queueing) of files for later transferring
<li>automatically enters nohup-mode when SIGHUP received (in get and put)
<li>redirection to local command or file ('>', '>>' and '|')
<li>proxy support
<li>variable substitution for shell commands
<li>ignore masks for uploads
<li>IPv6 support
</ul>

<h2>News</h2>

<p>Yafc 1.2.3 has been released. It's just a bugfix release</p>
<p><a href="/news#release-1-2-3">More info</a> &nbsp; <a href="/download">Download</a></p>

<p>Yafc 1.2.2 has been released. It's just a bugfix release</p>
<p><a href="/news#release-1-2-2">More info</a></p>

<p>Yafc 1.2.1 has been released. It's just a bugfix release</p>
<p><a href="/news#release-1-2-1">More info</a></p>

<p>Yafc 1.2.0 has been released. This release features better FTP+SSH support and IPv6 support.</p>
<p><a href="/news#release-1-2-0">More info</a></p>

<p>Yafc 1.1.3 has been released. This is the first release of the Yafc re-birth.</p>
<p><a href="/news#release-1-3-3">More info</a></p>

<h2>Bugs</h2>
<p>Please report bugs to <a href="https://github.com/sebastinas/yafc/issues">https://github.com/sebastinas/yafc/issues</a>.</p>
<p>Before reporting a bug, please verify you're using the latest version. When
reporting bugs, please include information on what machine and
operating system, including versions, you are running, an example for
me to reproduce (use the --trace option) and a patch if you have one.</p>


<?php
require_once 'foot.php';
?>
