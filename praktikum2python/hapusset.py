set_saya = {1, 2, 3, 4, 5}
print(set_saya)

# menghapus 4 dengan discard
set_saya.discard(4)
print(set_saya)

# menghapus 5 dengan remove
set_saya.remove(5)
print(set_saya)

# anggota yang mau dihapus tidak ada dalam set
# discard tidak akan memunculkan error
set_saya.discard(6)
print(set_saya)