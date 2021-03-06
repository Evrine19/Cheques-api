
<?php
use yii\helpers\Html;
use app\models\Batch;
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
<div style="text-align: center;">Cheque batches between <?= date('d-M-Y',$str_arr[0]) ?> and <?= date('d-M-Y',$str_arr[1]) ?> generated at <?= date('d-M-Y') ?>.</div>
 <div style="border-top: 2px solid black; border-collapse: collapse; ">
   <table width="100%" style="border: 1px solid black; border-collapse: collapse; margin-top: 15px">

  <tr>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue"><strong>#</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Bank</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Branch</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Account no.</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Batch ref</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Cheques</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Amount</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Created at</strong></td>
    <td style="border: 1px solid black; border-collapse: collapse; background-color: lightblue;text-transform: uppercase"><strong>Created by</strong></td>
  <?php foreach(Batch::find()->having(['status' => 'printed'])
            ->andHaving(['>', 'created_at', $str_arr[0]])
            ->andHaving(['<', 'created_at', $str_arr[1]])
            ->orderBy(['created_at' => SORT_DESC])->all() as $batch){?>
  <tr>
    <td style="border: 1px solid black; border-collapse: collapse"><?=$z++?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= Username::bankName($id = $batch->bank_id); ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= Username::branchName($id = $batch->branch_id); ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= Username::accountName($id = $batch->account_id); ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= $batch->batch_id; ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= $batch->cheques; ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= ChequesPrint::listAmount($batch); ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= ChequesPrint::listCreatedAt($batch); ?></td>
    <td style="border: 1px solid black; border-collapse: collapse"><?= Username::createdBy($id = $batch); ?></td>

<?php }  
?>
</table> 
</body>
</html>

