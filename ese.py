from sys import argv
from collections import Counter
from colorama import Back
from termcolor import colored

def otherSplit(s):
    _chars = [' ', '+', '=', '/', "%"]
    _tmp = []
    for _char in _chars:
        for i in s.split(_char):
            _tmp.append(i.strip())
    return _tmp

def check(s):
    _evil = ['eval', 'base64_decode', 'str_rot13', 'gzinflate', 'gzuncompress',
            'strrev', 'gzdecode', '$GLOBALS', 'Array', '<?php']
    for _ in _evil:
        if _ in s:
            return True

with open(argv[1]) as f:
    queue = []
    for line in f.readlines():
        for split_line in otherSplit(line):
            ## 11 - experimental empirical value
            if len(split_line) > 11 and len(split_line) < 128:
                queue.append(split_line)

count = Counter()
for line in queue:
    count[line] += 1

for s, c in count.most_common(50):
    if check(s):
        print(colored(s, 'white', 'on_red'))
    else:
        print(s)

# killmeforthiscode ._.
