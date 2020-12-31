
<?php
use yii\helpers\Html;
use app\models\LedgerStore;
use app\components\ChequesPrint;
use app\components\Username;
$z=1;
?>
<!DOCTYPE html>
<html>
<body>
<table width="100%">

  <tr>
    <td style="width: 30% ">
        <span><?= Html::img(Yii::getAlias('@webroot').'/medfastLogo.png',
                        ['width' => '70px','width' => '150px']); ?></span>
    </td>
    <td style="width: 70%;text-align: center; ">
        <h3 style="text-align: center; color: green"><strong>MEDFAST PHARMACY LIMITED</strong></h3>
        <h4 style="text-align: center; color: green"><strong>P.O BOX 86304-80100 Mombasa-Kenya</strong></h4>
        <h4 style="text-align: center; color: green"><strong>Mail : info@healthplus.co.ke</strong></h4>
    </td>
    <td style="width: 30%">
        <span><?= Html::img(Yii::getAlias('@webroot').'/healthplusLogo.png',
                        ['width' => '70px']); ?></span>
    </td>
  </tr>
</table>
<div style="text-align: center;">Accounts generated at <?= date('d-M-Y') ?>.</div>
 <div style="border-top: 2px solid black; border-collapse: collapse; ">
   <table width="100%" style="border: 1px solid black; border-collapse: collapse; margin-top: 15px">

  <tr>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue"><strong>#</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Account name</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Created at</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Created by</strong></td>
  <?php foreach($dataProvider->models as $account){?>
  <tr>
    <td style="border: 1px solid black; border-collapse: collapse"><?=$z++?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= $account->account_name; ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= date('d M, Y',$account['created_at']); ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= Username::createdBy($id = $account->created_by) ?></td>

<?php }  
?>
</table> 
</body>
</html>

