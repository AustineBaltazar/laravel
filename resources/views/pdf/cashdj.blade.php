<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASH DISBURSEMENT JOURNAL</title>
</head>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        word-break: break-word;

    }
</style>

<body>

    <!-- Appendix label section aligned to the right -->
    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix_______</span>
    </div>

    <table style="width:100%; table-layout: fixed; padding-top: 15px">
        <tr>
            <!-- Header for the Check Disbursement Journal with title and dynamic placeholders (LGU, Fund, Sheet No.) -->
            <td colspan="69" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px;">
                CASH DISBURSEMENT JOURNAL
                <br>
                Month___________________________
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <!-- LGU, Fund and ICS No in line -->
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <p style="margin: 0;">
                            <strong>Agency:</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 300px; padding-left: 5px;">
                                <!-- (Placeholder for Agency) -->
                            </span>
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 5px; padding-bottom: 3px;">
                            <span style="margin: 0;">
                                <strong>Fund:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 300px; padding-left: 5px;">
                                    <!-- (Placeholder for FUND) -->
                                </span>
                            </span>
                            <span style="margin: 0; padding-left: 10%;">
                                <strong style="padding-left: 30%;">Sheet No:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 120px; padding-left: 5px;">
                                    <!-- (Placeholder for SHEET NO) -->
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <!-- Table headers -->
        <tr style="font-size: 12px; font-weight: bold; text-align:center;">
            <!-- Column headers for Date, JEV No., RCI/DV No., and Disbursing Officer Name -->
            <th rowspan="3" colspan="5">Date</th>
            <th rowspan="3" colspan="5">JEV <br>No.</th>
            <th rowspan="3" colspan="5">RCI/DV <br>No.</th>
            <th rowspan="3" colspan="10">Name of Disbursing Officer</th>
            <th colspan="19">C R E D I T</th>
            <th colspan="25">D E B I T</th>
        </tr>

        <!-- Second row for detailed column descriptions for CREDIT and DEBIT -->
        <tr style="font-size: 12px; font-weight: bold; text-align: center;">
            <!-- Sub-columns for CREDIT and DEBIT from various sources (Acct. Code, P, Amount) -->
            <td rowspan="2" colspan="3"></td>
            <td rowspan="2" colspan="3"></td>
            <td colspan="13">S U N D R Y</td>
            <td rowspan="2" colspan="3"></td>   
            <td rowspan="2" colspan="3"></td>
            <td rowspan="2" colspan="3"></td>
            <td rowspan="2" colspan="3"></td>
            <td colspan="13">S U N D R Y</td>
        </tr>

        <!-- Third row for specifying the exact information (Acct. Code, P, Amount) under CREDIT and DEBIT -->
        <tr style="font-size: 12px; font-weight: bold; text-align:center;">
            <td colspan="5">Acct. Code</td>
            <td colspan="3">P</td>
            <td colspan="5">Amount</td>
            <td colspan="5">Acct. Code</td>
            <td colspan="3">P</td>
            <td colspan="5">Amount</td>
        </tr>

        <!-- Placeholder data  -->
        <!-- Put your data here -->
        @for ($i = 0; $i < 5; $i++)
            <tr style="height: 1%;  width: 15%; padding: 5px; text-align: center;">
            <td colspan="5"></td>  <!-- data for date -->
            <td colspan="5"></td>  <!-- data for JEV No -->
            <td colspan="5"></td>  <!-- data for RCI/DV No. -->
            <td colspan="10"></td>  <!-- data for Name of Disbursement Officer -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="5"></td>  <!-- data for Acct. Code -->
            <td colspan="3"></td>  <!-- data for P -->
            <td colspan="5"></td>  <!-- data for amount -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="5"></td>  <!-- data for Acct. Code-->
            <td colspan="3"></td>  <!-- data for P -->
            <td colspan="5"></td>  <!-- data for amount -->
            </tr>
            @endfor

    </table>

</body>

</html>