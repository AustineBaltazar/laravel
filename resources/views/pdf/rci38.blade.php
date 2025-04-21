<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT OF CHECKS ISSUED
    </title>
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

    <!-- Top-right Appendix number -->
    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix 52</span>
    </div>

    <table style="width:100%; table-layout: fixed; padding-top: 15px">

        <!-- Header Title and Period Covered -->
        <tr>
            <td colspan="70" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px; ">
                REPORT OF CHECKS ISSUED
                <br>
                <span style="font-size: 15px;"> Period Covered:__________________ </span>

                <!-- LGU Info and Report Metadata -->
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <!-- LGU, Fund, Report No. -->
                        <p style="margin: 0;">
                            <strong>LGU :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 300px; padding-left: 5px;">
                                <!-- (Placeholder for LGU) -->
                            </span>
                        </p>

                        <span style="display: inline-block; margin: 0;">
                            <strong>Fund :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 300px; padding-left: 5px;">
                                <!-- (Placeholder for FUND) -->
                            </span>
                        </span>

                        <span style="display: inline-block; margin: 0; padding-left: 140px;">
                            <strong>Report No. :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 100px; padding-left: 5px;">
                                <!-- (Placeholder for REPORT NO) -->
                            </span>
                        </span>
                        <br>

                        <!-- Bank and Sheet No. -->
                        <span style="display: inline-block; margin: 0;">
                            <strong>Bank Name/Account No. :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 200px; padding-left: 5px;">
                                <!-- (Placeholder for BANK NAME/ACCOUNT NO.) -->
                            </span>
                        </span>

                        <span style="display: inline-block; margin: 0; padding-left: 130px;">
                            <strong>Sheet No. :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 100px; padding-left: 5px;">
                                <!-- (Placeholder for SHEET NO) -->
                            </span>
                        </span>
                    </div>
                </div>

            </td>
        </tr>

        <!-- Table Headers -->
        <tr style="font-size: 13px; text-align:center;">
            <th colspan="16">Check</th>
            <th colspan="8" rowspan="2">DV/Payroll <br>No.</th>
            <th colspan="10" rowspan="2">CAFOA No.</th>
            <th colspan="17" rowspan="2">Payee</th>
            <th colspan="12" rowspan="2">Nature of Payment</th>
            <th colspan="7" rowspan="2">Amount</th>
        </tr>

        <!-- Subheaders for Check -->
        <tr style="text-align: center; font-size: 13px; font-weight: bold;">
            <td colspan="8">Date</td>
            <td colspan="8">Serial No.</td>
        </tr>

        <!-- Placeholder row for data  -->
        <!-- put your data here  -->
        @for ($i = 0; $i < 5; $i++)
            <tr>
            <td style="height: 1%;" colspan="8"></td>  <!-- data for date -->
            <td colspan="8"></td>  <!-- data for serial no -->
            <td colspan="8"></td>  <!-- data for DV/Payroll No.-->
            <td colspan="10"></td>  <!-- data for CAFOA No. -->
            <td colspan="17"></td>  <!-- data for Payee -->
            <td colspan="12"></td>  <!-- data for Nature of Payment -->
            <td colspan="7"></td>  <!-- data for Amount -->
            </tr>
            @endfor

            <!-- TOTAL Row for data-->
            <tr>
                <td style="height: 1%;" colspan="8"></td>
                <td colspan="8"></td>
                <td colspan="8"></td>
                <td colspan="10"></td>
                <td colspan="17" style="font-size: 13px; font-weight: bold;">TOTAL</td>
                <td colspan="12"></td>
                <td colspan="7"></td>
            </tr>


            <!-- Certification Section -->
            <tr>
                <td colspan="48" style="height: 5%">
                    <div style="font-size: 13px; text-align: center;">
                        <p style="font-weight:bold;">CERTIFICATION</p>
                        <p style="text-indent: 20px">
                            I hereby certify on my official oath that this Report of Checks Issued in _________ sheet(s) is
                            a full, true and correct statement of all checks issued by me during the period stated above for which
                            Check Nos. ___________ to _____________ inclusive, were actually issued by me in payment for
                            obligations shown in the attached disbursement vouchers/payroll.
                        </p>
                        <div>
                            <!-- Treasurer Signature Fields -->
                            <span>___________________________________________</span><br>
                            <span>Name and Signature of the Treasurer/Cashier/Disbursing Officer</span>
                            <br>
                            <div style="padding-top: 10px; padding-bottom: 10px;">
                                <span style="padding-right: 20px;">____________________________</span>
                                <span>________________________</span><br>
                                <span style="padding-right: 30%; padding-bottom: 10px;">Official Designation</span>
                                <span>Date</span>
                            </div>
                        </div>
                    </div>
                </td>

                <!-- Receiving Section -->
                <td colspan="22">
                    <div style="font-size: 13px; text-align: center;">
                        <p style="font-weight:bold; padding-bottom: 60px; text-align:left; padding-left: 10px">RECEIVED BY:</p>
                        <div>
                            <div style="padding-top: 28px; padding-bottom: 10px; text-align: center;">
                                <span style="padding-right: 5px;">_____________________________</span>
                                <span style="padding-right: 5px;">Signature over Printed Name</span>
                                <br><br>
                                <span>________________</span><br>
                                <span>Date</span>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

    </table>



</body>

</html>