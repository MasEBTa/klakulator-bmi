<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator IBM</title>
</head>
<body>
    <div>
    <h1>BMI (Body Mass Index)</h1>
    BMI adalah indikator pengukuran yang digunakan untuk menentukan kategori 
    berat badan ideal atau tidak. BMI dikembangkan oleh Adolphe Quetelet 
    selama abad ke-19. Melalui hasil perhitungan BMI, Anda akan mengetahui 
    kategori berat badan, yaitu kurus, ideal, berlebihan, atau bahkan obesitas.
    Metode perhitungan ini juga bisa menjadi alat skrining untuk melihat risiko 
    kesehatan tertentu. 
    <br /><br />
    Menurut WHO, hasil BMI yang tidak normal/ideal akan meningkatkan 
    risiko terkena beberapa penyakit. Maka dari itu, sekiranya Anda 
    perlu memahami bagaimana cara menghitung BMI secara tepat untuk 
    meminimalisir kenaikan atau penurunan berat badan secara berlebihan.    
    Adapun beberapa masalah kesehatan yang salah satu faktor risikonya 
    adalah obesitas, di antaranya penyakit kardiovaskular, kematian 
    dini, hipertensi, dan diabetes. 
    </div>
    <br />
    <form action="" method="post">
      <fieldset>
        <legend>Kalkulator IBM</legend>
        <label for="nama">Nama : </label><input id="nama" type="text" name='nama' placeholder="Nama Kamu" required><br />
        <label for="tinggi">Tinggi badan : </label><input id="tinggi" type="number" name='tinggi' placeholder="Dalam Kg" required><br />
        <label for="berat">Berat badan : </label><input id="berat" type="number" name='berat' placeholder="Dalam cm" required>
        <button name="submit">submit</button>

        <?php
          if ( isset($_POST['submit']) ) {
            $nama = $_POST['nama'];
            $rumus_metrik = ($_POST['berat']/$_POST['tinggi']/$_POST['tinggi'])*10000;
            $rumus_metrik = number_format($rumus_metrik, 2, '.', '');
          }
        ?>
        <?php if ( isset($_POST['submit']) ) : ?>
          <?php if( $rumus_metrik < 17 ) : ?>
              <p>Halo <?= $nama; ?>. Nilai IBM kamu adalah <?=$rumus_metrik ?>, kamu termasuk sangat kurus.</p>
            <?php elseif ( $rumus_metrik >= 17 && $rumus_metrik <= 18.4 ) : ?>
              <p>Halo <?= $nama; ?>. Nilai IBM kamu adalah <?=$rumus_metrik ?>, kamu termasuk kurus.</p>
            <?php elseif ( $rumus_metrik >= 18.5 && $rumus_metrik <= 25 ) : ?>
              <p>Halo <?= $nama; ?>. Nilai IBM kamu adalah <?=$rumus_metrik ?>, kamu termasuk ideal.</p>
            <?php elseif ( $rumus_metrik >= 25.1 && $rumus_metrik <= 27 ) : ?>
              <p>Halo <?= $nama; ?>. Nilai IBM kamu adalah <?=$rumus_metrik ?>, kamu termasuk gemuk.</p>
            <?php elseif ( $rumus_metrik >= 27.1 && $rumus_metrik <= 30 ) : ?>
              <p>Halo <?= $nama; ?>. Nilai IBM kamu adalah <?=$rumus_metrik ?>, kamu termasuk kegemukan.</p>
            <?php else : ?>
              <p>Halo <?= $nama; ?>. Nilai IBM kamu adalah <?=$rumus_metrik ?>, kamu termasuk Overdosis.</p>
          <?php endif; ?>
        <?php endif; ?>
      </fieldset>
    </form>
    <br>
    <?php if ( isset($_POST['submit']) ) : ?>
     <?php if( $rumus_metrik < 17 ) : ?>
      <p>
        Halo, berdasarkan analisa kami badan anda terlalu kurus. Hal ini bisa menandakan adanya 
        masalah kesehatan. Oleh karena itu, kamu perlu mengenali risiko kesehatan akibat terlalu 
        kurus agar bisa melakukan pencegahan dengan tepat. Risiko kesehatan itu meliputi:
        <ol>
          <li>Mengalami kekurangan nutrisi</li>
            <p>Terlalu kurus bisa dipicu oleh gangguan makan atau kondisi kesehatan tertentu. 
            Jika kebutuhan nutrisi tidak tercukupi dalam jangka panjang, seseorang bisa 
            mengalami kekurangan nutrisi. Kondisi ini akan menyebabkan terjadinya gangguan 
            fungsi tubuh, serta kerusakan jaringan dan organ tubuh.</p>
            <p>Beberapa kondisi yang berkaitan dengan kekurangan nutrisi pada orang yang 
              terlalu kurus adalah anemia defisiensi zat besi, rabun senja, mudah sariawan, 
              hingga hipotermia (suhu tubuh yang terlalu rendah).</p>
          <li>Membuat tubuh lebih rentan sakit</li>
            <p>
              Seseorang dengan tubuh yang terlalu kurus juga lebih mudah sakit. Hal ini karena sel-sel pada sistem kekebalan tubuh memerlukan sejumlah nutrisi penting untuk tetap bisa bekerja dengan optimal.
              Saat tubuh terlalu kurus akibat kurangnya asupan nutrisi, maka sistem imun juga tidak bisa bekerja dengan optimal dalam melindungi tubuh. Akibatnya tubuh juga akan lebih rentan sakit dan terserang penyakit infeksi, termasuk flu dan pilek.
            </p>
          <li>Meningkatkan risiko osteoporosis</li>
            <p>
              Risiko kesehatan bila terlalu kurus selanjutnya adalah osteoporosis atau tulang rapuh. Kondisi ini disebabkan oleh kurangnya asupan nutrisi dan berhubungan erat dengan kurangnya asupan kalsium dan vitamin D.
              Saat seseorang terlalu kurus akibat jarang makan, kekurangan kalsium dan vitamin D bisa saja terjadi. Jika terjadi dalam jangka panjang, risiko terjadinya osteoporosis akan meningkat.
            </p>
          <li>Mengganggu siklus menstruasi</li>
            <p>
              Wanita yang terlalu kurus juga berisiko mengalami gangguan siklus menstruasi. Saat tubuh kekurangan lemak, produksi hormon yang berperan dalam menstruasi juga bisa menurun.
              Penurunan produksi hormone ini kemudian menyebabkan terganggunya proses pelepasan sel telur dari ovarium (ovulasi). Nah, jika proses ovulasi terganggu atau berhenti, maka siklus menstruasi juga akan kacau bahkan berhenti.
            </p>
          <li>Mempersulit kehamilan</li>
            <p>
            Tubuh yang terlalu kurus juga bisa mengganggu siklus menstruasi pada wanita. Siklus haid terganggu bisa memicu terjadinya masalah kesuburan yang pada akhirnya bisa membuat peluang kehamilan menjadi lebih rendah.
            </p>
        </ol>
        Karena itu kami berharap anda memperhatikkan kondisi tubuh anda.
     <?php elseif ( $rumus_metrik >= 17 && $rumus_metrik <= 18.4 ) : ?>
        Halo, berdasarkan analisa kami badan temasuk kategori kurus. Tetap perhatikan kesehatan anda
        apabila tibuh anda menjadi terlalu kurus Hal ini bisa menandakan adanya 
        masalah kesehatan. Oleh karena itu, kamu perlu mengenali risiko kesehatan akibat terlalu 
        kurus agar bisa melakukan pencegahan dengan tepat. Risiko kesehatan itu meliputi:
        <ol>
          <li>Mengalami kekurangan nutrisi</li>
            <p>Terlalu kurus bisa dipicu oleh gangguan makan atau kondisi kesehatan tertentu. 
            Jika kebutuhan nutrisi tidak tercukupi dalam jangka panjang, seseorang bisa 
            mengalami kekurangan nutrisi. Kondisi ini akan menyebabkan terjadinya gangguan 
            fungsi tubuh, serta kerusakan jaringan dan organ tubuh.</p>
            <p>Beberapa kondisi yang berkaitan dengan kekurangan nutrisi pada orang yang 
              terlalu kurus adalah anemia defisiensi zat besi, rabun senja, mudah sariawan, 
              hingga hipotermia (suhu tubuh yang terlalu rendah).</p>
          <li>Membuat tubuh lebih rentan sakit</li>
            <p>
              Seseorang dengan tubuh yang terlalu kurus juga lebih mudah sakit. Hal ini karena sel-sel pada sistem kekebalan tubuh memerlukan sejumlah nutrisi penting untuk tetap bisa bekerja dengan optimal.
              Saat tubuh terlalu kurus akibat kurangnya asupan nutrisi, maka sistem imun juga tidak bisa bekerja dengan optimal dalam melindungi tubuh. Akibatnya tubuh juga akan lebih rentan sakit dan terserang penyakit infeksi, termasuk flu dan pilek.
            </p>
          <li>Meningkatkan risiko osteoporosis</li>
            <p>
              Risiko kesehatan bila terlalu kurus selanjutnya adalah osteoporosis atau tulang rapuh. Kondisi ini disebabkan oleh kurangnya asupan nutrisi dan berhubungan erat dengan kurangnya asupan kalsium dan vitamin D.
              Saat seseorang terlalu kurus akibat jarang makan, kekurangan kalsium dan vitamin D bisa saja terjadi. Jika terjadi dalam jangka panjang, risiko terjadinya osteoporosis akan meningkat.
            </p>
          <li>Mengganggu siklus menstruasi</li>
            <p>
              Wanita yang terlalu kurus juga berisiko mengalami gangguan siklus menstruasi. Saat tubuh kekurangan lemak, produksi hormon yang berperan dalam menstruasi juga bisa menurun.
              Penurunan produksi hormone ini kemudian menyebabkan terganggunya proses pelepasan sel telur dari ovarium (ovulasi). Nah, jika proses ovulasi terganggu atau berhenti, maka siklus menstruasi juga akan kacau bahkan berhenti.
            </p>
          <li>Mempersulit kehamilan</li>
            <p>
            Tubuh yang terlalu kurus juga bisa mengganggu siklus menstruasi pada wanita. Siklus haid terganggu bisa memicu terjadinya masalah kesuburan yang pada akhirnya bisa membuat peluang kehamilan menjadi lebih rendah.
            </p>
        </ol>
        Karena itu kami berharap anda memperhatikkan kondisi tubuh anda.
     <?php elseif ( $rumus_metrik >= 18.5 && $rumus_metrik <= 25 ) : ?>
      <div>Selamat karena badan anda termasuk ideal. Pertahankan kesehatan Tubuh anda.</div>
     <?php elseif ( $rumus_metrik >= 25.1 && $rumus_metrik <= 27 || $rumus_metrik >= 27.1 && $rumus_metrik <= 30 || $rumus_metrik > 30 ) : ?>
      <?php if ( $rumus_metrik >= 25.1 && $rumus_metrik <= 27 ) : ?>
        <div>Menurut analisa kami badan anda termasuk gemuk. Perhatikan lagi kesehatan badan anda dan jangan sampai obesitas. Karena obesitas menyebabkan berbagai masalah kesehatan.</div>
      <?php elseif($rumus_metrik >= 27.1 && $rumus_metrik <= 30) : ?>
        <div>Menurut analisa kami badan anda termasuk Kegemukan. Perhatikan lagi kesehatan badan anda dan jangan sampai obesitas. Karena obesitas menyebabkan berbagai masalah kesehatan.</div>
      <?php elseif($rumus_metrik > 30) : ?>
        <div>Menurut analisa kami badan anda termasuk Obesitas. Perhatikan lagi kesehatan badan anda Karena obesitas menyebabkan berbagai masalah kesehatan.</div>
      <?php endif; ?>
      <div>
        <h1></h1>
        <p>
          Bagi yang memiliki badan gemuk, keluhan pertama yang mungkin dirasakan adalah mudah mengalami kelelahan. Pasalnya, beban tubuh yang harus dibawa orang bertubuh gemuk pasti lebih besar, sehingga tubuhnya dipaksa bekerja lebih keras ketika sedang beraktivitas.
          Beban tubuh yang berlebih juga bisa memberikan tekanan yang lebih besar pada persendian, sehingga orang yang terlalu gemuk lebih mudah mengalami nyeri sendi atau pegal-pegal.
          Tidak hanya itu, ada banyak gangguan kesehatan yang juga mengintai akibat badan terlalu gemuk, antara lain:</p>
          <ol>
            <li>Diabetes tipe 2</li>
              <p>
                Kelebihan berat badan dapat menyebabkan resitensi insulin, sehingga membuat kadar gula dalam darah meningkat. Jika ini sampai terjadi, Anda berisiko untuk terkena peyakit diabetes tipe 2.
                Bila Anda telah terkena diabetes tipe 2, risiko untuk terkena gangguan kesehatan lain, seperti penyakit jantung, penyakit ginjal, stroke, hingga kebutaan, akan semakin besar.
              </p>
            <li>Penyakit jantung</li>
              <p>
                Badan terlalu gemuk dapat menyebabkan tekanan darah tinggi, kolesterol tinggi, dan penyumbatan arteri. Ketiga kondisi ini tidak boleh dianggap remeh, karena semuanya berkontribusi terhadap risiko terkena penyakit jantung.
                Bahkan, jika kegemukan menyebabkan terjadinya penyempitan dan penyumbatan arteri, Anda juga berisiko untuk terkena serangan jantung dan stroke.
              </p>
            <li>GERD atau penyakit asam lambung</li>
              <p>
                Anda berisiko lebih tinggi untuk terkena GERD jika memiliki badan yang terlalu gemuk. Hal ini karena kelebihan berat badan yang Anda alami bisa meningkatkan tekanan pada perut yang kemudian dapat memicu kenaikan asam lambung.
              </p>
            <li>Sulit bernapas</li>
              <p>
                Penumpukan lemak di tubuh dapat menurunkan kinerja paru-paru, sehingga kemampuannya dalam mengambil udara untuk bernapas juga bisa terganggu. Hal ini pada akhirnya bisa menyebabkan Anda cepat kehabisan napas saat melakukan aktivitas-aktivitas sederhana, seperti naik tangga.
                Selain itu, berat badan berlebih juga dapat memperburuk gejala asma dan penyakit paru obstruktif kronis (PPOK).
              </p>
          </ol>
          <p>Selain itu masih efek negatif dari kegemukan (obesitaS). Jadi perhatikan lagi kesehatan anda.</p>
      </div>
     <?php endif; ?>
    <?php endif; ?>
    <div></div>
    <a href="kategori.php"><button>Bersihkan</button></a>
</body>
</html>