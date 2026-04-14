# Mendefinisikan tuple
tuple1 = (1, 2, 3, 'a', 'b', 'c')

# 1. Menggunakan 'in' untuk mengecek keberadaan anggota
# Apakah angka 3 ada di dalam tuple1?
# Output: True
print(3 in tuple1)

# 2. Cek angka 2 tapi dalam format string '2'
# Karena di tuple1 adanya angka (integer) 2, maka string '2' dianggap tidak ada
# Output: False
print('2' in tuple1)

# 3. Cek huruf 'e'
# Output: False
print('e' in tuple1)

# 4. Menggunakan 'not in' untuk mengecek KETIDAKADAAN anggota
# Apakah huruf 'k' TIDAK ADA di dalam tuple1?
# Output: True (Benar, 'k' memang tidak ada)
print('k' not in tuple1)