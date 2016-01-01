<?php
$page_title = 'News';
require_once 'head.php';
?>

<h2 id="release-1-3-7">Yafc 1.3.7</h2>
<p>Yafc 1.3.7 has been released. This is just a bugfix release.</p>
<ul>
  <li>Fix parsing of file modes. (#55)</li>
  <li>Fix STOU usage for nohup. (#57)</li>
  <li>Fix format string warnings.</li>
  <li>Justify date in ls -l. Thanks to fluks.</li>
  <li>Fix double free. Thanks to fluks.</li>
  <li>Fix switch when disconnected. Thanks to fluks.</li>
  <li>Extend bash completion. Thanks to fluks.</li>
  <li>Extend documentation. Thanks to fluks.</li>
</ul>

<h2 id="release-1-3-6">Yafc 1.3.6</h2>
<p>Yafc 1.3.6 has been released. This is just a bugfix release.</p>
<ul>
  <li>Fix shortpath calculation. Thanks to Celelibi for the patch. (#48)</li>
  <li>Fix %u in prompts if built without libssh. (#49)</li>
  <li>Fix multiple memory leaks, crashes and use-after-free errors.</li>
  <li>Use cached information if available on get/put --newer. Thanks to Celelibi for
  the patch.</li>
  <li>Fix put/get -n switch for sftp connections. (#53)</li>
  <li>Fix libssh deprecation and bump version requirements accordingly.</li>
</ul>


<h2 id="release-1-3-5">Yafc 1.3.5</h2>
<p>Yafc 1.3.5 has been released. This is just a bugfix release.</p>
<ul>
  <li>Fix compilation with readline 6.2. Thanks to Robin Neatherway for the patch.
  (#38)</li>
  <li>Fix typo in define. Thanks to Ryan Schmidt for the patch. (#40)</li>
  <li>Fix compilation on Ubuntu 12.04 due to broken libbsd-overlay. (#46)</li>
  <li>Fix compilation on Cygwin. (#41)</li>
  <li>Fix prompt if readline is enabled. (#42)</li>
  <li>Fix some issues with the ssh backend. (#43, #44, #45)</li>
</ul>


<h2 id="release-1-3-4">Yafc 1.3.4</h2>
<p>Yafc 1.3.4 has been released. This is just a bugfix release.</p>
<ul>
  <li>Correctly fallback to sftp if scp connections fail.
</ul>


<h2 id="release-1-3-3">Yafc 1.3.3</h2>
<p>Yafc 1.3.3 has been released. This is just a bugfix release.</p>
<ul>
  <li>Fix build with readline 6.3. (#37)
</ul>


<h2 id="release-1-3-2">Yafc 1.3.2</h2>
<p>Yafc 1.3.2 has been released. This is just a bugfix release.</p>
<ul>
  <li>Fix broken stalled logic. Thanks to Matthew Gabeler-Lee for the patch. (#33)
  <li>Fix bash completion. Thanks to Matthew Gabeler-Lee for the patch.
  <li>Fix a crash in ftp_send_cmd.
  <li>Fix detection of strlcpy. Thanks to Tim Clem for the patch. (#35)
</ul>


<h2 id="release-1-3-1">Yafc 1.3.1</h2>
<p>Yafc 1.3.1 has been released. This is just a bugfix release.</p>
<ul>
  <li>Fix active connections broken by introducing IPv6 support. (#32)
  <li>Send correct EPRT command.
  <li>Fix a crash in ftp_send_cmd.
  <li>Fix parsing of boolean values in configuration files.
</ul>


<h2 id="release-1-2-6">Yafc 1.2.6</h2>
<p>Yafc 1.2.6 has been released. This is just a bugfix release.</p>
<ul>
  <li>Fix active connections broken by introducing IPv6 support. (#32)
  <li>Send correct EPRT command.
</ul>


<h2 id="release-1-3-0">Yafc 1.3.0</h2>
<p>Yafc 1.3.0 has been released. This release features support for editline.</p>
<ul>
  <li>Allow editline to be used as alternative to readline.
  <li>Use strlcpy and strlcat in some places. This requires libbsd on Linux.
  <li>Drop the code to support Kerberos 4.
  <li>Fix segfault while writing a trace file. (#30)
  <li>Remove some dead code that has never been used and drop workarounds for pre-C99 compilers.
</ul>


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
