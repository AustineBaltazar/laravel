!
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Release of Retention Money</title>
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

                <!-- Left Logo  change width, left, top based on size of logo-->
                <img src="{{ public_path('/../resources/views/pdf/logoos.jpg') }}"
                    style="height: auto; position: absolute; width: 60px;  left: 80; top: 40%; transform: translateY(-50%);">

                <!-- Center Text -->
                <div style="display: inline-block; padding-top: 30px; font-family: Arial, Helvetica, sans-serif">
                    <div style="font-size: 11px; font-weight: regular;">Republic of the Philippines</div>
                    <div style="font-size: 13px; font-weight: bold;">PROVINCE OF PANGASINAN</div>
                    <div style="font-size: 13px; font-weight: bold;">OFFICE OF THE PROVINCIAL ACCOUNTANT</div>
                    <br>
                    <div style="font-size: 14px;">PRE-AUDIT AND REVIEW CHECKLIST for</div>
                    <div style="font-size: 13px; font-weight: bold">HONORARIA</div>
                    <div style="font-size: 14px; font-weight: regular; font-style: italic;">(Please arrange documents according to checklist)</div>
                </div>

                <!-- Right Logo  change width, left, top based on size of logo-->
                <img src="{{ public_path('/../resources/views/pdf/logoos.jpg') }}"
                    style="height: auto; position: absolute; width: 60px;  right: 80; top: 40%; transform: translateY(-50%);">


                <!--payee/amount-->
                <div style="font-family:Arial, Helvetica, sans-serif; display: flex; font-style:italic; font-weight:100; padding-bottom: 3px; font-weight:normal; align-items: center; justify-content: space-between; width: 100%;">
                    <span>Payee:______________________________________</span>
                    <span>Amount: ________________</span>
                </div>

                <div style="margin-top: 10px; font-weight: bold; font-family: Arial, Helvetica, sans-serif">
                    <span>HONORARIA - Rsource Person/Coordinator/Facilitator</span>
                </div>

            </td>
        </tr>


        <!-- first text loop-->
        @php
        $loopTexts = [
        'Office Order for their designation with authority to collect honorarium',
        'Authority to Conduct the Training/Seminar and the participants',
        'Course Outline/Program',
        'Copy of the Letter/Invitation to Guest Resource Speaker/Persons(as accepted/conformed)',
        'Certification issued by the Chief Accountant that the amounts received by the recepient/s do not exceed the limits pursuant to DBM BC No. 2007-001 dated April 23, 2007 and any future amendments thereof',
        'Other documents peculliar to the claim that are considered necessary',


        ];
        @endphp

        @foreach ($loopTexts as $text)
        <tr>
            <td style="width: 15%; font-size: 20px; text-align: center;"></td> <!-- first blank table for checkbox-->
            <td colspan="3" style="text-align: left; height: 2%; font-size: 15px; font-family: Arial, Helvetica, sans-serif">
                {{ $text }} <!--first text box -->
            </td>
        </tr>
        @endforeach


        <!--second row box -->
        <tr>
            <td colspan="4" style="font-size: 15px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; padding-top: 10px">HONORARIA - Special Projects</td>
        </tr>

        <!-- second text loop-->
        @php
        $loop2Texts = [
        'Office Order for the creation of the Special Project Team',
        'Special Project Plan',
        'Terms of Reference',
        'Accomplishment Report/Certificate of Completion of project deliverable',
        'Certificate of acceptance by the Agency Head of the deliverable per project component',
        'Certification issued by the Chief Accountant that the amounts received by the recipient/s do not exceed 25% of the annual basic salaries pursuant to DBM BC No. 2007-2 dated October 1, 2007 and any future amendments thereof',
        'Other documents peculliar to the claim that are considered necessary',


        ];
        @endphp

        @foreach ($loop2Texts as $text)
        <tr>
            <td style="width: 15%; font-size: 20px; text-align: center;"></td> <!-- second blank table for checkbox-->
            <td colspan="3" style="text-align: left; height: 2%; font-size: 15px; font-family: Arial, Helvetica, sans-serif">
                {{ $text }} <!--second text box -->
            </td>
        </tr>
        @endforeach




        <tr>
            <td colspan="4" style="font-size: 15px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; padding-top: 10px">HONORARIA - Science and Technological Activities</td>
        </tr>

        <!-- third text loop-->
        @php
        $loop3Texts = [
        'Office Order or Authority to collect honoraria',
        'Plan/Program of Activities with specific deliverables/project output',
        'Accomplishment Report/Certificate of Completion of project deliverables',
        'Certificate of acceptance by the Agency Head of the deliverables per project component',
        'Certification issued by the Chief Accountant that the amounts received by the recipient/s do not exceed 25% of the annual basic salaries pursuant to Section 4.3 on Honoraria Rates of DBM-DOST Joint Circular No. 01, s. 2013 dated June 25, 2013 and any future amendments thereof',
        'Other documents peculliar to the claim that are considered necessary',


        ];
        @endphp

        @foreach ($loop3Texts as $text)
        <tr>
            <td style="width: 15%; font-size: 20px; text-align: center;"></td> <!--third blank table for checkbox-->
            <td colspan="3" style="text-align: left; height: 2%; font-size: 15px; font-family: Arial, Helvetica, sans-serif">
                {{ $text }} <!--third text box -->
            </td>
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