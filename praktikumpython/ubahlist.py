# 1. Misal ada nilai yang salah (angka 4 bukan bilangan ganjil)
ganjil = [1, 3, 4, 7, 9]
print("Item Awal : ", ganjil)
# Output: Item Awal : [1, 3, 4, 7, 9]

# 2. Ubah item ke-3 (indeks ke-2) dari angka 4 menjadi 5
ganjil[2] = 5
print(ganjil)
# Output: [1, 3, 5, 7, 9]

# 3. Mengubah sekali banyak (menggunakan slicing)
# Mengganti elemen dari indeks 2 sampai sebelum 5 dengan list baru
ganjil[2:5] = [11, 13, 15]
print(ganjil)
# Output: [1, 3, 11, 13, 15]