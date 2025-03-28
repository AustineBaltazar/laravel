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
}
