arr = np.array([
    [ 5, 10, 10, 7],
    [ 7,  8, 4, 10],
    [ 9, 10, 2,  5],
    [ 1,  8, 9,  3],
    [ 6, 10, 5,  2],
    [ 4,  6, 9,  4]
])

arr[:3,[0,1]],arr[3:,[2,3]] = arr[3:,[2,3]],arr[:3,[0,1]]
arr[:3,[2,3]],arr[3:,[0,1]] = arr[3:,[0,1]],arr[:3,[2,3]]

print(arr)