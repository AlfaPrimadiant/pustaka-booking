<section>
	<h1> <?php echo $judul?> </h1>
	<p align='justify'>
		Pada pengertian codeigniter di atas tadi dijelaskan bahwa codeigniter menggunakan metode MVC.
		Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk lebih dalam belajar codeigniter.
	</p>
	<p>
		MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga bagian yaitu model, view, dan controller.
	</p>
	<ol type="a">
		<li> Model </li>
			<p align='justify'>
				Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
				Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database.
				Seperti misalnya mengambil data dari database, menginput dan pengolahan databse lainnya.
				Semua interuksi dan fungsi yang berhubungan dengan pengolahan database diletakan di dalam model.
				Sebagai contoh jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai model.
			</p>
			<p align='justify'>
				Sebagai catatan semua model harus disimpan didalam folder application/models
			</p>
		<li> View </li>
			<p align='justify'>
				View merupakan bagian yang mengangani halaman user interface atau halaman yang muncul pada browser.
				Tampilan pada user interface di kumpulkan pada view untuk memisahkanya dengan model dan controller sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website
			</p>
		<li> Controller </li>
			<p>
				Controller merupakan kumpulan interuksi aksi yang menghubungkan model dan view, sehingga user tidak berhubungan dengan model secara langsung.
				Intinya data yang berada pada database (model) diambil oleh controller dan kemudian menampilkannya pada view.
				Jadi controller ini yang mengolah interuksi.
			</p>
	</ol>
	<p align='justify'>
		Dari penjelasan tentang model view dan controller diatas, dapat disimpulkan bahwa controller sebagai penghubung view dan model.
		Misalnya pada apalikasi yang menampilkan data dengan menggunakan metode konsep MVC, controller memanggil interuksi pada model yang mengambil database, kemudian diteruskan pada view untuk ditampilkan.
		Jadi jelas sangat mudah dalam pengembangan aplikasi dengan cara mvc, karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller,
		dia hanya perlu berhubungan dengan view untuk mendesign tampilan karena back-end developer yang menangani bagian controller dan modelnya.
		Sehingga pembagian tugas menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan tersetruktur.
	</p>
</section>
