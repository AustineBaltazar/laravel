

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certification of Appropriations</title>
    <style>
        body { font-size: 14px; }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            word-break: break-word;

        }
        .no-border { border: none; }
        .section-title { font-weight: bold; text-align: center; margin-bottom: 5px; }
        .certification { margin-top: 5px; font-size: 13px; }
    </style>
</head>
<body>


     <!-- HEADER SECTION: Appendix Reference -->
     <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix 28</span>
    </div>

    <!-- TITLE HEADER -->
<div style="text-align: center; font-weight: bold;">
    Province of Pangasinan
    <p style="font-size: 21px;">CERTIFICATION OF APPROPRIATIONS, FUNDS AND OBLIGATION OF ALLOTMENT
    </p>
</div>

<table style="width:100%; border-collapse: collapse;">
    <tbody>
        <tr>
            <!-- LEFT SIDE -->
            <td rowspan="5" style="width:50%; vertical-align: top; padding:5px;">
                <!-- Left Column Content -->
                <p style="margin-top:40px; margin-bottom:5px; font-weight: bold;">Request</p>
                <p style="margin:10px 0;">Payee: ______________________</p>
                <table style="width:100%; margin-top:20px; border-collapse: collapse; font-size: 13px;">
                    <thead>
                                <!-- Table headers -->
                        <tr>
                            <th>Function</th>
                            <th>Allotment Class</th>
                            <th>Expense <br>Code</th>
                            <th>Amount</th>
                        </tr>
                    </thead>    
                    <tbody>
                                <!-- Loop Data -->
                        @for ($i = 0; $i < 5; $i++)
                                <!-- Place holder for data entry -->
                        <tr style="text-align:center;">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endfor
                    </tbody>
                    

                </table>

                        <!-- Total, amount in words Signature -->
                    <div style="padding-top: 5px">
                        <p>Total amount requested: ____________________________</p>
                        <p>Amount in Words: _________________________________</p>
                        <p style="margin:5px 0;">________________________________________________</p>
                        <p style="margin:5px 0 10px;">Requesting Official:</p>
                    </div>
                    
                        <!-- Name and Date Signature -->
                    <div style="padding-top: 20px;">
                      <span>____________________________</span>
                      <span>________________</span>
                      <span style="padding-left: 30px">Name and Signature</span>
                      <span style="padding-left: 100px">Date</span>
                    </div>
            </td>

            <!-- OBLIGATION NO. -->
            <td colspan="3" style="padding:0px 5px; height:1px; line-height: 1; vertical-align: middle;">
                <strong>Obligation No.:</strong> 
            </td>
        </tr>

        <!-- APPROVED AMOUNT -->
        <tr>
            <td colspan="3" style="padding:0px 5px; ">
                <strong>Approved Amount:</strong> 
            </td>
        </tr>
    </tbody>

    <!-- LOOP CERTIFICATIONS -->
    <tbody>
        @php
        $certTexts = [
            'I hereby certify as to the existence of appropriations for the expenditures in the amount specified herein:',
            'I hereby certify as to the availability of funds for the expenditures in the amount specified herein:',
            'I hereby certify that the allotments are available for obligation in the amount specified herein:'
        ];
        @endphp

        @foreach ($certTexts as $text)
        
            <!-- LOOP CERTIFICATIONS ENTRY -->
        <tr>
            <td colspan="3" style="padding:5px;">
                <p style="font-weight:bold; font-size:15px;">Certification:</p>
                <p style="margin:5px 0 0;">{{ $text }}</p><!-- LOOP TEXT -->
                <div style="display:flex; justify-content: space-between; align-items:center; width:100%; padding-top:20px;">
                    <span style="padding-right:5px;">____________________________</span><!-- FIRST SIGNATURE -->
                    <span style="padding-left:20px;">________________</span><!-- FOR DATE SIGNATURE -->
                    <span style="padding-left:260px;">Date</span>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

    <!-- SUBSIDIARY LEDGER TABLE HEADER -->
    <tr>
        <td colspan="4" style="font-weight: bold; text-align: center;">Subsidiary Ledger</td>
    </tr>

    <tr>
        <td colspan="4">
            <table style="width:90%; margin-top:10px; border-collapse: collapse; margin-left:auto; margin-right:auto; padding-bottom: 5px;">
                <thead>
                     <!-- Table headers -->
                    <tr>
                        <th>Date</th>
                        <th>Particulars/Reference</th>
                        <th>Liquidations</th>
                        <th>Obligation <br>(Decrease)</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop Data -->

                    @for ($i = 0; $i < 5; $i++)
                    <!-- Place holder for data entry -->
                    <tr>
                        <td style="height:10px;"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
