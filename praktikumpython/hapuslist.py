# Inisialisasi list awal
my_list = ['p', 'y', 't', 'h', 'o', 'n', 's', 'a', 'y', 'a']

# 1. remove() -> Menghapus berdasarkan NILAI elemennya
my_list.remove('p')
print(my_list)
# Output: ['y', 't', 'h', 'o', 'n', 's', 'a', 'y', 'a']

# 2. Penting! remove() hanya menghapus elemen PERTAMA yang ditemukan
my_list = ['p', 'y', 't', 'h', 'o', 'n', 's', 'a', 'y', 'a']
my_list.remove('n')
print(my_list)
# Output: ['p', 'y', 't', 'h', 'o', 's', 'a', 'y', 'a']

# 3. pop() -> Menghapus berdasarkan INDEKS dan "mengembalikan" nilainya
# Menghapus indeks ke-1 (huruf 'y')
print(my_list.pop(1)) 
# Output: y
# Sekarang my_list jadi: ['p', 't', 'h', 'o', 's', 'a', 'y', 'a']

# 4. del -> Menghapus berdasarkan INDEKS (tanpa mengembalikan nilai)
del my_list[2]
print(my_list)
# Output: ['p', 't', 'o', 's', 'a', 'y', 'a'] (huruf 'h' hilang)

# 5. clear() -> Mengosongkan seluruh isi list
my_list.clear()
print(my_list)
# Output: []