<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            vertical-align: middle;
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>

<body>
    <span style="font-weight: bold; display: block; text-align: right;">ANNEX G-3</span>

    <table style="width:100%; table-layout: fixed;">
        <!-- Header Row -->

        <tr>
            <td colspan="15" style="text-align: center; font-weight: bold; font-size: 1.2rem; font-family: Calibri, sans-serif;">
                JOURNAL ENTRY VOUCHER
                <p style="text-decoration: underline; font-size: small; margin-top: 10px; font-weight: bold;">Province of Pangasinan</p>
                <p style="font-size: small; font-weight: normal;">LGU</p>
            </td>
            <td colspan="5" class="text-left">
                No: ____________
                <br>
                <br>
                Date: ___________
            </td>
        </tr>

        <!-- Checkbox row -->
        <tr>
            <td colspan="20" style="text-align: center; padding: 13px;">
                <label style="margin: 0 25px; font-size: 16px;">
                    <input type="checkbox" style="width: 18px; height: 18px; vertical-align: middle;"> Collection
                </label>
                <label style="margin: 0 25px; font-size: 16px;">
                    <input type="checkbox" style="width: 20px; height: 18px; vertical-align: middle;"> Check Disbursement
                </label>
                <label style="margin: 0 15px; font-size: 16px;">
                    <input type="checkbox" style="width: 18px; height: 18px; vertical-align: middle;"> Cash Disbursement
                </label>
                <label style="margin: 0 25px; font-size: 16px;">
                    <input type="checkbox" style="width: 18px; height: 18px; vertical-align: middle;"> Others
                </label>
            </td>
        </tr>


        <!-- Column headers for entries -->
        <tr style="font-size: 13px; font-weight: normal; font-family: Calibri, sans-serif;">
            <th rowspan="3" colspan="4" style="font-weight: normal;">Responsibility Center</th>
            <th colspan="16">ACCOUNTING ENTRIES</th>
        </tr>
        <tr style=" font-size: 13px; font-weight: normal; font-family: Calibri, sans-serif;">
            <th colspan="5" rowspan="2" style="font-weight: normal;">Accounts and Explanation</th>
            <th rowspan="2" colspan="3" style="font-weight: normal;">Account Code</th>
            <th rowspan="2" colspan="2" style="font-weight: normal;">PR</th>
            <th colspan="6" style="font-weight: normal;">Amount</th>

        </tr>
        <tr style="font-size: 13px; font-weight: normal; font-family: Calibri, sans-serif;">
            <th colspan="3" style="font-weight: normal;">Debit</th>
            <th colspan="3" style="font-weight: normal;">Credit</th>
        </tr>



        @for ($i = 0; $i < 20; $i++)
            <tr>
            <td colspan="4" style="height: 1%;"></td>
            <td colspan="5">hello</td>
            <td colspan="3"></td>
            <td colspan="2"></td>
            <td colspan="3"></td>
            <td colspan="3"></td>
            </tr>
            @endfor


            <!-- Total -->
            <tr>
                <td colspan="14" class="text-right" style="font-weight: bold; height: 1%; font-family: Calibri, sans-serif;">TOTAL</td>
                <td colspan="3"></td>
                <td colspan="3"></td>
            </tr>


            <tr>
                <!-- Prepared by -->
                <td colspan="10" style="text-align: left; vertical-align: top;">
                    Prepared by:
                    <p style="text-align: center; margin-top: 20px;">_____________________</p>
                </td>

                <!-- Approved by -->
                <td colspan="10" style="text-align: left; vertical-align: top; ">
                    Approved by:
                    <p style="text-align: center; font-weight: bold; margin-bottom: 0; font-family: Calibri, sans-serif; ">MARLON C. OPERAÑA</p>
                    <p style="text-align: center; font-size: medium; margin-top: 0;">Provincial Accountant</p>
                </td>
            </tr>

    </table>

</body>

</html>