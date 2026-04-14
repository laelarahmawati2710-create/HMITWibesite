set_saya = {1, 2, 3}
print(set_saya)

# bila kita hilangkan tanda # dari baris bawah ini akan muncul error TypeError
# set_saya[0] 

# menambah satu anggota
set_saya.add(4)
print(set_saya)

# menambah beberapa anggota sekaligus
# set akan secara otomatis menghilangkan duplikasi
set_saya.update([3, 4, 5, 6])
print(set_saya)