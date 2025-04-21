<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASH JOURNAL</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        word-wrap: break-word;
    }
</style>

<body>

    <!-- Appendix Label Section -->
    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix_______</span>
    </div>

    <table style="width:100%; table-layout: fixed; padding-top: 15px">
        <!-- Table Header -->
        <tr>
            <td colspan="65" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px; ">
                CASH JOURNAL
                <br>
                <span style="font-size: 18px;"> Month_________</span>
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <!-- LGU, Fund and ICS No in line -->
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <p style="margin: 0;">
                            <strong>Agency:</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 300px; padding-left: 5px;">
                                <!-- (Placeholder for AGENCY) -->
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

        <!-- Table Headers -->
        <tr style="font-size: 13px; font-weight: bold; text-align: center;">
            <th rowspan="4" colspan="4">Date</th>
            <th rowspan="4" colspan="4">RCD <br> No.</th>
            <th rowspan="4" colspan="4">JEV <br> No.</th>
            <th rowspan="4" colspan="5">Name of Collecting Officer</th>
            <th colspan="20">C O L L E C T I O N S</th>
            <th colspan="28">R E M M I T A N C E</th>
        </tr>

        <!-- Table Sub-headers-->
        <tr style="font-size: 13px; font-weight: bold;  text-align: center;">
            <td rowspan="3" colspan="4">Debit <br> 106</td>
            <td colspan="16">C R E D I T</td>
            <td colspan="24">D E B I T</td>
            <td rowspan="3" colspan="4">Debit <br> 106</td>
        </tr>

        <!-- Table Sub-headers -->
        <tr style="font-size: 13px; font-weight: bold;  text-align: center;">
            <td rowspan="2" style=" width: 6%;"></td>
            <td rowspan="2" style=" width: 6%;"></td>
            <td rowspan="2" style=" width: 6%;"></td>
            <td colspan="13">S U N D R Y</td>
            <td rowspan="2" colspan="4"></td>
            <td rowspan="2" colspan="4"></td>
            <td rowspan="2" colspan="4"></td>
            <td colspan="12">S U N D R Y</td>
        </tr>

        <!-- Table Detailed Sub-headers -->
        <tr style="font-size: 13px; font-weight: bold; text-align: center;">
            <td colspan="6">Acct. Code</td>
            <td colspan="3">P</td>
            <td colspan="4">Amount</td>
            <td colspan="5">Acct. Code</td>
            <td colspan="3">P</td>
            <td colspan="4">Amount</td>
        </tr>

        <!-- Placeholder row for data  -->
        <!-- Put your data here  -->
        @for ($i = 0; $i < 30; $i++)
            <tr style="font-size: 11px;">
            <td colspan="4" style="padding: 5px;">9-2-2002</td>  <!-- data for date -->
            <td colspan="4" style="padding: 5px;">23</td>  <!-- data for RCD No. -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for JEV No. -->
            <td colspan="5" style="padding: 5px;"></td>  <!-- data for Name of Collecting Officer -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for Debit 106 -->
            <td colspan="1" style="padding: 5px;"></td>  <!-- data for blank box -->
            <td colspan="1" style="padding: 5px;"></td>  <!-- data for blank box -->
            <td colspan="1" style="padding: 5px;"></td>  <!-- data for blank box -->
            <td colspan="6" style="padding: 5px;"></td>  <!-- data for Acct Code -->
            <td colspan="3" style="padding: 5px;"></td>  <!-- data for P -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for Amount -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for blank box -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for blank box -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for blank box -->
            <td colspan="5" style="padding: 5px;"></td>  <!-- data for Acct Code -->
            <td colspan="3" style="padding: 5px;"></td>  <!-- data for P -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for Amount -->
            <td colspan="4" style="padding: 5px;"></td>  <!-- data for credit 106 -->
            </tr>
            @endfor

    </table>

    <!-- Footer Note indicating the document's intended use -->
    <div style="text-align: left; font-size: 13px; font-style: italic;">For <strong>NATIONAL GOVERNMENT Books</strong> Use</div>

</body>

</html>