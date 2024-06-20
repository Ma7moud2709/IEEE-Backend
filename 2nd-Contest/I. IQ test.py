n = int(input())
numbers = list(map(int, input().split()))

even_indexs = []
odd_indexs = []

for i in range(n):
    if(numbers[i] % 2 == 0 ):
        even_indexs.append(i+1)
    else:
        odd_indexs.append(i+1)

if len(even_indexs) == 1:
    print(even_indexs[0])
else:
    print(odd_indexs[0])