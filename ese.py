from sys import argv
from string import punctuation
from collections import Counter

CHAR_SPLIT = argv[2]

with open(argv[1]) as f:
    queue = []
    for line in f.readlines():
        for split_line in line.split(CHAR_SPLIT):
            ## 11 - experimental empirical value
            if len(split_line) > 11:
                queue.append(split_line.strip())

count = Counter()
for line in queue:
    count[line] += 1

for s, _ in count.most_common(3):
    print(s)
