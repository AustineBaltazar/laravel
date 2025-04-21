    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> WASTE MASTERIALS REPORT </title>
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
            <span style="font-style: italic; font-size: 13px;">Appendix 68</span>
        </div>
        <table style="width:100%; table-layout: fixed; padding-top: 15px">
            <tr>
                <!--  (HEADER) -->
                <td colspan="25" style="text-align: center; font-weight: bold; font-size: 1.2rem; padding-top: 10px; ">
                    WASTE MASTERIALS REPORT
                    <div style="display: flex; justify-content: space-between;  font-weight: normal; margin-top: 10px; align-items: flex-start;">
                        <!-- (LGU, Fund in line) -->
                        <div style="text-align: left; padding-top: 20px; width: 100%; font-size: 13px">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 5px; padding-bottom: 3px;">
                                <span style="margin: 0;">
                                    <strong>LGU:</strong>
                                    <span style="display: inline-block; border-bottom: 1px solid #000; width: 250px; padding-left: 5px;">
                                        <!-- (Placeholder for LGU) -->
                                    </span>
                                </span>

                                <span style="padding-left: 180px">
                                    <strong>Fund:</strong>
                                    <span style="display: inline-block; border-bottom: 1px solid #000; width: 100px; padding-left: 10px;">
                                        <!-- (Placeholder for FUND) -->
                                    </span>
                                </span>
                            </div>
                        </div>


                    </div>

                </td>
            </tr>

            <!-- ( Place of Storage and Date in line) -->
            <tr>
                <td colspan="25">
                    <div style="text-align: left; padding-top: 5px; width: 100%; font-size: 13px">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding-bottom: 5px;">
                            <span style="margin: 0;">
                                <strong>Place of Storage:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 250px; padding-left: 5px;">
                                    <!-- (Placeholder for PLACE OF STORAGE) -->
                                </span>
                            </span>

                            <span style="padding-left: 120px;">
                                <strong>Date:</strong>
                                <span style="display: inline-block; border-bottom: 1px solid #000; width: 100px; padding-left: 5px;">
                                    <!-- (Placeholder for DATE) -->
                                </span>
                            </span>
                        </div>
                    </div>

                </td>
            </tr>

            <!-- (Header) -->
            <tr>
                <td colspan="25" style="padding-top: 10px; font-weight: bold; font-size: 13px">
                    ITEMS FOR DISPOSAL
                </td>
            </tr>

            <!-- Table Header -->
            <tr style="text-align: center; font-weight: bold; font-size: 13px">
                <td rowspan="3" colspan="3">Item</td>
                <td rowspan="3" colspan="3">Quantity</td>
                <td rowspan="3" colspan="3">Unit</td>
                <td rowspan="3" colspan="7">Description</td>
                <td rowspan="1" colspan="9">Record of Sales</td>

            </tr>

            <!-- Table Header -->
            <tr style="text-align: center;  font-size: 13px; font-weight: bold;">
                <td colspan="9">Official Receipt</td>
            </tr>

            <!-- Table Header -->
            <tr style="text-align: center;  font-size: 13px; font-weight: bold;">
                <td colspan="3">No.</td>
                <td colspan="3">Date</td>
                <td colspan="3">Amount</td>
            </tr>


            <!-- Loop to create rows with blank placeholders for data entry -->
            @for ($i = 0; $i < 10; $i++)

                <tr style="text-align: center; font-size: 13px;">
                <td colspan="3" style=" padding: 5px; width: 10%;"></td> <!-- data for item -->
                <td colspan="3" style="  padding: 5px; width: 15%;"></td> <!-- data for quantity -->
                <td colspan="3" style="  padding: 5px; width: 15%;"></td> <!-- data for unit -->
                <td colspan="7" style="  padding: 5px; width: 30%;"></td> <!-- data for description -->
                <td colspan="3" style="  padding: 5px; width: 10%;"></td> <!-- data for no. -->
                <td colspan="3" style="  padding: 5px; width: 15%;"></td> <!-- data for date -->
                <td colspan="3" style="  padding: 5px; width: 15%;"></td> <!-- data for amount -->
                    </tr>
                    @endfor

                    <!-- data loop continue -->
                    <tr style="text-align: center; font-size: 13px; font-weight: bold;">
                        <td colspan="3"></td> <!-- Total item-->
                        <td colspan="3"></td> <!-- Total quantity-->
                        <td colspan="3"></td> <!-- Total unit-->
                        <td colspan="7">Total</td> <!-- Total data-->
                        <td colspan="3"></td> <!-- Total no-->
                        <td colspan="3"></td> <!-- Total date-->
                        <td colspan="3"></td> <!-- Total amount-->
                    </tr>


                    <!-- Certified and Disposal Header -->
                    <tr>
                        <td colspan="12" style=" text-align: center; font-size: 13px; vertical-align: top; padding-bottom: 10px;">
                            <div>
                                <div style="text-align: left;"><strong>Certified Correct :</strong></div>
                                <br>
                                <div>__________________________</div>
                                <div>Signature over Printed Name of Supply
                                    <br>
                                    and/or Property Custodian
                                </div>
                            </div>
                        </td>

                        <td colspan="13" style=" text-align: center; font-size: 13px; vertical-align: top;">
                            <div>
                                <div style="text-align: left;"><strong>Disposal Approved :</strong></div>
                                <br>
                                <div>__________________________</div>
                                <div>Signature over Printed Name of Head of the
                                    <br>
                                    Agency/Entity or his/her Authorized Representative
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- COI Header -->
                    <tr style="text-align: center; font-weight: bold; font-size: 13px; padding-top: 10px;">
                        <td colspan="25">CERTIFICATION OF INSPECTION</td>
                    </tr>

                    <!-- Certification statement for property disposal options -->
                    <tr>
                        <td colspan="25">
                            <p style="margin-left: 50px; font-size: 13px;"> I hereby certify that the property enumerated above was disposed of as follows:</p>
                            <div style="margin-left: 100px; padding-bottom: 10px; font-size: 13px">
                                <p style="margin: 1px; padding: 1px;">Item _______ Destroyed</p>
                                <p style="margin: 1px; padding: 1px;">Item _______ Sold at private sale</p>
                                <p style="margin: 1px; padding: 1px;">Item _______ Sold at public auction</p>
                                <p style="margin: 1px; padding: 1px;">Item _______ Transferred without cost to <u>(Name of the Agency/Entity)</u></p>
                            </div>

                        </td>
                    </tr>


                    <!-- Signatory section: Certified correct by Inspection Officer -->
                    <tr>
                        <td colspan="12" style=" text-align: center; font-size: 13px; vertical-align: top; padding-bottom: 10px;">
                            <div>
                                <div style="text-align: left;"><strong>Certified Correct :</strong></div>
                                <br>
                                <div>__________________________</div>
                                <div>Signature over Printed Name of
                                    <br>Inspection Officer
                                </div>
                            </div>
                        </td>

                        <!-- Signatory section: Witness of Disposal -->
                        <td colspan="13" style=" text-align: center; font-size: 13px; vertical-align: top;">
                            <div>
                                <div style="text-align: left;"><strong>Witness of Disposal :</strong></div>
                                <br>
                                <div>__________________________</div>
                                <div>Signature over Printed Name of
                                    <br> Witness

                                </div>
                            </div>
                        </td>
                    </tr>
        </table>
    </body>

    </html>