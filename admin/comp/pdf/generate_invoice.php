<?php
date_default_timezone_set('America/Chicago');

require(dirname(__FILE__) . "/fpdf.php");

$BLUE_PRICE_INPERSON = 80;
$GOLD_PRICE_INPERSON = 60;
$EAGLE_PRICE_INPERSON = 60;

$BLUE_PRICE_VIRTUAL = 60;
$GOLD_PRICE_VIRTUAL = 50;
$EAGLE_PRICE_VIRTUAL = 50;
/* 
    Page Size 210x297
*/

class Invoice extends FPDF {

    function __construct($data) {
        parent::__construct();

        $this->sname = $data['sname'];
        $this->cname = $data['cname'];
        $this->saddl1 = $data['saddl1'];
        $this->saddl2 = $data['saddl2'];
        $this->scity = $data['scity'];
        $this->szip = $data['szip'];
        $this->blue_inperson = $data['blue_inperson'];
        $this->gold_inperson = $data['gold_inperson'];
        $this->eagle_inperson = $data['eagle_inperson'];
        $this->blue_virtual = $data['blue_virtual'];
        $this->gold_virtual = $data['gold_virtual'];
        $this->eagle_virtual = $data['eagle_virtual'];

        $this->AddPage();
        $this->SetLeftMargin(20);
        $this->PrintReturn();
        $this->PrintInvoiceTo();
        $this->PrintBody();
        $this->PrintTable();
    }
    
    function Header() {
        $header_text = file_get_contents(dirname( __FILE__ ) . "/data/header.txt");
        
        $this->SetFont('Helvetica');
        $this->SetFontSize(10);
        $this->SetTextColor(0, 0, 119);

        $w = $this->GetStringWidth($header_text)+6;
        $this->SetX((210-$w)/2);

        $this->Cell($w,15,$header_text,0,1,'C');
        
        $this->SetDrawColor(0, 0, 119);
        $this->SetLineWidth(0.25);
        $this->Line(12.5, 20, 198, 20);
        
        $iw = 48; // Image Width
        $this->Image(dirname( __FILE__ ).'/mu.png', (210-$iw)/2, 21, $iw, 0);
    }

    function Footer() {
        $footer_text = file_get_contents(dirname( __FILE__ ) . "/data/footer.txt");
        
        $this->SetDrawColor(0, 0, 119);
        $this->SetLineWidth(0.25);
        $this->Line(12.5, 280, 198, 280);
        
        $this->SetFont('Arial','',8);
        $this->SetXY(15, -15);
        $w = $this->GetStringWidth($footer_text)+6;
        $this->SetX((210-$w)/2);
        $this->Cell($w, 5, $footer_text, 0, 1, 'C');
    }

    function PrintReturn() {
        $txt = file_get_contents(dirname( __FILE__ ) . "/data/returnaddress.txt");
        $txt .= "\n" . date("F d, o"); // Add on current date

        $this->SetFont('Times', '', 12);
        $this->SetXY(140.5, 38.5);
        $this->MultiCell(0, 4.75, $txt);
        $this->Ln(5.75);
    }

    function PrintInvoiceTo() {

        $invoiceto = $this->cname . "\n";
        $invoiceto .= $this->sname . "\n";
        $invoiceto .= $this->saddl1 . "\n";
        if ($this->saddl2 != '')
            $invoiceto .= $this->saddl2 . "\n";
        $invoiceto .= $this->scity . ", WI ";
        $invoiceto .= $this->szip;

        $this->SetFont('Times', 'B', 12);
        $this->MultiCell(0, 4.5, "Invoice To:");
        $this->SetFont('', '');
        $this->MultiCell(0, 4.5, $invoiceto);
        $this->Ln(12);
    }

    function PrintBody() {
        $body_text = file_get_contents(dirname( __FILE__ ) . "/data/body.txt");

        $this->MultiCell(160, 4.5, $body_text);
        $this->Ln(10);
        $this->SetX(90);

        // Signature
        $this->MultiCell(0, 5, "Best Regards,");
        $this->Ln(3);
        $this->SetX(90);
        $this->MultiCell(0, 5, "Dennis W. Brylow, Ph.D");
        
        $this->Ln(18);
        $this->Write(5, "Please make payment to ", 0, 0);
        $this->SetFont('', 'B');
        $this->Write(5, "Marquette University", 0, 0);
        $this->SetFont('', '');
        $this->Write(5, " and send to:", 0, 1);
        $this->Ln(9);

        $address_text = file_get_contents(dirname( __FILE__ ) . "/data/address.txt");
        $this->MultiCell(0, 5, $address_text);
        $this->Ln(3);
    }

    function HR() {
        $this->SetLineWidth(0.1);
        $this->Ln(1);
        $this->Line($this->GetX(), $this->GetY(), 206-$this->GetX(), $this->GetY());
    }

    function PrintTable() {
        global $BLUE_PRICE_INPERSON, $GOLD_PRICE_INPERSON, $EAGLE_PRICE_INPERSON, $BLUE_PRICE_VIRTUAL, $GOLD_PRICE_VIRTUAL, $EAGLE_PRICE_VIRTUAL;

        $this->HR();
        $this->Cell(78, 5, "Description of Service");
        $this->Cell(16, 5, "Quantity", 0, 0, 'R');
        $this->Cell(38, 5, "Unit Price", 0, 0, 'R');
        $this->Cell(32, 5, "Amount", 0, 0, 'R');
        $this->Ln(5);
        $this->HR();

        $total = 0;
        if ($this->blue_inperson > 0) {
            $quantity = $this->blue_inperson;
            $unit_price = number_format($BLUE_PRICE_INPERSON, 2);
            $amount = number_format($quantity * $BLUE_PRICE_INPERSON, 2);
            $total += $amount;
            $this->HR();
            $this->Ln(0.5);
            $this->Cell(78, 6, "Team Registration, Blue Division (in-person)");
            $this->Cell(16, 6, $quantity, 0, 0, 'R');
            $this->Cell(38, 6, "$$unit_price", 0, 0, 'R');
            $this->Cell(32, 6, "$$amount", 0, 0, 'R');
            $this->Ln(6);
            $this->HR();
        }

        if ($this->gold_inperson > 0) {
            $quantity = $this->gold_inperson;
            $unit_price = number_format($GOLD_PRICE_INPERSON, 2);
            $amount = number_format($quantity * $GOLD_PRICE_INPERSON, 2);
            $total += $amount;
            $this->HR();
            $this->Ln(0.5);
            $this->Cell(78, 6, "Team Registration, Gold Division (in-person)");
            $this->Cell(16, 6, $quantity, 0, 0, 'R');
            $this->Cell(38, 6, "$$unit_price", 0, 0, 'R');
            $this->Cell(32, 6, "$$amount", 0, 0, 'R');
            $this->Ln(6);
            $this->HR();
        }

        if ($this->eagle_inperson > 0) {
            $quantity = $this->eagle_inperson;
            $unit_price = number_format($EAGLE_PRICE_INPERSON, 2);
            $amount = number_format($quantity * $EAGLE_PRICE_INPERSON, 2);
            $total += $amount;
            $this->HR();
            $this->Ln(0.5);
            $this->Cell(78, 6, "Team Registration, Eagle Division (in-person)");
            $this->Cell(16, 6, $quantity, 0, 0, 'R');
            $this->Cell(38, 6, "$$unit_price", 0, 0, 'R');
            $this->Cell(32, 6, "$$amount", 0, 0, 'R');
            $this->Ln(6);
            $this->HR();
        }

        if ($this->blue_virtual > 0) {
            $quantity = $this->blue_virtual;
            $unit_price = number_format($BLUE_PRICE_VIRTUAL, 2);
            $amount = number_format($quantity * $BLUE_PRICE_VIRTUAL, 2);
            $total += $amount;
            $this->HR();
            $this->Ln(0.5);
            $this->Cell(78, 6, "Team Registration, Blue Division (virtual)");
            $this->Cell(16, 6, $quantity, 0, 0, 'R');
            $this->Cell(38, 6, "$$unit_price", 0, 0, 'R');
            $this->Cell(32, 6, "$$amount", 0, 0, 'R');
            $this->Ln(6);
            $this->HR();
        }

        if ($this->gold_virtual > 0) {
            $quantity = $this->gold_virtual;
            $unit_price = number_format($GOLD_PRICE_VIRTUAL, 2);
            $amount = number_format($quantity * $GOLD_PRICE_VIRTUAL, 2);
            $total += $amount;
            $this->HR();
            $this->Ln(0.5);
            $this->Cell(78, 6, "Team Registration, Gold Division (virtual)");
            $this->Cell(16, 6, $quantity, 0, 0, 'R');
            $this->Cell(38, 6, "$$unit_price", 0, 0, 'R');
            $this->Cell(32, 6, "$$amount", 0, 0, 'R');
            $this->Ln(6);
            $this->HR();
        }

        if ($this->eagle_virtual > 0) {
            $quantity = $this->eagle_virtual;
            $unit_price = number_format($EAGLE_PRICE_VIRTUAL, 2);
            $amount = number_format($quantity * $EAGLE_PRICE_VIRTUAL, 2);
            $total += $amount;
            $this->HR();
            $this->Ln(0.5);
            $this->Cell(78, 6, "Team Registration, Eagle Division (virtual)");
            $this->Cell(16, 6, $quantity, 0, 0, 'R');
            $this->Cell(38, 6, "$$unit_price", 0, 0, 'R');
            $this->Cell(32, 6, "$$amount", 0, 0, 'R');
            $this->Ln(6);
            $this->HR();
        }

        $total = number_format($total, 2);
        $this->SetFont('', 'B');
        $this->HR();
        $this->Ln(1);
        $this->Cell(78, 7, "Balance Due");
        $this->Cell(86, 7, "$$total", 0, 0, 'R');
        $this->Ln(7);
        $this->HR();
    }
}
?>