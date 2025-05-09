<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generateInventoryPDF()
    {
        $pdf = Pdf::loadView('pdf.inventory_slip');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateJournalEntryPDF()
    {
        $pdf = Pdf::loadView('pdf.journal_entry');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateOfficeSuppliesPDF()
    {
        $pdf = Pdf::loadView('pdf.office_supplies');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generatePtaRataPDF()
    {
        $pdf = Pdf::loadView('pdf.pta_rata');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateOvertimePayPDF()
    {
        $pdf = Pdf::loadView('pdf.overtime_pay');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }
    public function generatePPCLDOAssistancePDF()
    {
        $pdf = Pdf::loadView('pdf.ppcldo_assistance');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }
    public function generateHONORARIABacPDF()
    {
        $pdf = Pdf::loadView('pdf.honoraria_bac');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateMonetizationLeavePDF()
    {
        $pdf = Pdf::loadView('pdf.monetization_leave');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateLoyaltyPayPDF()
    {
        $pdf = Pdf::loadView('pdf.loyalty_pay');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateReleaseRetentionPDF()
    {
        $pdf = Pdf::loadView('pdf.release_retention');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }


    public function generateFirstSalaryPDF()
    {
        $pdf = Pdf::loadView('pdf.first_salary');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateHonorariaPDF()
    {
        $pdf = Pdf::loadView('pdf.honoraria');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateInsuranceExpensesPDF()
    {
        $pdf = Pdf::loadView('pdf.insurance_expenses');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateWMRPDF()
    {
        $pdf = Pdf::loadView('pdf.wmr');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateRSMIPDF()
    {
        $pdf = Pdf::loadView('pdf.rsmi');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateCheckRegisterPDF()
    {
        $pdf = Pdf::loadView('pdf.check_register');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateIOTPDF()
    {
        $pdf = Pdf::loadView('pdf.iot');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateCJPDF()
    {
        $pdf = Pdf::loadView('pdf.cj')
            ->setPaper('a4', 'landscape'); // <-- This sets A4 landscape

        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }


    public function generateCheckDJPDF()
    {
        $pdf = Pdf::loadView('pdf.checkdj')
            ->setPaper('a4', 'landscape'); // <-- This sets A4 landscape

        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateCashDJPDF()
    {
        $pdf = Pdf::loadView('pdf.cashdj')
            ->setPaper('a4', 'landscape'); // <-- This sets A4 landscape

        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateRCI38PDF()
    {
        $pdf = Pdf::loadView('pdf.rci38');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateRCI46PDF()
    {
        $pdf = Pdf::loadView('pdf.rci46')
            ->setPaper('a4', 'landscape'); // <-- This sets A4 landscape

        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateCheckDRPDF()
    {
        $pdf = Pdf::loadView('pdf.checkdr');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateCafoaPDF()
    {
        $pdf = Pdf::loadView('pdf.cafoa');
        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }

    public function generateRoutingSlipPDF()
    {
        $pdf = Pdf::loadView('pdf.routing_slip')
            ->setPaper('a4', 'landscape'); // <-- This sets A4 landscape

        return response($pdf->output())
            ->header('Content-Type', 'application/pdf');
    }
}
