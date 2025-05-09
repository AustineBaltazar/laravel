<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }

        .pdf-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>OJT TASK</h1>

        <!-- Trigger Buttons -->
        <a href="#" class="btn btn-primary mt-3" data-pdf="{{ url('/pdf/inventory-slip') }}" onclick="showPdf(this)">View Inventory Slip PDF</a>
        <a href="#" class="btn btn-success mt-3" data-pdf="{{ url('/pdf/journal-entry') }}" onclick="showPdf(this)">View Journal Entry PDF</a>
        <a href="#" class="btn btn-warning mt-3" data-pdf="{{ url('/pdf/office-supplies') }}" onclick="showPdf(this)">View Office Supplies PDF</a>
        <a href="#" class="btn btn-secondary mt-3" data-pdf="{{ url('/pdf/pta-rata') }}" onclick="showPdf(this)">View PTA-RATA PDF</a>
        <a href="#" class="btn btn-dark mt-3" data-pdf="{{ url('/pdf/overtime-pay') }}" onclick="showPdf(this)">View Overtime Pay PDF</a>
        <a href="#" class="btn btn-info mt-3" data-pdf="{{ url('/pdf/ppcldo-assistance') }}" onclick="showPdf(this)">View PPCLDO Assistance PDF</a>
        <a href="#" class="btn btn-danger mt-3" data-pdf="{{ url('/pdf/honoraria-bac') }}" onclick="showPdf(this)">View HONORARIA Bac PDF</a>
        <a href="#" class="btn btn-success mt-3" data-pdf="{{ url('/pdf/monetization-leave') }}" onclick="showPdf(this)">View Monetization Leave PDF</a>
        <a href="#" class="btn btn-warning mt-3" data-pdf="{{ url('/pdf/loyalty-pay') }}" onclick="showPdf(this)">View Loyalty Pay PDF</a>
        <a href="#" class="btn btn-secondary mt-3" data-pdf="{{ url('/pdf/release-retention') }}" onclick="showPdf(this)">View Relase Retention PDF</a>
        <a href="#" class="btn btn-dark mt-3" data-pdf="{{ url('/pdf/first-salary') }}" onclick="showPdf(this)">View First Salary PDF</a>
        <a href="#" class="btn btn-info mt-3" data-pdf="{{ url('/pdf/honoraria') }}" onclick="showPdf(this)">View Honoraria PDF</a>
        <a href="#" class="btn btn-danger mt-3" data-pdf="{{ url('/pdf/insurance_expenses') }}" onclick="showPdf(this)">View Insurance Expenses PDF</a>
        <a href="#" class="btn btn-success mt-3" data-pdf="{{ url('/pdf/wmr') }}" onclick="showPdf(this)">View WMR PDF</a>
        <a href="#" class="btn btn-primary mt-3" data-pdf="{{ url('/pdf/rsmi') }}" onclick="showPdf(this)">View RSMI PDF</a>
        <a href="#" class="btn btn-secondary mt-3" data-pdf="{{ url('/pdf/check_register') }}" onclick="showPdf(this)">View Check Register PDF</a>
        <a href="#" class="btn btn-warning mt-3" data-pdf="{{ url('/pdf/iot') }}" onclick="showPdf(this)">View IOT PDF</a>
        <a href="#" class="btn btn-dark mt-3" data-pdf="{{ url('/pdf/cj') }}" onclick="showPdf(this)">View CJ PDF</a>
        <a href="#" class="btn btn-danger mt-3" data-pdf="{{ url('/pdf/checkdj') }}" onclick="showPdf(this)">View CheckDJ PDF</a>
        <a href="#" class="btn btn-primary mt-3" data-pdf="{{ url('/pdf/cashdj') }}" onclick="showPdf(this)">View CashDJ PDF</a>
        <a href="#" class="btn btn-secondary mt-3" data-pdf="{{ url('/pdf/rci38') }}" onclick="showPdf(this)">View RCI 38 PDF</a>
        <a href="#" class="btn btn-info mt-3" data-pdf="{{ url('/pdf/rci46') }}" onclick="showPdf(this)">View RCI 46 PDF</a>
        <a href="#" class="btn btn-primary mt-3" data-pdf="{{ url('/pdf/checkdr') }}" onclick="showPdf(this)">View Check DR PDF</a>
        <a href="#" class="btn btn-warning mt-3" data-pdf="{{ url('/pdf/cafoa') }}" onclick="showPdf(this)">View CAFOA PDF</a>
        <a href="#" class="btn btn-secondary mt-3" data-pdf="{{ url('/pdf/routing_slip') }}" onclick="showPdf(this)">View Routing Slip PDF</a>




    </div>




    <!-- Modal -->
    <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PDF Preview</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfFrame" src="" width="100%" height="600px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>



    <script>
        function showPdf(element) {
            const pdfUrl = element.getAttribute('data-pdf');
            document.getElementById('pdfFrame').src = pdfUrl;
            $('#pdfModal').modal('show');
        }
    </script>










</body>

</html>