<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CHECK DISBURSEMENT RECORD </title>
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

    <!-- Header Section with Title and Agency Info -->
    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix______</span>
    </div>
    <table style="width:100%; table-layout: fixed; padding-top: 15px; padding-bottom: 7px;">
        <tr>
            <!-- Table Header: Title and Agency/Fund Info -->
            <td colspan="30" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 20px; ">
                CHECK DISBURSEMENTS RECORD
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <!-- LGU, Fund and ICS No in line -->
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <p style="margin: 0;">
                            <strong>Agency:</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 250px; padding-left: 5px;">
                                <!-- (Placeholder for AGENCY) -->
                            </span>
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 5px; padding-bottom: 3px;">
                            <span style="margin: 0;">
                                <strong>Fund:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 250px; padding-left: 5px;">
                                    <!-- (Placeholder for FUND) -->
                                </span>
                            </span>
                            <span style="margin: 0; padding-left: 10%;">
                                <strong style="padding-left: 10%;">Sheet No:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 120px; padding-left: 5px;">
                                    <!-- (Placeholder for SHEET NO) -->
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

            </td>
        </tr>

        <!-- Accountable Officer, Designation, and Station -->
        <tr style="text-align: center; font-style: italic; font-size: 15px ">
            <td colspan=" 10" style="padding-top: 14px; padding-bottom: 7px;  ">
                <strong>________________________</strong><br>Accountable Officer
            </td>
            <td colspan="10" style="padding-top: 14px; padding-bottom: 7px; ">
                <strong>________________________</strong><br>Official Designation
            </td>
            <td colspan="10" style="padding-top: 14px; padding-bottom: 7px; ">
                <strong>_______________________</strong><br>Station
            </td>
        </tr>

        <!-- Table Headers-->
        <tr style="text-align:center; font-size: 13px; font-weight: bold;">
            <td rowspan="2" colspan="3">Date</td>
            <td colspan="5" style="font-weight:  bold;">CHECK</td>
            <td rowspan="2" colspan="5">Name of Payee</td>
            <td rowspan="2" colspan="3">UACS Code</td>
            <td rowspan="2" colspan="5">Nature of Payment</td>
            <td rowspan="2" colspan="3">NCA <br>Received</td>
            <td rowspan="2" colspan="3">Checks</td>
            <td rowspan="2" colspan="3">Bank/NCA</td>

        </tr>

        <!-- Sub Headers-->
        <tr style="text-align:center;  font-size: 13px; font-weight: bold;">
            <td colspan="2">No.</td>
            <td colspan="3">Date Released</td>

        </tr>

        <!-- Loop to Display Data Rows -->
        <!-- Put your data here -->
        @for ($i = 0; $i < 4; $i++)
            <tr style="font-size:small">
            <td colspan="3" style=" width: 15%; padding: 5px;"></td>  <!-- data for Date -->
            <td colspan="2" style=" width: 45%; padding: 5px;"></td>  <!-- data for No -->
            <td colspan="3" style=" width: 15%; padding: 5px;"></td>  <!-- data for date released -->
            <td colspan="5" style=" width: 45%; padding: 5px;"></td>  <!-- data for name of payee -->
            <td colspan="3" style=" width: 15%; padding: 5px;"></td>  <!-- data for UACS Code -->
            <td colspan="5" style=" width: 45%; padding: 5px;"></td>  <!-- data for Nature of Payment -->
            <td colspan="3" style=" width: 15%; padding: 5px;"></td>  <!-- data for NCA Received -->
            <td colspan="3" style=" width: 15%; padding: 5px;"></td>  <!-- data for checks -->
            <td colspan="3" style=" width: 15%; padding: 5px;"></td>  <!-- data for Bank/NCA -->
            </tr>
            @endfor

            <!-- Certification Section -->
            <tr style="font-weight:bold; text-align: center; font-size: 14px">
                <td colspan="30">C E R T I F I C A T I O N</td>
            </tr>

            <!-- Certification Text -->
            <tr>
                <td colspan="30">
                    <div style="width: 90%; margin: 0 auto; font-size: 14px;">
                        <p style="text-align: justify; text-indent: 50px; padding-left: 60px;">
                            I hereby certify that the foregoing is a correct and complete record of all checks <br>
                            issued by me in my capacity as _____________________of ______________________ <br>
                            during the period from ____________________ to ___________________, inclusives,<br>
                            as indicated in the corresponding columns.
                        </p>
                    </div>

                    <div style=" padding-bottom: 10px; text-align: left; font-size: 13px; padding-top: 5px;">
                        <div style="text-align: center;">
                            <div style="padding-left: 250px;">
                                <span>________________________</span><br>
                                <span>Name and Signature</span>
                            </div>
                            <div style="padding-left: 250px;">
                                <span>___________________</span><br>
                                <span>Date</span>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
    </table>

    <!-- Footer Information -->
    <div style="text-align: left; font-size: 13px; font-style: italic;">For Accountable Officers' Use </div>

</body>

</html>