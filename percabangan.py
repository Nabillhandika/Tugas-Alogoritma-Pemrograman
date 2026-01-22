# --- Program Cek Kelulusan (Python) ---

# Mengambil input dari user
nama = input("Masukkan nama mahasiswa: ")
nilai = int(input("Masukkan nilai ujian: "))

print("-" * 30)

# Contoh IF tunggal dan IF-ELSE
if nilai >= 75:
    print(f"Selamat {nama}, Anda dinyatakan LULUS!")
    print("Pertahankan prestasimu!")
else:
    print(f"Mohon maaf {nama}, Anda dinyatakan TIDAK LULUS.")
    print("Tetap semangat dan coba lagi semester depan.")

print("-" * 30)