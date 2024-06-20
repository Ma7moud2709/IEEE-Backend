s_decimal = int(input(), 2)

train_time = 1
missed_trains = 0

while train_time < s_decimal:
    train_time *= 4
    missed_trains += 1 

print(missed_trains)