# membuat set baru dari string
# output: set berisi anggota yang unik
set_saya = set("HelloPython")
print(set_saya)

# pop anggota (menghapus satu anggota secara acak)
print(set_saya.pop())
print(set_saya)

# pop anggota lainnya
print(set_saya.pop())
print(set_saya)

# mengosongkan set
set_saya.clear()
print(set_saya)
# output: set()