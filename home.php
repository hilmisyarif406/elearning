<!-- <h1><?php echo $title;?></h1> -->

<!--<div class="col-lg-12">  
<h4>Fakultas Ilmu Komputer</h4>
        <p>
        Fakultas Ilmu Komputer semula bernama Fakultas Teknologi Informasi dan Komunikasi Didirikan pada tanggal 18 Juli 2008  berdasarkan Surat Keputusan  Yayasan Pembina Perguruan Tinggi Pangkal Perjuangan Nomor 019/SK/YPPTPP/USK/VII/2008 tentang Pembentukan Fakultas Teknologi Informasi dan Komunikasi Universitas Singperbangsa Karawang. Selanjutnya berdasarkan Surat Keputusan  Yayasan Pembina Perguruan Tinggi Pangkal Perjuangan Nomor 017/SK/YPPTPP/USK/VI/2010 tentang perubahan nama Fakultas Teknologi Informasi dan Komunikasi Universitas Singperbangsa Karawang, maka sejak  tanggal 21 Juni 2010 berubah nama menjadi Fakultas Ilmu Komputer disingkat Fasilkom.
        <p>
        Fakultas Ilmu Komputer didirikan dengan tujuan untuk memajukan dan memperkembangkan ilmu pengetahuan pada umumnya dan ilmu komputer pada khususnya, serta membentuk manusia susila yang cakap dan bertanggung jawab  serta  mempersiapkan  tunas-tunas muda guna menjadi ahli-ahli komputer yang berguna bagi nusa dan bangsa.

</div>
 

-->

<div class="col-lg-12">
  <?php 
              $query = "SELECT * FROM `tblstudent`";
              $mydb->setQuery($query);
              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<h3>Welcome Back</h3>';
              echo '<h4>Hi '.$result->Fname.'</h4>';


            } 
            ?>
</div>
