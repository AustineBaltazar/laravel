    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REPRESENTATION AND TRANSPORTATION ALLOWANCE (RATA)</title>
    </head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        table.centered-table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <body>
        <table style="width: 90%; margin: 0 auto; border-collapse: collapse; align-items:center; border: 2px solid black;">
            <tr>
                <td colspan="4" style="position: relative; height: 80px; text-align: center; vertical-align: middle;">

                    <!-- Left Logo change width, left, top based on size of logo-->
                    <img src="{{ public_path('/../resources/views/pdf/logoos.jpg') }}"
                        style="height: auto; position: absolute; width: 60px;  left: 80; top: 40%; transform: translateY(-50%);">

                    <!-- Center Text -->
                    <div style="display: inline-block; padding-top: 30px; font-family: Arial, Helvetica, sans-serif">
                        <div style="font-size: 11px; font-weight: regular;">Republic of the Philippines</div>
                        <div style="font-size: 13px; font-weight: bold;">PROVINCE OF PANGASINAN</div>
                        <div style="font-size: 13px; font-weight: bold;">OFFICE OF THE PROVINCIAL ACCOUNTANT</div>
                        <br>
                        <div style="font-size: 14px;">PRE-AUDIT AND REVIEW CHECKLIST for</div>
                        <div style="font-size: 13px; font-weight: bold">REPRESENTATION AND TRANSPORTATION ALLOWANCE (RATA)</div>
                        <div style="font-size: 14px; font-weight: regular; font-style: italic;">(Please arrange documents according to checklist)</div>
                    </div>

                    <!-- Right Logo  change width, left, top based on size of logo-->
                    <img src="{{ public_path('/../resources/views/pdf/logoos.jpg') }}"
                        style="height: auto; position: absolute; width: 60px;  right: 80; top: 40%; transform: translateY(-50%);">


                    <div style="font-family:Arial, Helvetica, sans-serif; display: flex; font-style:italic; font-weight:100; padding-bottom: 3px; font-weight:normal; align-items: center; justify-content: space-between; width: 100%;">
                        <span>Payee:______________________________________</span>
                        <span>Amount: ________________</span>
                    </div>

                </td>
            </tr>


            <!-- text loop-->
            @php
            $loopTexts = [
            'Certification that the official/employee did not use governmeny vehicle and is not assigned any government vehicle',
            'Certification from HRDMO for the number of workdays of actual performance in a month',
            'Other documents peculiar to the claim that are considered necessary',
            ];
            @endphp

            @foreach ($loopTexts as $text)
            <tr>
                <td style="width: 15%; font-size: 20px; text-align: center;"></td> <!-- or &#x2611; for checked -->
                <td colspan="3" style="text-align: left; height: 3%; font-size: 15px; font-family: Arial, Helvetica, sans-serif">{{ $text }}</td>
            </tr>
            @endforeach


            <!--blank box fixed -->
            <tr>
                <td colspan="4" style="height: 5px;"></td>
            </tr>

            <!-- NOTES TABLE -->
            <tr>
                <td style="width: 10%; font-size: small; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px">NOTES:</td>
                <td colspan="3" style="text-align: left; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 15px">All Supporting Documents must be property filled up and signed by the authorized signatories</td>
            </tr>


            <!--Verified Correct TABLE-->
            <tr>
                <th rowspan=" 2" colspan="2" style="vertical-align: middle; font-size: small; font-family: Arial, Helvetica, sans-serif">Verified Correct:</th>
                <td colspan="2" style="text-align: left; font-weight: bold;  font-family: Arial, Helvetica, sans-serif">1. PRE-AUDIT/Date:</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: left; font-weight: bold;  font-size: medium; font-family: Arial, Helvetica, sans-serif">2. REVIEW/Date:</td>
            </tr>


            <!-- footer -->
            <tr>
                <td colspan="4" style="font-size: 13px; font-weight: regular; font-style: italic; font-family: Arial, Helvetica, sans-serif; text-align: left">
                    Reference: COA Circular No. 2023-004 date June 14, 2023 Updated Documentary
                    Requirements for Common Government Transaction/COA Circular No. 2012-001 dated June 14,
                    2012 Revised Documentary Requirements for Common Government Transaction
                </td>
            </tr>

        </table>



    </body>

    </html>