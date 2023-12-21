<?php
require_once __DIR__ . '/ManageTransactions.php';

echo "<pre>";
$transactions = GetTransactions( "transactions.csv");
//print_r($transactions);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(count($transactions)) { ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Check #</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($transactions as $transaction) : ?>
                <tr>
                    <th scope="row"><?= $transaction["date"] ?></th>
                    <td><?= $transaction["check"] ?></td>
                    <td><?= $transaction["desc"] ?></td>
                    <td><?= $transaction["amount"] ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            Not exist any Transactions
        </div>
    <?php } ?>
</body>
</html>
