<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Certification of Appropriations</title>
    <style>
        body {
            font-size: 14px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            word-break: break-word;

        }
    </style>
</head>

<body>


    <div colspan="4" style="position: relative; height: 80px; text-align: center; vertical-align: middle;">
        
                <!-- Left Logo  change width, left, top based on size of logo-->
                <img src="{{ public_path('/../resources/views/pdf/logoos.jpg') }}"
                    style="height: auto; position: absolute; width: 80px;  left: 210; top: 40%; transform: translateY(-50%);">

                <!-- Center Text Header -->
                <div style="display: inline-block; padding-top: 10px; font-family: Arial, Helvetica, sans-serif;">
                    <div style="font-size: 20px; font-weight: bold;">PROVINCE OF PANGASINAN</div>
                    <div style="font-size: 13px; font-weight: regular">Capitol Compound Lingayen Pangasinan</div>
                   
                </div>

    </div>           

    <table style="width:100%; border-collapse: collapse; table-layout: fixed;">

        <!-- Routing Slip Header -->
        <tr>
            <td colspan="13" style="text-align: center; font-weight: bold; font-size: medium;">
                <p >TO PAYMENT</p>
                <p style="vertical-align: bottom; padding-bottom: 0; margin-bottom: 0;">ROUTING SLIP</p>

            </td>
        </tr>

        <!-- Requesting and Liason Office, Time, Date Row -->
        <tr style="vertical-align: top; font-size: medium;" >
            <th style="height: 7%; margin-top: 0; padding-top: 0;"  colspan="3" >REQUESTING OFFICE:</th>
            <th colspan="10">
                <span  style="padding-right: 250px;">LIASON OFFICER:</span>        
                <span  style="padding-right: 160px;">TIME:</span>           
                <span>DATE:</span> 
        </th>
        </tr>

        <!-- Table Headers -->
        <tr style="font-size: medium;" >
            <th rowspan="2" colspan="3">OFFICE</th>
            <th colspan="4">RECEIVED</th>
            <th colspan="4">RELEASED</th>
            <th rowspan="2" colspan="2">REMARKS</th>
        </tr>

        <!-- Table SubHeaders -->
        <tr style="font-size: medium;" >
            <th>DATE</th>
            <th>TIME</th>
            <th colspan="2">NAME</th>
            <th>DATE</th>
            <th>TIME</th>
            <th colspan="2">NAME</th>
        </tr>

        <!-- Officer Rows (Looped) -->
        @php
            $officers = [
                'PHMSO',
                'Budget',
                'Treasury',
                'Provincial Administrator',
                'General Services Officer',
                'Bids and Awards Committee',
                'For resolution (BAC)',
                'For Signature (BAC members)',
                'For Approval (PA/GOV)',
                'Back   to   Requesting   Party CAFOA/VOUCHER',
                'Budget',
                'Accounting',
                'Treasury',
                'Provincial Administrator',
                'Treasury',
                'Accounting',
                'Treasury',
                'Provincial Administrator',
                'Treasury (Release of Cash)',
            ];
        @endphp
        <!-- Loop Data -->
        @foreach ($officers as $officer)
        <!-- Placeholder Data Entry -->
            <tr>
                <td colspan="3" style="font-weight: bold; font-size: small;">{{ $officer }}</td><!-- Office data text fixed -->
                <td></td> <!-- for DATE -->
                <td></td> <!-- for Time -->
                <td colspan="2"></td> <!-- for Name -->
                <td></td> <!-- for DATE -->
                <td></td> <!-- for Time -->
                <td colspan="2"></td> <!-- for Name -->
                <td colspan="2"></td> <!-- for Remarks -->
            </tr>
        @endforeach
    </table>


</body>

</html>