n = int(input())
numb = []
index = n
while index > 0:
    numb.append(str(input()))
    index -= 1

numb.sort(reverse=True)

print(*numb,sep=",")