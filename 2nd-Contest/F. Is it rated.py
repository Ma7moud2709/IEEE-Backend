n = int(input())
before = []
after = []

is_rated = False

for _ in range(n):
    ai,bi = map(int, input().split(" "))

    before.append(ai)
    after.append(bi);

    if ai != bi:
        is_rated = True

if is_rated:
    print("rated")
else:
    is_decreasing = True

    for i in range(n-1):
        if(before[i] < before[i+1]):
            is_decreasing = False
            break

    if is_decreasing:
        print('maybe')
    else:
        print('unrated')