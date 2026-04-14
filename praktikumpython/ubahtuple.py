# 1. Inisialisasi tuple dengan elemen list di dalamnya
tuple1 = (2, 3, 4, [5, 6])

# 2. Mencoba mengubah anggota tuple langsung (Akan ERROR)
# tuple1[1] = 8 
# Output: TypeError: 'tuple' object does not support item assignment

# 3. Mengubah isi LIST yang ada di dalam tuple (Bisa dilakukan)
# Mengakses indeks ke-3 (yaitu list [5,6]), lalu ubah indeks ke-0 (angka 5) jadi 7
tuple1[3][0] = 7
print(tuple1)
# Output: (2, 3, 4, [7, 6])

# 4. Mengganti tuple secara keseluruhan (Penugasan kembali)
tuple1 = ('p', 'y', 't', 'h', 'o', 'n')
print(tuple1)
# Output: ('p', 'y', 't', 'h', 'o', 'n')

# 5. Menghapus anggota tuple (Akan ERROR)
# del tuple1[0]
# Output: TypeError: 'tuple' object does not support item deletion

# 6. Menghapus tuple secara keseluruhan (Bisa dilakukan)
del tuple1
# Setelah ini, jika print(tuple1) akan error karena variabelnya sudah hilang