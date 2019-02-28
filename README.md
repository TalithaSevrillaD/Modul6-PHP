# Modul6-PHP
# Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session!
cookie digunakan untuk menyimpan data pada remote browser dan juga bisa dimanfaatkan untuk mengidentifikasi status pada cliet. sedangkan session digunakan untuk menyimpan informasi pada server,session bersifat temporer sehingga biasanya server akan menghapus sesion ketika user telah meninggalkan website yang menggunakan session.
# Bagaimana cara menghapus session dan cookies pada sebuah browser!
Penghapusan cookie dilakukan dengan cara mengirimkan nama cookie sama tetapi nilainya kosong sedangkan untuk menghapus data session,bisa menggunakan konstruksi bahasa unset() atau fungsi session_destroy()
#  Berikan contoh kode dari pembuatan dan menghapus cookies dan session!
