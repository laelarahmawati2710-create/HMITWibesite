# Inisialisasi list awal
ganjil = [1, 3, 5, 7]

# 1. Menggunakan append() untuk menambah SATU anggota ke akhir list
ganjil.append(9)
print(ganjil)
# Output: [1, 3, 5, 7, 9]

# 2. Menggunakan extend() untuk menambah BANYAK anggota (list baru) ke dalam list
ganjil.extend([11, 13, 15])
print(ganjil)
# Output: [1, 3, 5, 7, 9, 11, 13, 15]