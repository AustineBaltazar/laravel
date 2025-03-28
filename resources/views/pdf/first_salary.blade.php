!
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Salary/Pera/And Other Benefits Claim</title>
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

                <!-- Left Logo  change width, left, top based on size of logo -->
                <img src="{{ public_path('/../resources/views/pdf/logoos.jpg') }}"
                    style="height: auto; position: absolute; width: 60px;  left: 80; top: 40%; transform: translateY(-50%);">

                <!-- Center Text -->
                <div style="display: inline-block; padding-top: 30px; font-family: Arial, Helvetica, sans-serif">
                    <div style="font-size: 11px; font-weight: regular;">Republic of the Philippines</div>
                    <div style="font-size: 13px; font-weight: bold;">PROVINCE OF PANGASINAN</div>
                    <div style="font-size: 13px; font-weight: bold;">OFFICE OF THE PROVINCIAL ACCOUNTANT</div>
                    <br>
                    <div style="font-size: 14px;">PRE-AUDIT AND REVIEW CHECKLIST for</div>
                    <div style="font-size: 13px; font-weight: bold">FISRT SALARY/PERA/AND OTHER BENEFITS CLAIM</div>
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
            </td>
        </tr>


        <!-- first text loop-->
        @php
        $warrantyTexts = [
        'Certificate of Appointment duly attested by the CSC or its equivalent, Regular employee',
        'Certified copy of the pertinent contract/appointment, Casual/Contractual/COS/JO',
        'Assignment/Re-Assignment Order, if applicable',
        'Certified true copy of Oath of Office, Regular/Casual employee',
        'Certificate of Assumption, Regular/Casual/Contractual/COS/JO',
        'Statement of Assets, Liabilities and Net Worth (SALN), Regular/Casual employee',
        'Approved Daily Time Record (DTR), Regular/Casual/Contractual/COS/JO',
        'Approved Application for Leave (if any, CTC) and Medical Certificate if on sick leave for above five days or more and Clearance if on leave for 30 days or more, if applicable',
        'Travel Orders (if any, CTC if not original)',
        'Pass Slip/Approved CTO (if any, CTC if not original)',
        'BIR withholding certificate, Regular/Casual/COS/JO',
        'Payroll Information on New Employee (PINE) or any equivalent document, Regular employee',
        'Authority from the claimant and identification documents, if claimed by person other than the payee, Regular employee',
        'Certification by the LCE/Personnel Officer that the activities and services cannot be provided by regular or permanent personnel of the agency, Casual/Contractual',
        'Other documents peculliar to the claim that are considered necessary',

        ];
        @endphp

        @foreach ($warrantyTexts as $text)
        <tr>
            <td style="width: 15%; font-size: 20px; text-align: center;"></td> <!--first blank table for checkbox-->
            <td colspan="3" style="text-align: left; height: 2%; font-size: 14px; font-family: Arial, Helvetica, sans-serif">
                {{ $text }} <!--first text box -->
            </td>
        </tr>
        @endforeach

        <!--blank box fixed -->
        <tr>
            <td colspan="4" style="height: 5px;"></td>
        </tr>

        <!-- header of text loop and blank table-->
        <tr>
            <td colspan="4" style="font-size: 15px; font-weight: bold; font-family: Arial, Helvetica, sans-serif">Additional Requirements for transferee (government-to-government)</td>
        </tr>

        <!-- second text loop-->

        @php
        $loopTexts = [
        'Clearances from money, property and legal accountabilities from the previous office',
        'Certified copy of paid disbursement voucher of last salary received and/or Certification by the Chief Accountant for the breakdown of last salary received and remittance of statutory deductions from previous office',
        'Certificate of leave credits',
        'Service Record',
        'BIR Certificate of Compensation Payment/Tax Withheld',
        'Approved/paid HDMF (Pag-Ibig) and PhilHealth Forms',
        'Other documents peculiar to the claim that are considered necessary',


        ];
        @endphp

        @foreach ($loopTexts as $text)
        <tr>
            <td style="width: 15%; font-size: 20px; text-align: center;"></td> <!-- second blank table for checkbox-->
            <td colspan="3" style="text-align: left; height: 2%; font-size: 15px; font-family: Arial, Helvetica, sans-serif">
                {{ $text }} <!--second text box -->
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