# set integer
set_saya = {1, 2, 3}
print(set_saya)

# set dengan menggunakan fungsi set()
set_saya = set([1, 2, 3])
print(set_saya)

# set data campuran
# Set bisa berisi integer, float, string, dan tuple (data yang bersifat immutable)
set_saya = {1, 2.0, "Python", (3, 4, 5)}
print(set_saya)

# bila kita mengisi duplikasi, set akan menghilangkan salah satu
# output: {1, 2, 3}
set_saya = {1, 2, 2, 3, 3, 3}
print(set_saya)

# PENTING: set tidak bisa berisi anggota list (akan error TypeError)
# set_saya = {1, 2, [3, 4, 5]}