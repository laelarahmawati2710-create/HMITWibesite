# 1. Membuat tuple kosong
tuple1 = ()
print(tuple1)
# Output: ()

# 2. Tuple dengan 1 elemen (WAJIB pakai koma di akhir)
tuple1 = (1,)
print(tuple1)
# Output: (1,)

# 3. Tuple berisi integer
tuple1 = (1, 2, 3)
print(tuple1)
# Output: (1, 2, 3)

# 4. Tuple bersarang (Nested Tuple)
# Berisi string, list, dan tuple lain
tuple1 = ("hello", [1, 2, 3], (4, 5, 6))
print(tuple1)
# Output: ("hello", [1, 2, 3], (4, 5, 6))

# 5. Tuple bisa dibuat tanpa tanda kurung (Tuple Packing)
tuple1 = 1, 2, 3
print(tuple1)
# Output: (1, 2, 3)

# 6. Memasukkan anggota tuple ke variabel (Tuple Unpacking)
# a=1, b=2, c=3
a, b, c = tuple1
print(a, b, c)
# Output: 1 2 3