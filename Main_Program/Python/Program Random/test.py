# 1
n = int(input('n = '))
b = tuple(str(n))
result = tuple((int(x[0])) for x in b)
if n%sum(result)==0:
    print('iya')
else:
    print('tidak')

# 2
from itertools import permutations
n = int(input('n = '))
a = []
for x in range(n):
    a+=['6','9']
temp = {0}
for x in permutations(a,n):
    temp.add(x)
temp.remove(0)
result = []
for x in temp:
    if '666' in "".join(x):
        pass
    elif '999' in "".join(x):
        pass
    else:
        result.append("".join(x))
print(len(result))
print(*result,sep=',')

    
