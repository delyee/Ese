from collections import Counter
from termcolor import colored
from prettytable import PrettyTable
from argparse import ArgumentParser
from pathlib import Path
from uuid import uuid4
from datetime import datetime
from hashlib import sha256


BASE_DIR = Path(__file__).resolve().parent


# todo: add $_, reserved names in php: 'function', 'return', etc
with open(BASE_DIR / 'markers.list') as f:
    MARKERS = f.read().splitlines()

#print(dir(BASE_DIR))
#print(BASE_DIR.parent)



parser = ArgumentParser()
parser.add_argument("-g", "--good", help="show only lines that match markers", action="store_true")
parser.add_argument("--generic", help="show only generic strings", action="store_true")
parser.add_argument("--rule", help="generate rule (experimental!)", action="store_true")
parser.add_argument("-f", "--filepath", help="path to file")
args = parser.parse_args()

good_table, mbgood_table = PrettyTable(), PrettyTable()
good_table.field_names = ["strings", "length", "in current sample", "in other samples"]
mbgood_table.field_names = ["mb good strings", "length", "in current sample", "in other samples"]
good_table.sortby, mbgood_table.sortby = "length", "length"
good_table.align["strings"] = "l"
mbgood_table.align["mb good strings"] = "l"
#mbgood_table.reversesort, good_table.reversesort = True, True


#good_table.horizontal_char = '#'
#mbgood_table.horizontal_char = '#'



'''
def otherSplit(s):
    _chars = [' ', '/', '//', '+', '%', ';']
    _ = []
    # iter1
    for _char in _chars:
        for iter1 in s.split():
            _.append(iter1.strip())
    while True:
        if len(_) > 0:
            _tmp_string = _.pop()
            # iter2
            for _char in _chars:
                if _char in _tmp_string:
                    for iter2 in _tmp_string.split(_char):
                        _.append(iter2.strip())
        else:
            pass

'''

def otherSplit(s):
    _chars = [' ', '//', '+', '%', ';', '*/', '/*']
    _ = []
    for _char in _chars:
        for iter1 in s.split(_char):
            if len(iter1) > 5:
                _.append(iter1.strip())
    return _


def isDangerString(string):
    for _marker in MARKERS:
        if string.rfind(_marker) != -1:
            return True
    return False

class MalwareFolder:
    '''
    files [
    {filename: [split_line1, split_line2, ...]}
    {filename: [split_line1, split_line2, ...]}
    ]
    '''
    def __init__(self):
        self.path = BASE_DIR.joinpath('MalwareFolder')
        self.files = {}
        for i in self.path.glob('**/*.php'):
            self.files[i.name] = otherSplit(i.read_text())
            # self.files[i.parent/i.name] = otherSplit(i.read_text())

    def search(self, s):
        self._tmp = {}
        for filename, lines_array in self.files.items():
            for line in lines_array:
                _tmp_rfind = line.count(s)
                if _tmp_rfind > 0:
                    self._tmp[str(filename)] = _tmp_rfind

        return self._tmp


with open(args.filepath) as f:
    all_lines = []
    for line in f.readlines():
        for split_line in otherSplit(line):
            all_lines.append(split_line)
            ## 11 - experimental empirical value, 99 - max len prettytable "sortby"
            #if len(split_line) > 5 and len(split_line) < 100:
            #    count[split_line] += 1
    all_lines.sort(reverse=True)

count = Counter(all_lines)

'''
with open(args.filepath) as f:
    count = Counter()
    for line in f.readlines():
        for split_line in otherSplit(line):
            ## 11 - experimental empirical value, 99 - max len prettytable "sortby"
            if len(split_line) > 5 and len(split_line) < 100:
                count[split_line] += 1
'''

mf = MalwareFolder()

for s, c in count.most_common():
    if len(s) > 160:
        continue
    _mf_result = mf.search(s)
    if isDangerString(s):
        if _mf_result:
            #for current_color in ['red', 'blue']
            good_table.add_row([colored(s, 'red'), colored(len(s), 'yellow'), colored(c, 'yellow'), colored(len(_mf_result), 'red')]) # colored('\n'.join(_mf_result.keys()), 'red')
        else:
            good_table.add_row([colored(s, 'green'), colored(len(s), 'yellow'), colored(c, 'yellow'), 'nothing'])
    else:
        if _mf_result:
            mbgood_table.add_row([colored(s, 'magenta'), colored(len(s), 'yellow'), colored(c, 'yellow'), colored(len(_mf_result), 'red')])
        else:
            mbgood_table.add_row([colored(s, 'cyan'), colored(len(s), 'yellow'), colored(c, 'yellow'), 'nothing'])

if args.generic:
    print(mbgood_table)
else:
    print(good_table)



'''
print(colored(f'[!] sha256sum = {SHA256SUM}', 'green'))
print(colored(f'[!] uuid4 = sample_{uuid4().hex}', 'green'))
print(colored(f'[!] date = {datetime.now().strftime("%d.%m.%Y")}', 'green'))
'''


'''
import datetime
from datetime import datetime
now = datetime.now().strftime("%d.%m.%Y %H")
print ("Current date and time : ")
print (now.strftime("%Y-%m-%d %H:%M:%S")
'''


if args.rule:
    _rulename = colored(f'[!] sample_{uuid4().hex}', 'green')
    _date = colored(f'{datetime.now().strftime("%d.%m.%Y")}', 'yellow')
    with open(args.filepath, 'rb') as f:
        _sha256sum = colored(sha256(f.read()).hexdigest(), 'cyan')
    #with open(BASE_DIR / 'template.yar') as f:
    #    TEMPLATE = f'{f.read()}'

    print(_rulename, _date, _sha256sum)


'''
print(mbgood_table[0:5].fields)

for row in good_table:
    row.border = False
    row.header = False
    print(row.get_string(fields=["strings"]))


'''
# killmeforthiscode ._.
