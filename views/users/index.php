<?php

use App\models\User;

require ROOT.'/public/header.php';

$user = new User;

?>
<h1><?= $titreProvisoire; ?></h1>
<pre>
######################################################################
<p class="h4 mb-0 mt-3">table User</p>
<?php print_r ($user->findAll()); ?>
######################################################################
</pre>

<?php require ROOT.'/public/footer.php'; ?>