<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ITINERARY OF TRAVEL </title>
</head>

<style>
    /* Table styling: border for table, th, and td with collapse for clean appearance */
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        word-wrap: break-word;
    }
</style>

<body>

    <!-- Appendix label aligned to the right -->
    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix 52</span>
    </div>

    <!-- Table for the Itinerary of Travel -->
    <table style="width:100%; table-layout: fixed; padding-top: 15px">
        <tr>
            <!-- Header for the Itinerary of Travel with placeholders for LGU, Fund, and No -->
            <td colspan="60" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px;">
                ITINERARY OF TRAVEL
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <!-- LGU, Fund, and ICS No details aligned inline -->
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <p style="margin: 0;">
                            <strong>LGU:</strong>
                            <span style="display: inline-block; border-bottom: 1px solid #000; width: 200px; padding-left: 5px;">
                                <!-- (Placeholder for LGU) -->
                            </span>
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 5px; margin-top: 5px;">
                            <span style="margin: 0;">
                                <strong>Fund:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 200px; padding-left: 5px;">
                                    <!-- (Placeholder for FUND) -->
                                </span>
                            </span>

                            <span style="margin: 0;">
                                <strong style="padding-left: 30%;">No:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 100px; padding-left: 5px;">
                                    <!-- (Placeholder for NO.) -->
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

            </td>
        </tr>

        <!-- Personal details section for Name, Position, Official Station, Date of Travel, and Purpose -->
        <tr>
            <td colspan="30" style="text-align: center; font-size: 15px; vertical-align: top; text-align:left; font-weight: bold; font-size: 13px; padding-bottom: 8px;">
                <span>
                    <strong>Name :</strong>
                    <span style="display: inline-block; border-bottom: 1px solid #000; width: 200px; padding-left: 5px;">
                        <!-- (Placeholder for NAME) -->
                    </span>
                </span>
                <br>
                <span>
                    <strong>Position :</strong>
                    <span style="display: inline-block; border-bottom: 1px solid #000; width: 190px; padding-left: 5px;">
                        <!-- (Placeholder for POSITION) -->
                    </span>
                </span>
                <br>
                <span>
                    <strong>Official Station :</strong>
                    <span style="display: inline-block; border-bottom: 1px solid #000; width: 170px; padding-left: 5px;">
                        <!-- (Placeholder for OFFICIAL STATION) -->
                    </span>
                </span>
            </td>

            <td colspan="30" style="text-align: center; font-size: 15px; vertical-align: top; text-align: left; font-weight: bold; font-size: 13px;">
                <span>
                    <strong>Date of Travel :</strong>
                    <span style="display: inline-block; border-bottom: 1px solid #000; width: 180px; padding-left: 5px;">
                        <!-- (Placeholder for DATE OF TRAVEL) -->
                    </span>
                </span>
                <br>
                <span>
                    <strong>Purpose of Travel :</strong>
                    <span style="display: inline-block; border-bottom: 1px solid #000; width: 170px; padding-left: 5px;">
                        <!-- (Placeholder for PURPOSE OF TRAVEL) -->
                    </span>
                </span>
            </td>

        </tr>

        <!-- Table headers -->
        <tr style="text-align:center; font-size: 13px; font-weight: bold;">
            <td rowspan="2" colspan="5">Date</td>
            <td rowspan="2" colspan="11">Places to be visited (Destination)</td>
            <td colspan="13" style="font-weight: bold;">TIME</td>
            <td rowspan="2" colspan="10">Means of Transportation</td>
            <td rowspan="2" colspan="6">Transport</td>
            <td colspan="4" rowspan="2">Per<br>Diem</td>
            <td colspan="4" rowspan="2">Others</td>
            <td colspan="7" rowspan="2">Total Amount</td>
        </tr>
        <tr style="text-align:center; font-size: 14px;">
            <td colspan="7">Departure</td>
            <td colspan="6">Arrival</td>
        </tr>

        <!-- placeholders for data entry -->
        @for ($i = 0; $i < 10; $i++)
            <tr>
            <td colspan="5" style=" font-size: 12px; padding: 5px;  width: 20%;"></td>  <!-- data for date -->
            <td colspan="11" style="padding: 5px;  width: 45%;"></td>  <!-- data for Place to be visited (Destination) -->
            <td colspan="7" style="padding: 5px;  width: 45%;"></td>  <!-- data for departure -->
            <td colspan="6" style="padding: 5px;  width: 45%;"></td>  <!-- data for arrival -->
            <td colspan="10" style="padding: 5px;  width: 45%;"></td>  <!-- data for means of Transport -->
            <td colspan="6" style="padding: 5px;  width: 45%;"></td>  <!-- data for Transport -->
            <td colspan="4" style="padding: 5px;  width: 45%;"></td>  <!-- data for Per Diem -->
            <td colspan="4" style="padding: 5px;  width: 45%;"></td>  <!-- data for Others -->
            <td colspan="7" style="padding: 5px;  width: 45%;"></td>  <!-- data for total Amount -->
            </tr>
            @endfor

            <!-- Total row to show "TOTAL" -->
            <tr style="font-size: 13px; text-align:center; font-weight:bold;">
                <td colspan="60">TOTAL</td>
            </tr>

            <!-- Section for certifying and preparing signatures -->
            <tr>
                <td colspan="35" rowspan="2">
                    <div style="font-size: 13px; text-align:center">
                        <!-- Certifying statement -->
                        <p> I certify that: (1) I have reviewed the foregoing itinerary,
                            (2) the travel is necessary to the service,
                            (3) the period covered is reasonable and
                            (4) the expenses claimed are proper.</p>
                        <span>_________________________________</span>
                        <br>
                        <span>Signature over Printed Name <br>
                            Immediate Supervisor
                        </span>
                    </div>
                </td>

                <!-- Section for Prepared by signature -->
                <td colspan="25" style="width: 40%; vertical-align: top; font-size: 13px">
                    <strong>Prepared by:</strong>
                    <div style="text-align: center; margin-top: 10px; padding-bottom: 10px">
                        <div style="border-bottom: 1px solid #000; width: 60%; margin: 0 auto; height: 20px;"></div>
                        <span>Signature over Printed Name</span>
                    </div>
                </td>
            </tr>

            <!-- Another "Prepared by" section for confirmation -->
            <tr>
                <td colspan="25" style="width: 40%; vertical-align: top; font-size: 13px">
                    <strong>Approved by:</strong>
                    <div style="text-align: center; margin-top: 10px; padding-bottom: 10px">
                        <div style="border-bottom: 1px solid #000; width: 60%; margin: 0 auto; height: 20px;"></div>
                        <span>Signature over Printed Name</span>
                    </div>
                </td>
            </tr>

    </table>

    <!-- Optional footer for additional remarks (currently commented out) -->
    <!-- <div style="text-align: left; font-size: 13px; font-style: italic;">For Use of Supply and/or Property Division/Unit </div> -->

</body>

</html>