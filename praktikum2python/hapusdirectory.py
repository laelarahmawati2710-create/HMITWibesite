# membuat dictionary baru
dict_saya = {1: 1, 2: 4, 3: 9, 4: 16, 5: 25}

# menghapus anggota tertentu
# output: 9
print(dict_saya.pop(3))

# menghapus anggota secara acak
# output: (5, 25)
print(dict_saya.popitem())

# yang tersisa adalah {1: 1, 2: 4, 4: 16}
print(dict_saya)

# delete key 2 (di modul tertulis delete 5, tapi kodenya del dict_saya[2])
del dict_saya[2]

# output: {1: 1, 4: 16}
print(dict_saya)

# menghapus semua anggota
dict_saya.clear()

# menghapus variabel dictionary dict_saya sepenuhnya
del dict_saya

# Ini akan Error jika dijalankan karena dict_saya sudah dihapus dari memori
# print(dict_saya)