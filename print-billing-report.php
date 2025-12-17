<?php
require('vendor/autoload.php'); // Include FPDF library
include('db/config.php');

// Sanitize job_id to prevent SQL injection
$job_id = mysqli_real_escape_string($conn, base64_decode($_GET['job_id']));

// Fetch data for the job
$query = "SELECT tbl_product.*, user_job_request.*
    FROM tbl_product
    INNER JOIN user_job_request ON tbl_product.job_id = user_job_request.job_id
    WHERE tbl_product.job_id = '$job_id'";
$result = mysqli_query($conn, $query);

// Check if data exists
if (mysqli_num_rows($result) == 0) {
    die("Error: No data found for the specified job ID.");
}

$data = mysqli_fetch_assoc($result);

// Calculate total amount for Project Details
$total_amount = 0;
mysqli_data_seek($result, 0);
while ($row = mysqli_fetch_assoc($result)) {
    $total_amount += floatval($row['product_total_amount'] ?? 0);
}

// Calculate amount after GST
$gst_rate = floatval($data['po_gst'] ?? 0);
$amount_after_gst = $data['po_amount'] * (1 + $gst_rate / 100);

// Create PDF class extending FPDF
class PDF extends FPDF
{
    function Header()
    {
       // Image
$this->Image('assets/img/logo.png', 16, 20, 34); // adjust image size to 20 width

// Set X and Y to align text with the image
$this->SetY(20); // vertical alignment with image
$this->SetX(40); // shift to right of the image

// Set font and write the title
$this->SetFont('Times', 'B', 16);
$this->Cell(130, 10, 'D.V. ELECTRONIC PVT. LTD.', 0, 1, 'C');



// Billing Report Title
$this->SetFont('Times', 'B', 18);
$this->Cell(0, 10, 'Billing Report', 0, 1, 'C');


    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Times', 'I', 8);
        $this->Cell(0, 5, 'Generated on ' . date('F j, Y, g:i a') . ' | Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function SectionHeader($title)
    {
         $this->Ln(2);
        $this->SetFont('Times', 'B', 14);
        $this->Cell(0, 10, $title, 0, 1, 'L');
        $this->Ln(1);
        $this->SetDrawColor(0);
        $this->SetLineWidth(0.2);
        $this->Line($this->GetX(), $this->GetY(), $this->GetX() + 190, $this->GetY());
        $this->Ln(2);
    }

    function KeyValueRow($key1, $value1, $key2 = null, $value2 = null)
    {
        $this->SetFont('Times', 'B', 10);
        $this->Cell(35, 8, $key1, 0, 0);
        $this->SetFont('Times', '', 10);
        $this->Cell(60, 8, mb_strimwidth($value1, 0, 50, '...'), 0, 0);
        if ($key2 && $value2) {
            $this->SetFont('Times', 'B', 10);
            $this->Cell(35, 8, $key2, 0, 0);
            $this->SetFont('Times', '', 10);
            $this->Cell(0, 8, mb_strimwidth($value2, 0, 50, '...'), 0, 1);
        } else {
            $this->Ln();
        }
    }

    function PODetailsTable($data, $amount_after_gst)
    {
        $this->Ln(2);
        $this->SetFont('Times', 'B', 10);
        $this->Cell(47, 8, 'Description', 1, 0, 'C');
        $this->Cell(47, 8, 'Value', 1, 0, 'C');
        $this->Cell(47, 8, 'Description', 1, 0, 'C');
        $this->Cell(47, 8, 'Value', 1, 1, 'C');

        $this->SetFont('Times', '', 10);
        $this->Cell(47, 8, 'Amount', 1, 0, 'C');
        $this->Cell(47, 8, 'Rs. ' . number_format($data['po_amount'] ?? 0, 2), 1, 0, 'C');
        $this->Cell(47, 8, 'GST %', 1, 0, 'C');
        $this->Cell(47, 8, ($data['po_gst'] ?? '') . '%', 1, 1, 'C');

        $this->Cell(47, 8, 'Amount after GST', 1, 0, 'C');
        $this->Cell(47, 8,'Rs. ' . number_format($amount_after_gst, 2), 1, 0, 'C');
        $this->Cell(47, 8, 'Advance', 1, 0, 'C');
        $this->Cell(47, 8,'Rs. ' . number_format($data['advance'] ?? 0, 2), 1, 1, 'C');

        $this->Cell(47, 8, 'Remaining Balance', 1, 0, 'C');
        $this->Cell(47, 8, 'Rs. ' . number_format($data['balance'] ?? 0, 2), 1, 1, 'C');
       
    }

    function ProjectTable($header, $result, $total_amount)
    {
      
        $this->SetFont('Times', 'B', 10);
        $widths = [20, 60, 20, 30, 20, 40];
        foreach ($header as $i => $col) {
            $this->Cell($widths[$i], 8, $col, 1, 0, 'C');
        }
        $this->Ln();
        $this->SetFont('Times', '', 10);
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
            $name = mb_strimwidth($row['product_name'] ?? '', 0, 35, '...');
            $this->Cell($widths[0], 8, $row['serial_no'] ?? '', 1);
            $this->Cell($widths[1], 8, $name, 1);
            $this->Cell($widths[2], 8, $row['product_quantity'] ?? '', 1, 0, 'C');
            $this->Cell($widths[3], 8, 'Rs. ' .number_format($row['product_price'] ?? 0, 2), 1, 0, 'R');
            $this->Cell($widths[4], 8, ($row['product_gst'] ?? '') . '%', 1, 0, 'R');
            $this->Cell($widths[5], 8, 'Rs. ' .number_format($row['product_total_amount'] ?? 0, 2), 1, 0, 'R');
            $this->Ln();
        }
        $this->SetFont('Times', 'B', 10);
        $this->Cell(array_sum($widths) - $widths[5], 8, 'Total', 1, 0, 'R');
        $this->Cell($widths[5], 8, 'Rs. ' .number_format($total_amount, 2), 1, 0, 'R');
       $this->Ln();
    }
}

// Generate PDF
$pdf = new PDF();
$pdf->SetMargins(12, 12, 12 );
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

// Sections
$pdf->SectionHeader('Job Description');
$pdf->KeyValueRow('DVEPL CODE', $data['devel_code'] ?? '', 'Tender ID', $data['j_id'] ?? '');
$pdf->KeyValueRow('CA No.', $data['ca_no'] ?? '');
$pdf->KeyValueRow( 'Name of Work', $data['job_name'] ?? '');

$pdf->SectionHeader('Customer Details');
$pdf->KeyValueRow('Firm Name', $data['name'] ?? '', 'Concern Person Name', $data['name1'] ?? '');
$pdf->KeyValueRow('Email ID', $data['email'] ?? '', 'Phone No.', $data['phone_no'] ?? '');

$pdf->SectionHeader('PO Details');

$pdf->KeyValueRow('PO No.', $data['po_no'] ?? '', 'PO Placed To', $data['po_placed_to'] ?? '');
$pdf->KeyValueRow('PO Ready Date.', $data['po_date'] ?? '', 'Date of Payment', $data['po_payment_date'] ?? '');
$pdf->KeyValueRow('Vendor Phone No.', $data['vendor_phone'] ?? '', 'Vendor Email', $data['vendor_email'] ?? '');


$pdf->PODetailsTable($data, $amount_after_gst);

$pdf->SectionHeader('Project Details');
$header = ['Serial No.', 'Product Name', 'Qty', 'Price', 'GST', 'Total Amount'];
$pdf->ProjectTable($header, $result, $total_amount);

$pdf->SectionHeader('Billing Information');
$pdf->KeyValueRow('Billing Status', $data['billing_status'] ?? '');

// Move to 30 units from the bottom
$pdf->SetY(-45); // adjust this if needed (higher value = moves upward)

// Set font for signature text
$pdf->SetFont('Times', '', 10);


// Add a line for signature
$pdf->Cell(0, 10, '__________________________', 0, 1, 'R');
// Add the label aligned right
$pdf->Cell(0, 10, 'Authorized Signature', 0, 1, 'R');




// Output to browser (inline, new tab)
$pdf->Output('I', "Billing_Report_$job_id.pdf");
?>
