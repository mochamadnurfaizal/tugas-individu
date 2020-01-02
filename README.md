# Tugas-individu
Cara instalasi :
1.  ubah nama file ".env.sample" menjadi ".env"
2.  ketikkan syntax "composer install"
3.  ketikkan syntax "php artisan storage:link"
3.  buat database pada local computer dengan nama "laravel" (menggunakan syntax "CREATE DATABASE laravel" pada mysql)
4.  ketikkan syntax "php artisan migrate"
5.  ketikkan syntax "php artisan serve"
6.  buka web dengan alamat "localhost:8000/data_diri"

Proses kerja :
1.  Terdapat file dengan nama web.php (pada directory "tugas-individu\routes\web.php"), digunakan untuk mengatur nama endpoint dan controller yang digunakan.<br/>
    Endpoint yang saya gunakan adalah endpoint "/data_diri" dengan method "GET" <br />
    <br/>
    web.php <br/>
    ![alt text](https://github.com/mochamadnurfaizal/tugas-individu/blob/master/Gambar/route.PNG)
    <br/>
    Apabila endpoint "/data_diri" dipanggil, maka request tersebut akan dijalankan oleh controller "DataDiriController" pada function "Index"<br/><br/>
2.  Controller "DataDiriController" (pada directory "tugas-individu\app\Http\Controllers\DataDiriController.php") akan menjalankan syntax untuk membaca file, memasukkan data pada database dan kemudian ditampilkan pada view "listDataDiri"
    <br/>
    <br/>
    DataDiriController.php <br/>
    ![alt text](https://github.com/mochamadnurfaizal/tugas-individu/blob/master/Gambar/controller.PNG)
    <br/>
    <br/>
3.  View "listDataDiri" (pada directory "tugas-individu\resources\views\listDataDiri.blade.php") akan menampilkan hasil query database dan ditampilkan dalam bentuk tabel
    <br/>
    <br/>
    listDataDiri.blade.php <br/>
    ![alt text](https://github.com/mochamadnurfaizal/tugas-individu/blob/master/Gambar/tampilan.png)
    <br/>
    <br/>

Database dan model:
1.  Terdapat file model dengan nama DataDiri.php (pada directory "tugas-individu\app") yang digunakan untuk mendefinisikan tabel yang digunakan dan field yang diisi
    <br/>
    <br/>
    DataDiri.php <br/>
    ![alt text](https://github.com/mochamadnurfaizal/tugas-individu/blob/master/Gambar/model.PNG)
    <br/>
    <br/>
2.  Terdapat file migration (pada directory "tugas-individu\database\migrations") yang digunakan untuk membuat tabel beserta field dengan attribut masing-masing
    <br/>
    <br/>
    File migration <br/>
    ![alt text](https://github.com/mochamadnurfaizal/tugas-individu/blob/master/Gambar/migration.PNG)
    <br/>
    <br/>
