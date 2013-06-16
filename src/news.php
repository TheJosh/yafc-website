<?php
$page_title = 'News';
require_once 'head.php';
?>


<h2 id="release-1-2-5">Yafc 1.2.5</h2>
<p>Yafc 1.2.5 has been released. This is just a bugfix release.</p>
<ul>
	<li>Fix some memory leaks.
	<li>Fix build errors when building with texinfo 5.
	<li>Fix detection of some system headers.
	<li>Make it possible to pass Kerberos 5 flags to configure if krb5-config is missing. 
</ul>


<h2 id="release-1-2-4">Yafc 1.2.4</h2>
<p>Yafc 1.2.4 has been released. This is just a bugfix release.</p>
<ul>
	<li>Fix several crashes on OpenBSD (and probably on other *BSDs).
	<li>Fix a bug in the handling of ssh aliases if the alias cannot be resolved.
</ul>


<h2 id="release-1-2-3">Yafc 1.2.3</h2>
<p>Yafc 1.2.3 has been released. This is just a bugfix release.</p>
<ul>
	<li>configure.ac: Check if we need to link against libintl and add --with-gettext to specifiy prefix of the gettext installation.
	<li>Fix a regression introduced in 1.2.2:
		<br>Decoding base64 with the OpenSSL implementation fixed.
</ul>


<h2 id="release-1-2-2">Yafc 1.2.2</h2>
<p>Yafc 1.2.2 has been released. This is mainly a bugfix release.</p>
<ul>
	<li>Fixed a few more regressions
		<br>SFTP: "cd .." is now really fixed.
	<li>BSD-4-clause and GPL-2+ are incompatible and we shipped BSD-4-clause code in
		lib/base64.[ch]. The old base64 code is now replaced by a new one that uses
		already implemented base64 functions. If Heimdal is available its
		base64_encode and _decode are used. The old implementation used the same
		interface as Heimdal, so this should be the safest options. If Heimdal is not
		available either OpenSSL or libresolv's b64_* function are used to provide
		base64 support.
</ul>


<h2 id="release-1-2-1">Yafc 1.2.1</h2>
<p>Yafc 1.2.1 has been released. This is mainly a bugfix release.</p>
<ul>
	<li>Fixed regressions from 1.2.0
		<br>FTP: "put" in ASCII mode works as expected again. (#20)
		<br>SFTP: "cd .." works as expected again. (#21)
	<li>SFTP: Use scp if available to speed up file transfers. (#16)
	<li>Fixed several memory leaks and other programming errors.
</ul>


<h2 id="release-1-2-0">Yafc 1.2.0</h2>
<p>Yafc 1.2.0 has been released. This release features better FTP+SSH support and IPv6 support.</p>
<ul>
	<li>Fixed several memory leaks.
	<li>Fixed segfault if connection to the server got lost. (#19)
	<li>Use libssh for sftp transport - This adds support for ssh's config file. (Debian bug: #224140)
	<li>Reenable internationalization support.
	<li>Try to fix invalid addresses returned by PASV. (Debian bug: #365108)
	<li>Add support for usernames with white spaces. (#18)
	<li>IPv6 support.
	<li>Add stats for large transfers (default 20 files).
</ul>


<h2 id="release-1-1-3">Yafc 1.1.3</h2>
<p>Yafc 1.1.3 has been released. This is the first release of the Yafc re-birth.</p>

<ul
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
