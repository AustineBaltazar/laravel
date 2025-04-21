<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Supply</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <table style="width:100%; table-layout: fixed;">

        <!-- header. -->
        <tr>
            <td colspan="7" style="text-align: center; font-weight: bold; height: 5%; font-family: Calibri, sans-serif; ">OFFICE SUPPLIES</td>
        </tr>


        <!-- table row. -->
        <tr style="font-family: Arial, Helvetica, sans-serif;">
            <th colspan="2" style="text-align: left; height: 3%; font-size: 15px; width: 15%; font-family: Arial, Helvetica, sans-serif">Stock No:</th>
            <th colspan="3" style="text-align: left; width: 45%;">ITEM DESCRIPTION</th>
            <th style="width: 15%;">UNIT</th>
            <th style="width: 15%;">BRAND</th>
        </tr>

        <!-- table loop change base how many data-->
        @for ($i = 0; $i < 40; $i++)
            <tr style="font-family:Arial, Helvetica, sans-serif;">
            <td colspan="2" style="height: 1%; word-break: break-word; width: 15%;">PG-2002-AAA</td><!-- table for stock no. -->
            <td colspan="3" style="word-break: break-word; width: 45%;">this is description</td><!-- table for item description. -->
            <td style="text-align: center; word-break: break-word; width: 25%;"></td><!-- table for unit. -->
            <td style="text-align: center; word-break: break-word; width: 25%;"></td><!-- table for brand. -->
            </tr>
            @endfor

    </table>
</body>

</html>