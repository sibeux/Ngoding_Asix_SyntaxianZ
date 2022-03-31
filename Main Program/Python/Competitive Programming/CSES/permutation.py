value = int(input("masukkan angka : "))

for x in range(1,value+1):
    if x - (x+1) == 0:
        print(x)