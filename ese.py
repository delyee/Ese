from collections import Counter
from termcolor import colored
from prettytable import PrettyTable
from argparse import ArgumentParser

def otherSplit(s):
    _chars = '\ +=/%)'
    _ = []
    for _char in _chars:
        for i in s.split(_char):
            _.append(i.strip())
    return _

def isDangerString(string):
    for _marker in MARKERS:
        if string.rfind(_marker) != -1:
            return True
    return False


# todo: add $_, reserved names in php: 'function', 'return', etc
with open('markers.list') as f:
    MARKERS = f.read().splitlines()

parser = ArgumentParser()
parser.add_argument("-g", "--good", help="show only lines that match markers", action="store_true")
parser.add_argument("--generic", help="show only generic strings", action="store_true")
parser.add_argument("-f", "--filepath", help="path to file")
args = parser.parse_args()

with open(args.filepath) as f:
    count = Counter()
    for line in f.readlines():
        for split_line in otherSplit(line):
            ## 11 - experimental empirical value, 99 - max len prettytable
            if len(split_line) > 11 and len(split_line) < 99:
                count[split_line] += 1

good_table, mbgood_table = PrettyTable(), PrettyTable()

good_table.field_names = ["strings", "counts", "length"]
mbgood_table.field_names = ["mb good strings", "counts", "length"]
good_table.sortby, mbgood_table.sortby = "length", "length"
good_table.align["strings"] = "l"
mbgood_table.align["mb good strings"] = "l"

for s, c in count.most_common():
    if isDangerString(s):
        good_table.add_row([colored(s, 'green'), colored(c, 'cyan'), colored(len(s), 'yellow')])
    else:
        mbgood_table.add_row([colored(s, 'magenta'), colored(c, 'cyan'), colored(len(s), 'yellow')])

if args.generic:
    print(mbgood_table)
else:
    print(good_table)

# killmeforthiscode ._.
