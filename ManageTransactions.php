<?php
function GetTransactions(string $filename) : array {
    $file_url = __DIR__ . "\\$filename";
    $transactions = [];
    if(file_exists($file_url)) {

        $handle = fopen($file_url, "r");

        while($data = fgetcsv($handle)) {
            [$date, $check, $desc, $amount] = $data;
            $transactions[] = [
                "date" => $date,
                "check" => $check,
                "desc" => $desc,
                "amount" => $amount
            ];
        }

        fclose($handle);
        array_shift($transactions);
        return $transactions;
    }
    return $transactions;
}