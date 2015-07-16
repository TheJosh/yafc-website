<?php
$page_title = 'Download';
require_once 'head.php';

$releases = array(
	array('1.3.6', '13/05/2015'),
	array('1.3.5', '07/10/2014'),
	array('1.3.4', '26/05/2014'),
	array('1.3.3', '04/04/2014'),
	array('1.3.2', '23/02/2014'),
	array('1.3.1', '29/11/2013'),
	array('1.3.0', '31/10/2013'),
	array('1.2.5', '29/11/2013'),
	array('1.2.5', '15/06/2013'),
	array('1.2.4', '12/01/2013'),
	array('1.2.3', '02/09/2012'),
	array('1.2.2', '08/08/2012'),
	array('1.2.1', '02/08/2012'),
	array('1.2.0', '05/06/2012'),
);

$latest = array_shift($releases);
?>



<p><a href="/download/yafc-<?php echo $latest[0]; ?>.tar.xz">Download Yafc <?php echo $latest[0]; ?></a> (released <?php echo $latest[1]; ?>, <a href="/download/yafc-<?php echo $latest[0]; ?>.tar.xz.asc">signature</a>)</p>

<p>Regular updates are made to the <a href="https://github.com/sebastinas/yafc">GitHub</a> repository.</p>

<p>Clone: <code>git://github.com/sebastinas/yafc.git</code></p>

<p>Yafc is also available in most Linux distributions.</p>


<h2>Older releases</h2>
<ul>
	<?php foreach ($releases as $row): ?>
		<li><a href="/download/yafc-<?php echo $row[0]; ?>.tar.xz"><?php echo $row[0]; ?></a> (released <?php echo $row[1]; ?>, <a href="/download/yafc-<?php echo $row[0]; ?>.tar.xz.asc">signature</a>)
	<?php endforeach; ?>
</ul>

<h2>Signatures</h2>

<p>All releases since version 1.2.0 have been signed with the key <em>F78C BA07
817B B149 A11D  3390 69F2 FC51 6EA7 1993</em>. Please verify the download by
running the following commands:</p>

<code>
  gpg --recv-keys F78CBA07817BB149A11D339069F2FC516EA71993<br>
  gpg --verify yafc-<?php echo $latest[0]; ?>.tar.xz.asc yafc-<?php echo $latest[0]; ?>.tar.xz<br>
</code>

<?php
require_once 'foot.php';
?>
