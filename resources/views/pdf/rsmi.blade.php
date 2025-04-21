<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT OF SUPPLIES AND MATERIALS ISSUED</title>
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


    <div style="text-align: right;">
        <span style="font-style: italic; font-size: 13px;">Appendix 40</span>
    </div>
    <table style="width:100%; table-layout: fixed; padding-top: 15px">
        <tr>
            <!-- (HEADER) -->
            <td colspan="26" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px;">
                REPORT OF SUPPLIES AND MATERIALS ISSUED
                <br>
                <span style="font-size: 15px;">For the Period_______________to____________, 20______</span>
                <div style="display: flex; justify-content: space-between; font-size: small; font-weight: normal; margin-top: 10px; align-items: flex-start;">
                    <!-- (LGU, Serial No in line) -->
                    <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                        <div style="display: flex; justify-content: space-between; align-items: center; font-size: 13px; margin-bottom: 5px;">
                            <span>
                                <strong>LGU:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 200px; padding-left: 5px;">
                                    <!-- (Placeholder for LGU) -->
                                </span>
                            </span>

                            <span style="padding-left: 200px;">
                                <strong>Serial No :</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 130px; padding-left: 5px;">
                                    <!-- (Placeholder for SERIAL NO.) -->
                                </span>
                            </span>
                        </div>

                        <!-- FUND/DATE LINE -->
                        <div style="display: flex; justify-content: space-between; align-items: center; font-size: 13px;">
                            <span>
                                <strong>Fund:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 200px; padding-left: 5px;">
                                    <!-- (Placeholder for FUND) -->
                                </span>
                            </span>

                            <span style="padding-left: 200px;">
                                <strong>Date :</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 150px; padding-left: 5px;">
                                    <!-- (Placeholder for DATE) -->
                                </span>
                            </span>
                        </div>

                    </div>
                </div>
            </td>
        </tr>

        <!-- (Text Header ) -->
        <tr style="font-size: 14px; font-style:italic; text-align: center;">
            <td colspan="16">To be filled up by the Supply and/or Property Division/Unit</td>
            <td colspan="10">To be filled up by Accounting Division/Unit</td>
        </tr>

        <!-- Table headers -->
        <tr style="font-size: 13px;">
            <th colspan="2">RIS No.</th>
            <th colspan="3">Responsibility Center Code</th>
            <th colspan="3">Stock No.</th>
            <th colspan="3">Item</th>
            <th colspan="2">Unit</th>
            <th colspan="3">Quantity Issued</th>
            <th colspan="5">Unit Cost</th>
            <th colspan="5">Amount</th>
        </tr>


        <!-- Loop to create rows with blank placeholders for data entry -->
        @for ($i = 0; $i < 5; $i++)

            <tr style="font-size: 13px;">
            <td colspan="2"></td><!-- (data for RIS NO) -->
            <td colspan="3"></td><!-- (data for Responsibility Code) -->
            <td colspan="3"></td><!-- (data for Stock No) -->
            <td colspan="3"></td><!-- (data for Item) -->
            <td colspan="2"></td><!-- (data for Unit) -->
            <td colspan="3"></td><!-- (data for Quantity Issued) -->
            <td colspan="5"></td><!-- (data for Unit Cost) -->
            <td colspan="5"></td><!-- (data for Amount) -->

            </tr>
            @endfor

            <tr style="font-size: 13px;">
                <td colspan="2"></td> <!-- (continue first loop data for RIS NO) -->
                <th colspan="6" class="bold">Recapitulation:</th> <!-- (fixed received by dont change -->
                <td colspan="3"></td> <!-- (continue first loop data for ITEM) -->
                <td colspan="2"></td> <!-- (continue first loop data for UNIT) -->
                <th colspan="13" class="bold">Recapitulation:</th> <!-- (fixed received by dont change) -->

            </tr>


            <tr style="font-size: 13px;">
                <td colspan="2"></td> <!-- (continue first loop data for RIS NO) -->
                <th colspan="3">Stock No.</th> <!-- (fixed Stock no. dont change) -->
                <th colspan="3">Quantity</th> <!-- (fixed date dont change) -->
                <td colspan="3"></td> <!-- (continue first loop data for ITEM) -->
                <td colspan="2"></td> <!-- (continue first loop data for UNIT) -->
                <td colspan="3" style="text-align:center; font-weight: bold;">Unit Cost</td> <!-- (fixed unit cost change) -->
                <td colspan="5" style="text-align:center; font-weight: bold;">Total Cost</td> <!-- (fixed total cost change) -->
                <td colspan="5" style="text-align:center; font-weight: bold;">Account Code</td> <!-- (fixed acount code dont change) -->


            </tr>
            <tr style="font-size: 13px;">
                <td colspan="2"></td> <!-- (continue first loop data for RIS NO) -->
                <th colspan="3"></th> <!-- (data for Stock no) -->
                <th colspan="3"></th> <!-- (data for date) -->
                <td colspan="3"></td> <!-- (continue first loop data for ITEM) -->
                <td colspan="2"></td> <!-- (continue first loop data for UNIT) -->
                <td colspan="3"></td> <!-- (data for unit cost) -->
                <td colspan="5"></td> <!-- (data for Total Cost) -->
                <td colspan="5"></td> <!-- (data for Acount code) -->
            </tr>

            <!--FOOTER HEADER -->
            <tr>
                <td colspan="13">
                    <div style="font-size: 13px; text-align: center;">
                        <p>I hereby certify to the correctness of the above information</p>
                        <span>______________________________________________</span>
                        <p>Signature Over Printed Name of Supply <br>
                            and/or Property Custodian</p>
                    </div>

                </td>

                <td colspan="13">
                    <div style="font-size: 13px">
                        <p style="text-align: left; vertical-align: top; padding-bottom: 10x; ">Posted By:</p>
                        <span style="padding-left: 5px;">_____________________________</span>
                        <span style="padding-left: 8px; padding-bottom: 10%;">_______________</span><br>
                        <span style="display: inline-block; text-align: center; padding-left: 20px; padding-top: 25px;">
                            Signature over Printed Name of<br>
                            Designation Accounting Staff
                        </span>
                        <span style="display: inline-block; text-align: center; padding-left: 50px;">
                            Date
                        </span>
                    </div>

                </td>
            </tr>


    </table>

</body>

</html>