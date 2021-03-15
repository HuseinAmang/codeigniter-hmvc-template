<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php
$page_title = $heading;
include VIEWPATH . 'errors' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'header.php';
?>

<body>
	<div id="main">
		<div class="fof">
			<h1><?php echo $heading; ?></h1>
			<?php echo $message; ?>
		</div>
	</div>
</body>

</html>