<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;
use App;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{
	public function welcome(){
	return view('welcome');}

	public function buku($locale='id') {
		App::setLocale($locale);
		$data_buku = Buku::all();
		return view('buku', compact('data_buku', 'locale'));
	}
	

	public function createbuku($locale='id'){
		App::setLocale($locale);
		return view('createbuku', ["locale" => $locale]);}
	   
	 
	public function savebuku(Request $req){
		App::setLocale($req->locale);
    $this->validate($req,[
	  'judul' => 'required|string',
	  'penulis' => 'required|string',
	  'penerbit' => 'required|string', 
	  'harga' => 'required|gt:0']); 	
	$buku = new Buku;
	$buku->judul = $req->judul;
	$buku->penulis = $req->penulis;
	$buku->penerbit = $req->penerbit;
	$buku->kodekategori = $req->kodekat;
	$buku->hargabuku = $req->harga;
	$buku->save();
	return redirect('/buku')->with('pesan','Data buku berhasil disimpan');}
	
	public function delbuku($id){
	$buku = Buku::find($id);
	$buku->delete();
    return redirect('/buku')->with('pesan','Data anggota berhasil dihapus');}

	public function editbuku($id){
	$buku = Buku::find($id);
	return view('editbuku', compact('buku'));}

	public function updatebuku(Request $req, $id){
    $this->validate($req,[
	  'judul' => 'required|string',
	  'penulis' => 'required|string',
	  'penerbit' => 'required|string', 
	  'harga' => 'required|gt:0']); 		
	$buku = Buku::find($id);
	$buku->judul = $req->judul;
	$buku->penulis = $req->penulis;
	$buku->penerbit = $req->penerbit;
	$buku->kodekategori = $req->kodekat;
	$buku->hargabuku = $req->harga;
	$buku->update();
	return redirect('/buku')->with('pesan','Data buku berhasil diubah');}
		
	public function anggota(){
	$data_anggota = ANGGOTA::all();
	return view('anggota', compact('data_anggota'));}
	
	public function createanggota($locale='id'){
		App::setLocale($locale);
	return view('createanggota',["locale" => $locale]);}	
	
	public function saveanggota(Request $req){
		App::setLocale($req->locale);
		$this->validate($req,[
			'npm' => 'required',
			'nama' => 'required|string',
			'kodegender' => 'required|string', 
			'alamat' => 'required|string']); 	
	$anggota = new Anggota;
	$anggota->npm = $req->npm;
	$anggota->nama = $req->nama;
	$anggota->kodegender = $req->kodegender;
	$anggota->alamat = $req->alamat;
	$anggota->save();
	return redirect('/anggota')->with('pesan','Data buku berhasil disimpan');}
	
	public function delanggota($id){
	$anggota = Anggota::find($id);
	$anggota->delete();
	return redirect('/anggota')->with('pesan','Data anggota berhasil dihapus');}
	
	public function editanggota($id){
	$anggota = Anggota::find($id);
	return view('editanggota', compact('anggota'));}

	public function updateanggota(Request $req, $id){
		$this->validate($req,[
			'npm' => 'required|string',
			'nama' => 'required|string',
			'kodegender' => 'required|string', 
			'alamat' => 'required|string']); 		
	$anggota = Anggota::find($id);
	$anggota->npm = $req->npm;
	$anggota->nama = $req->nama;
	$anggota->kodegender = $req->kodegender;
	$anggota->alamat = $req->alamat;
	$anggota->update();
	return redirect('/anggota')->with('pesan','Data buku berhasil diubah');}

	public function peminjaman(){
	$data_peminjaman = PEMINJAMAN::all();
	return view('peminjaman', compact('data_peminjaman'));}
	
	public function createpeminjaman($locale='id'){
		App::setLocale($locale);
		return view('createpeminjaman', ["locale" => $locale]);}
	
	public function savepeminjaman(Request $req){
		App::setLocale($req->locale);
		$this->validate($req,[
			'tgl_pinjam' => 'required|date',
			'id_anggota' => 'required|string',
			'id_buku' => 'required|string', 
			'lama_pinjam' => 'required|gt:0']); 	
	$peminjaman = new peminjaman;
	$peminjaman->tgl_pinjam = $req->tgl_pinjam;
	$peminjaman->id_anggota = $req->id_anggota;
	$peminjaman->id_buku = $req->id_buku;
	$peminjaman->lama_pinjam = $req->lama_pinjam;
	$peminjaman->save();
	return redirect('/peminjaman')->with('pesan','Data buku berhasil disimpan');}
	
	public function delpeminjaman($id){
	$peminjaman = Peminjaman::find($id);
	$peminjaman->delete();
	return redirect('/peminjaman')->with('pesan','Data anggota berhasil dihapus');}
	
	public function editpeminjaman($id){
	$peminjaman = Peminjaman::find($id);
	return view('editpeminjaman', compact('peminjaman'));}

	public function updatepeminjaman(Request $req, $id){
		$this->validate($req,[
			'tgl_pinjam' => 'required|date',
			'id_anggota' => 'required|string',
			'id_buku' => 'required|string', 
			'lama_pinjam' => 'required|gt:0']); 	
	$peminjaman = Peminjaman::find($id);
	$peminjaman->tgl_pinjam= $req->tgl_pinjam;
	$peminjaman->id_buku = $req->id_buku;
	$peminjaman->id_anggota = $req->id_anggota;
	$peminjaman->lama_pinjam = $req->lama_pinjam;
	$peminjaman->update();
	return redirect('/peminjaman')->with('pesan','Data buku berhasil diubah');}

	// report
	public function lap1(){
		$data_lap1 = DB::select(
		 'SELECT P.id IdPinjam, A.nama NamaAgt,
		 B.judul JudulBuku, P.lama_pinjam LamaPinjam
		 FROM table_anggota A
		 JOIN table_peminjaman P ON (A.id=P.id_anggota)
		 JOIN table_buku B ON (B.id=P.id_buku)');
		return view('lap1', compact('data_lap1'));}

		public function lap2()
		{
			$data_lap2 = DB::select('
			SELECT
				P.id AS IdPinjam,
				A.nama AS NamaAgt,
				A.alamat AS AlamatAgt,
				B.judul AS JudulBuku,
				B.penulis AS PenulisAgt,
				P.lama_pinjam AS LamaPinjam
			FROM
				table_anggota A
				JOIN table_peminjaman P ON (A.id = P.id_anggota)
				JOIN table_buku B ON (B.id = P.id_buku);
			');
			return view('lap2', compact('data_lap2'));}

		public function lap3()
		{
			$data_lap3 = DB::select('
			SELECT
				B.judul AS JudulBuku,
				B.penulis AS Penulis,
				B.penerbit AS Penerbit,
				COUNT(P.id) AS JumlahPinjam
			FROM
				table_buku B
			JOIN table_peminjaman P ON (B.id = P.id_buku)
			GROUP BY
				B.id, B.judul, B.penulis, B.penerbit
			');
			return view('lap3', compact('data_lap3'));
		}

		public function lap4()
		{
			$data_lap4 = DB::select('
			SELECT
				A.npm AS npm,
				A.nama AS nama,
				A.alamat AS alamat,
				COUNT(P.id) AS JumlahMinjam
			FROM
				table_anggota A
			JOIN table_peminjaman P ON (A.id = P.id_anggota)
			GROUP BY
				A.id, A.nama, A.alamat
			');
			return view('lap4', compact('data_lap4'));
		}

		public function lap5()
		{
			$data_lap5 = DB::select('
			SELECT
				penerbit,
				avg (hargabuku) AS hargaRata
			FROM
				table_buku
			GROUP BY
				penerbit
			');
			return view('lap5', compact('data_lap5'));
		}

		public function lap6()
		{
			$data_lap6 = DB::select('
			SELECT
				penulis,
				COUNT(penulis) AS JumlahKaryaBuku
			FROM
				table_buku
			GROUP BY
				penulis
			');
			return view('lap6', compact('data_lap6'));
		}
}
