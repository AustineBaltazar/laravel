<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CHECK REGISTER </title>
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

    <!-- Appendix 41 label section aligned to the right -->
    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix 41</span>
    </div>

    <table style="width:100%; table-layout: fixed; padding-top: 15px; padding-bottom: 7px;">
        <tr>
            <!-- Header for Check Register title and information (LGU, Fund, and Bank Account No.) -->
            <td colspan="20" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 20px;">
                CHECK REGISTER
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <!-- LGU, Fund and ICS No in line -->
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <p style="margin: 0;">
                            <strong>LGU:</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 230px; padding-left: 5px;">
                                <!-- (Placeholder for LGU) -->
                            </span>
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 5px; padding-bottom: 3px;">
                            <span style="margin: 0;">
                                <strong>Fund:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 230px; padding-left: 5px;">
                                    <!-- (Placeholder for FUND) -->
                                </span>
                            </span>
                            <span style="margin: 0; padding-left: 10%;">
                                <strong style="padding-left: 10%;">Bank Account No.:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 120px; padding-left: 5px;">
                                    <!-- (Placeholder for BANK ACCOUNT NO) -->
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        <!-- Row for Accountable Officer, Official Designation, and Station -->
        <tr style="text-align: center; font-style: italic; font-size: 15px ">
            <td colspan=" 8" style="padding-top: 14px; padding-bottom: 7px;  ">
                <strong>________________________</strong><br>Accountable Officer
            </td>
            <td colspan="6" style="padding-top: 14px; padding-bottom: 7px; ">
                <strong>________________________</strong><br>Official Designation
            </td>
            <td colspan="6" style="padding-top: 14px; padding-bottom: 7px; ">
                <strong>_______________________</strong><br>Station
            </td>
        </tr>

        <!-- Table headers  -->
        <tr style="text-align:center; font-size: 13px; font-weight: bold;">
            <td rowspan="2" colspan="3">Date Issued</td>
            <td colspan="5" style="font-weight: bold;">CHECK</td>
            <td rowspan="2" colspan="4">Name of Payee</td>
            <td rowspan="2" colspan="2">Amount</td>
            <td colspan="6" style="font-weight: bold;">Received by:</td>
        </tr>

        <!-- Sub-headers -->
        <tr style="text-align:center;  font-size: 13px;">
            <td colspan="2">Number</td>
            <td colspan="3">Date Released</td>
            <td colspan="4">Name/Signature</td>
            <td colspan="2">Date</td>
        </tr>

        <!-- Placeholder row for data  -->
        <!-- Put your data here -->
        @for ($i = 0; $i < 4; $i++)
            <tr>
            <td colspan="3" style=" padding: 5px;"></td>  <!-- data for date issued -->
            <td colspan="2" style=" padding: 5px;"></td>  <!-- data for number -->
            <td colspan="3" style=" padding: 5px;"></td>  <!-- data for date released -->
            <td colspan="4" style=" padding: 5px;"></td>  <!-- data for Name of payee -->
            <td colspan="2" style=" padding: 5px;"></td>  <!-- data for amount -->
            <td colspan="4" style=" padding: 5px;"></td>  <!-- data for name/signature -->
            <td colspan="2" style=" padding: 5px;"></td>  <!-- data for date -->
            </tr>
            @endfor

    </table>

    <!-- Footer for the Accountable Officers' Use section -->
    <div style="text-align: left; font-size: 13px; font-style: italic;">For Accountable Officers'Use </div>

</body>

</html>