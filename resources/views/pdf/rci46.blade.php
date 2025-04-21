<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> REPORT OF CHECKS ISSUED
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


    <!-- HEADER SECTION: Appendix Reference -->
    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix 46</span>
    </div>

    <!-- MAIN TABLE STRUCTURE -->
    <table style="width:100%; table-layout: fixed; padding-top: 15px">

        <!-- DOCUMENT TITLE AND LGU DETAILS -->
        <tr>
            <td colspan="98" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px;">
                REPORT OF CHECKS ISSUED
                <br>
                <span style="font-size: 15px;"> Period Covered:__________________ </span>

                <!-- LGU/FUND/ACCOUNT INFO -->
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <!-- LGU NAME -->
                        <p style="margin: 0; font-size: 13px;">
                            <strong>LGU :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 350px; padding-left: 5px;">
                                <!-- (Placeholder for LGU) -->
                            </span>
                        </p>

                        <!-- FUND NAME -->
                        <span style="display: inline-block; margin: 0; font-size: 13px; padding-top: 5px">
                            <strong>Fund :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 350px; padding-left: 5px;">
                                <!-- (Placeholder for FUND) -->
                            </span>
                        </span>

                        <!-- REPORT NUMBER -->
                        <span style="display: inline-block; margin: 0; padding-left: 390px; font-size: 13px;">
                            <strong>Report No. :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 115px; padding-left: 5px;">
                                <!-- (Placeholder for REPORT NO.) -->
                            </span>
                        </span>
                        <br>

                        <!-- BANK DETAILS -->
                        <span style="display: inline-block; margin: 0; font-size: 13px;">
                            <strong>Bank Name/Account No. :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 250px; padding-left: 5px;">
                                <!-- (Placeholder for BANK DETAILS) -->
                            </span>
                        </span>

                        <!-- SHEET NUMBER -->
                        <span style="display: inline-block; margin: 0; padding-left: 381px; font-size: 13px; padding-top: 2px">
                            <strong>Sheet No. :</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 120px; padding-left: 5px;">
                                <!-- (Placeholder for SHEET NO) -->
                            </span>
                        </span>
                    </div>
                </div>
            </td>
        </tr>

        <!-- TABLE HEADER SECTION -->
        <tr style="font-size: 13px; text-align:center;">
            <th colspan="12">Check</th>
            <th colspan="8" rowspan="2">DV/Payroll <br>No.</th>
            <th colspan="6" rowspan="2">CAFOA No.</th>
            <th colspan="10" rowspan="2">Responsibility <br>Center Code</th>
            <th colspan="21" rowspan="2">Payee</th>
            <th colspan="9" rowspan="2">Acount Code</th>
            <th colspan="20" rowspan="2">Nature of Payment</th>
            <th colspan="12" rowspan="2">Amount</th>
        </tr>

        <!-- CHECK SUBHEADERS -->
        <tr style="text-align: center; font-size: 13px; font-weight: bold;">
            <td colspan="6">Date</td>
            <td colspan="6">Serial No.</td>
        </tr>

        <!-- Placeholder row for data -->
        @for ($i = 0; $i < 5; $i++)
            <tr>
            <td style="height: 1%;" colspan="6"></td> <!-- data for date -->
            <td colspan="6"></td> <!-- data for serial no -->
            <td colspan="8"></td> <!-- data for DV/Payroll No. -->
            <td colspan="6"></td> <!-- data for CAFOA No.-->
            <td colspan="10"></td> <!-- data for Responsibility Center -->
            <td colspan="21"></td> <!-- data for Payee -->
            <td colspan="9"></td> <!-- data for Acount Code -->
            <td colspan="20"></td> <!-- data for Nature of Payment -->
            <td colspan="12"></td> <!-- data for Amount -->
            </tr>
            @endfor

            <!-- FOOTER WITH CERTIFICATION -->
            <tr>
                <td colspan="58" style="height: 5%">
                    <!-- CERTIFICATION BLOCK -->
                    <div style="font-size: 13px; text-align: center;">
                        <p style="font-weight:bold;">CERTIFICATION</p>
                        <p style="text-indent: 20px">I hereby certify on my official oath that this Report of Checks Issued in _________ sheet(s) is
                            a full, true and correct statement of all checks issued by me during the period stated above for which
                            Check Nos. ___________ to _____________ inclusive, were actually issued by me in payment for
                            obligations shown in the attached disbursement vouchers/payroll.
                        </p>
                        <div>
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

                <!-- RECEIVED BY BLOCK -->
                <td colspan="40">
                    <div style="font-size: 13px; text-align: center;">
                        <p style="font-weight:bold; padding-bottom: 48px; text-align:left; padding-left: 10px">RECEIVED BY:</p>
                        <div>
                            <div style="padding-top: 28px; padding-bottom: 9px; text-align: center;">
                                <span style="padding-right: 5px; ">_____________________________</span><br>
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