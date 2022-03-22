<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>Pada pengertian codeignater di atas tadi di jelaskan bahwa codeignater 
        menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih
        jauh dalam belajar codeignater.</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga yaitu model, view dan controller</p>
    
    <ol type="a">
        
        <li>Model</li>
    <p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan
        tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagai penanganan
        yang berhubungan dengan pengolahan atau manipulasi database. Seperti misalnya mengambil data dari 
        database, menginput dan mengolah database lainnya. Semua intruksi atau fungsi yang berhubungan dengan 
        pengolahan database di letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung 
        luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
    <p align='justify'>Sebagai catatan, Semua model harus disimpan di dalam folder application\models</p>
    
        <li>View</li>
    <p align= 'justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang
        muncul pada user(pada browser). Tampilan dari user interface dikumpulkan pada view untuk memisahkannya
        dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
    
        <li>Controller</li>
    <p align= 'justify'>Controller merupakan kumpulan instruksi aksi yang menghbungkan model dan view,
         jadi user tidakakan berhubungan dengan model secara langsung, intinya data yang tersimpan di database (model) 
        di ambil oleh controller dan kemudian controller pula yang menampilkan nya ke view. Jadi controller lah yang mengolah instruksi.</p>
    <p align= 'justify'>Dari penjelasan tentang model view dan controller di atas dapat di simpulkan bahwa controller sebagai penghubung 
        view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep MVC, 
        controller memanggil intruksi pada model yang mengambil data pada database, kemudian controller yang 
        meneruskannya pada view untuk ditampilkan. Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara MVC ini karena 
        web designer atau front-end developer tidak perlu lagi berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end 
        developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan 
        dengan cepat dan terstruktur.</p>
    </section>