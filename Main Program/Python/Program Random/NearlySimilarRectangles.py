"""MyList = ["b", "a", "a", "c", "b", "a", "c", 'a']
res = {}

for i in MyList:
    res[i] = MyList.count(i)
    
print(res)"""

value = []
n = int(input())
gaguna = int(input())
for x in range(1,n+1):
    value.append(input().split())

def nearlySimilarRectangles(sides):    
    MyList = []
    for x in sides:
        MyList.append(int(x[0])/int(x[1]))
    res = {}
    for i in MyList:
        res[i] = MyList.count(i)
    all_values = res.values()
    return max(all_values) 
    
print(nearlySimilarRectangles(value))

