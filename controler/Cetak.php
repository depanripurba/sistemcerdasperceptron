<?php
require_once('./core/fpdf/fpdf.php');
require_once('model/Kerusakanmodel.php');
require_once('model/Gejalamodel.php');

class PDF extends FPDF
{
	public $name = BASE_URL . "controler/logo.png";
	public function Header()
	{
		$this->SetTextColor(0, 0, 0);
		$this->SetFont('Arial', 'B', 15);
		$this->Image($this->name, 10, 5, 20, 20);
		$this->Cell(0, 10, 'Sistem Cerdas Mendiagnosa Kerusakan Mesin Fotocopy', 0, 0, 'C');
		$this->SetFont('Arial', 'BI', 15);
		$this->Ln(6);
		$this->Cell(200 - 20, 10, 'Canon IR 6020', 0, 0, 'C');
		$this->SetFont('Arial', 'B', 12);
		$this->SetFont('');
		$this->Ln(6);
		$this->Cell($this->GetPageWidth() - 20, 10, 'Email: depanripurba@gmail.com', 0, 0, 'C');
		$this->Ln(6);
		$this->Cell($this->GetPageWidth() - 20, 10, 'depanri purba, JST, Perceptron, Canon IR 6020, Skripsi, Triguna Dharma Medan', 0, 0, 'C');
		$this->SetLineWidth(0.1);
		$this->line(0, 36, $this->GetPageWidth(), 36);
		$this->SetLineWidth(0.5);
		$this->line(0, 37, $this->GetPageWidth(), 37);
		$this->Ln(15);
	}

	public function Footer()
	{
		$this->SetY(-15);
		$this->SetTextColor(0, 0, 0);
		// Select Arial italic 8
		$this->SetFont('Arial', 'I', 8);
		// Print centered page number
		$this->Cell(0, 10, 'Halaman ' . $this->PageNo(), 0, 0, 'C');
	}
	public function info($nama, $email)
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->SetFont('Arial', 'B', 12);
		$this->SetFont('');
		$this->Cell(35, 10, 'Nama', 0, 0, 'L');
		$this->Cell(2, 10, ':', 0, 0, 'L');
		$this->Cell(35, 10, $nama, 0, 0, 'L');
		$this->Ln(5);
		$this->Cell(35, 10, 'Email', 0, 0, 'L');
		$this->Cell(2, 10, ':', 0, 0, 'L');
		$this->Cell(35, 10, $email, 0, 0, 'L');
		$this->Ln(5);
		$this->Cell(35, 10, 'Tanggal cetak', 0, 0, 'L');
		$this->Cell(2, 10, ':', 0, 0, 'L');
		$this->Cell(35, 10, date('l, d-m-Y  h:i:s a'), 0, 0, 'L');
		$this->Ln();
	}
	public function detail($data, $no)
	{
		$this->Cell(7, 10, $no . '.', 0, 0, 'L');
		$this->Cell(35, 10, $data['namaGejala'], 0, 0, 'L');
		$this->Ln(5);
	}
	public function kerusakankomponen($data)
	{
		$this->SetTextColor(255, 0, 0);
		$this->SetFont('Arial', 'B', 12);
		$this->SetFont('');
		$this->Cell(35, 10, 'Kode Kerusakan', 0, 0, 'L');
		$this->Cell(2, 10, ':', 0, 0, 'L');
		$this->Cell(35, 10, $data['kode'], 0, 0, 'L');
		$this->Ln(5);
		$this->Cell(35, 10, 'Nama Kerusakan', 0, 0, 'L');
		$this->Cell(2, 10, ':', 0, 0, 'L');
		$this->Cell(35, 10, $data['namakerusakan']['namaKerusakan'], 0, 0, 'L');
		$this->Ln(5);
		$this->SetFont('Arial', 'B', 12);
		$this->Cell(35, 10, 'Solusi', 0, 0, 'L');
		$this->Cell(2, 10, ':', 0, 0, 'L');
		if (count($data['solusi']) == 0) {
			$this->Cell(35, 10, 'Sementara belum ada', 0, 0, 'L');
		} else {
			$this->Cell(35, 10, 'ada', 0, 0, 'L');
		}

		$this->SetFont('Arial', 'i', 12);
		$this->Ln(8);
		$this->SetTextColor(0, 0, 255);

		foreach ($data['solusi'] as $value) {
			if ($value['jenis'] == 1) {
				$this->MultiCell(150, 5, $value['aksi']);
			} elseif ($value['jenis'] == 2) {
				$this->MultiCell(150, 5, chr(127) . $value['aksi']);
			} elseif ($value['jenis'] == 3) {
				$this->MultiCell(150, 5, "NB : " . $value['aksi']);
			}
		}
	}
}

class Cetak extends Purbacontroler
{

	public function __construct()
	{
		Ceklogin();
	}

	public function index($data)
	{
		//pengambilan data dari db
		$dataaray = explode("[]", $data);
		$hasil = explode(" ", $dataaray[0]);
		$centang = explode(",", $dataaray[1]);
		$detail = new Kerusakanmodel();
		$ambilgejala = new Gejalamodel();
		$gejalacentang = $ambilgejala->centang($centang);
		$detailhasil = $detail->ambilkerusakan($hasil);
		$banyakker = count($detailhasil);
		//pengambilan data dari db
		$nama = $_SESSION['login']['username'];
		$email = $_SESSION['login']['email'];
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->info($nama, $email);
		$pdf->SetFont('Arial', 'B', 15);
		$pdf->Cell(0, 10, 'Hasil Diagnosa', 1, 0, 'C');
		$pdf->SetFont('Arial', 'iu', 12);
		$pdf->Ln();
		$pdf->Cell(0, 10, 'Gejala yang di inputkan', 0, 0, 'L');
		$pdf->Ln();
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetFont('');
		$nomor = 1;
		foreach ($gejalacentang as $item) {
			$pdf->detail($item, $nomor);
			$nomor++;
		}
		$pdf->SetFont('Arial', 'iu', 12);
		$pdf->Ln();
		$pdf->Cell(0, 10, 'Kesimpulan Sistem', 0, 0, 'L');
		$pdf->Ln();
		$pdf->SetFont('Arial', 'BI', 12);
		$pdf->Cell(0, 10, 'Berikut adalah hasil analisa sistem ', 0, 0, 'L');
		$pdf->Ln();
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetTextColor(255, 3, 56);
		$pdf->Cell(0, 10, 'Ditemukan ' . $banyakker . ' kerusakan', 0, 0, 'L');
		$pdf->Ln();
		foreach ($detailhasil as $item) {
			$pdf->kerusakankomponen($item);
			$pdf->Cell(0, 0, '', 1, 0, 'L');
			$pdf->Ln(4);
		}
		$pdf->Output('I','Hasil_Diagonsa_Sistem.pdf');
	}
	public function simpan($data)
	{
		//pengambilan data dari db
		$dataaray = explode("[]", $data);
		$hasil = explode(" ", $dataaray[0]);
		$centang = explode(",", $dataaray[1]);
		$detail = new Kerusakanmodel();
		$ambilgejala = new Gejalamodel();
		$gejalacentang = $ambilgejala->centang($centang);
		$detailhasil = $detail->ambilkerusakan($hasil);
		$banyakker = count($detailhasil);
		//pengambilan data dari db
		$nama = $_SESSION['login']['username'];
		$email = $_SESSION['login']['email'];
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->info($nama, $email);
		$pdf->SetFont('Arial', 'B', 15);
		$pdf->Cell(0, 10, 'Hasil Diagnosa', 1, 0, 'C');
		$pdf->SetFont('Arial', 'iu', 12);
		$pdf->Ln();
		$pdf->Cell(0, 10, 'Gejala yang di inputkan', 0, 0, 'L');
		$pdf->Ln();
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetFont('');
		$nomor = 1;
		foreach ($gejalacentang as $item) {
			$pdf->detail($item, $nomor);
			$nomor++;
		}
		$pdf->SetFont('Arial', 'iu', 12);
		$pdf->Ln();
		$pdf->Cell(0, 10, 'Kesimpulan Sistem', 0, 0, 'L');
		$pdf->Ln();
		$pdf->SetFont('Arial', 'BI', 12);
		$pdf->Cell(0, 10, 'Berikut adalah hasil analisa sistem ', 0, 0, 'L');
		$pdf->Ln();
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->SetTextColor(255, 3, 56);
		$pdf->Cell(0, 10, 'Ditemukan ' . $banyakker . ' kerusakan', 0, 0, 'L');
		$pdf->Ln();
		foreach ($detailhasil as $item) {
			$pdf->kerusakankomponen($item);
			$pdf->Cell(0, 0, '', 1, 0, 'L');
			$pdf->Ln(4);
		}
		$pdf->Output('D','Hasil_Diagonsa_Sistem.pdf');
	}
}
