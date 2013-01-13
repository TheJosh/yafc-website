<?php
$page_title = 'Download';
require_once 'head.php';

$releases = array(
	// uncomment this when the file is up
	// array('1.2.4', '12/01/2013'),
	
	array('1.2.3', '02/09/2012'),
	array('1.2.2', '08/08/2012'),
	array('1.2.1', '02/08/2012'),
	array('1.2.0', '05/06/2012'),
);

$latest = array_shift($releases);
?>



<p><a href="/upload/yafc-<?php echo $latest[0]; ?>.tar.xz">Download Yafc <?php echo $latest[0]; ?></a> (released <?php echo $latest[1]; ?>)</p>

<p>Regular updates are made to the <a href="https://github.com/sebastinas/yafc">GitHub</a> repository.</p>

<p>Clone: <code>git://github.com/sebastinas/yafc.git</code></p>

<p>Yafc is also available in most Linux distributions, although most of them only have 1.1.1</p>


<h2>Older releases</h2>
<ul>
	<?php foreach ($releases as $row): ?>
		<li><a href="/upload/yafc-<?php echo $row[0]; ?>.tar.xz"><?php echo $row[0]; ?></a> (released <?php echo $row[1]; ?>)
	<?php endforeach; ?>
</ul>


<?php
require_once 'foot.php';
?>
