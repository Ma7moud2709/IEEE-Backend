n = int(input())
coins = list(map(int, input().split(" ")))

# Sorting list in Desc order
coins.sort(reverse=True)

total_sum = sum(coins)
your_coins = 0
count = 0


for coin in coins:
    your_coins += coin
    count += 1

    if your_coins > total_sum - your_coins:
        break

print(count)
