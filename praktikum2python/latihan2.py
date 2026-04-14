# Meminta input jumlah bilangan yang diinginkan
jumlah = int(input("Masukkan jumlah bilangan genap: "))

# Loop untuk menampilkan bilangan genap
# Kita mengalikan jumlah dengan 2 karena range berhenti sebelum nilai akhir
for i in range(0, jumlah * 2, 2):
    print(i, end=" ")

print(f"({jumlah} bilangan)")