<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECK DISBURSEMENT JOURNAL</title>
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
            <!-- Header for Check Disbursement Journal title and month -->
            <td colspan="69" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px;">
                CHECK DISBURSEMENT JOURNAL
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
            <th rowspan="3" colspan="5">Date</th>
            <th rowspan="3" colspan="5">JEV <br>No.</th>
            <th rowspan="3" colspan="5">RCI/DV <br>No.</th>
            <th colspan="8">Serial No. of <br> Checks</th>
            <th rowspan="3" colspan="6">Name of Disbursing Officer</th>
            <th colspan="20">C R E D I T</th>
            <th colspan="20">D E B I T</th>
        </tr>

        <!-- Sub-headers-->
        <tr style="font-size: 12px; font-weight: bold; text-align: center;">
            <td rowspan="2" colspan="4">From</td>
            <td rowspan="2" colspan="4">To</td>
            <td rowspan="2" colspan="3"></td>
            <td rowspan="2" colspan="3"></td>
            <td rowspan="2" colspan="3"></td>
            <td colspan="11">S U N D R Y</td>
            <td rowspan="2" colspan="3"></td>
            <td rowspan="2" colspan="3"></td>
            <td rowspan="2" colspan="3"></td>
            <td colspan="11">S U N D R Y</td>
        </tr>

        <!-- Sub-headers -->
        <tr style="font-size: 12px; font-weight: bold; text-align:center;">
            <td colspan="4">Acct. Code</td>
            <td colspan="3">P</td>
            <td colspan="4">Amount</td>
            <td colspan="4">Acct. Code</td>
            <td colspan="3">P</td>
            <td colspan="4">Amount</td>
        </tr>

        <!-- Placeholder row for data  -->
        <!-- Put your data here -->
        @for ($i = 0; $i < 30; $i++)
            <tr style="height: 1%; padding: 5px; font-size: 13px; text-align: center;">
            <td colspan="5">hello world and hi world</td>  <!-- data for date -->
            <td colspan="5"></td>  <!-- data for JEV No -->
            <td colspan="5"></td>  <!-- data for RCI/DV No. -->
            <td colspan="4"></td>  <!-- data for From -->
            <td colspan="4"></td>  <!-- data for To -->
            <td colspan="6"></td>  <!-- data for Name of Disbursing Officer -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="3"></td>  <!-- data for blank box -->
            <td colspan="4"></td>  <!-- data for Acct. Code -->
            <td colspan="3"></td>  <!-- data for P -->
            <td colspan="4"></td>  <!-- data for amount -->
            <td colspan="3"></td>  <!-- data for blank boxs -->
            <td colspan="3"></td>  <!-- data for blank boxs -->
            <td colspan="3"></td>  <!-- data for blank boxs -->
            <td colspan="4"></td>  <!-- data for Acct. Code -->
            <td colspan="3"></td>  <!-- data for P -->
            <td colspan="4"></td>  <!-- data for Amount -->
            </tr>
            @endfor

    </table>

</body>

</html>