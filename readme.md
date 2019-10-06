### alpha version!

#### Example pattern extraction and spelling the rule:
- Get patterns:
```
➜  Ese git:(master) ✗ python3 ese.py malware/sample1_wso.php '+'
<?php eval(gzinflate(base64_decode('HZzHkuNQdgV/ZXYzE1jAu5BCE/CW8JYbBbz3Hl8vlhbdm64iAbx3z8lkg/jP//z3f
Z6/kdxJv2/qrcZyz7Zi3
lyVYQ2P/mRTblxb/
```
- write example rule:
```
rule eb413cc73b3942c4a65e54472ffdcd2d: phpshell
{
    meta:
        description = ""
        author = "delyee"
        date = "07.10.2019"
        sha256sum = "eb4692ca53eb5d1a5917a088a1ca5946bc48a27d7a87e969de645a86a12c1d12" // sha256sum shell.php
    strings:
        $s1 = "<?php eval(gzinflate(base64_decode('HZzHkuNQdgV/ZXYzE1jAu5BCE/CW8JYbBbz3Hl8vlhbdm64iAbx3z8lkg/jP//z3f"
        $s2 = "Z6/kdxJv2/qrcZyz7Zi3"
        $s3 = "lyVYQ2P/mRTblxb/"
    condition:
        all of them
}
```

#### Additionally:
Try changing the separator for the best effect:
```
➜  Ese git:(master) ✗ python3 ese.py malware/sample2.php ')'
<?php ${"\x47L\x4f\x42\x41L\x53"}["\x62u\x6d\x66\x7a\x78"]="a\x75\x74h";${"\x47LOBAL\x53"}["\x71\x70b\x78\x67\x70\x69\x65\x71b\x78"]="\x76\x61\x6c\x75\x65";${"GLO\x42\x41\x4c\x53"}["e\x6e\x79p\x75\x74\x68d\x6c\x6bk"]="k\x65\x79";${"\x47L\x4fBA\x4c\x53"}["\x70\x77\x68ueh\x75i"]="\x6a";${"\x47L\x4f\x42\x41L\x53"}["\x70\x62k\x71\x70wke\x75\x74\x68u"]="\x69";${"G\x4c\x4f\x42\x41L\x53"}["\x74\x6b\x6f\x71\x6ac\x77b\x63\x6a"]="v\x61\x6cu\x65";$udborfbq="data";${"G\x4c\x4f\x42AL\x53"}["\x62\x64\x79l\x70n\x77g\x77\x75y\x6e"]="\x64\x61\x74\x61\x5f\x6b\x65\x79";${"G\x4cO\x42\x41L\x53"}["knx\x74\x77\x69h\x6d\x75\x67i"]="\x64a\x74\x61";@ini_set("e\x72r\x6fr\x5flog",NULL
;@ini_set("\x6cog\x5f\x65\x72ro\x72s",0
;$bgvvfcvmjs="\x64\x61\x74a";@ini_set("m\x61\x78\x5fe\x78e\x63u\x74io\x6e_t\x69\x6d\x65",0

➜  Ese git:(master) ✗ python3 ese.py malware/sample2.php ';'
global$auth
<?php ${"\x47L\x4f\x42\x41L\x53"}["\x62u\x6d\x66\x7a\x78"]="a\x75\x74h"
${"\x47LOBAL\x53"}["\x71\x70b\x78\x67\x70\x69\x65\x71b\x78"]="\x76\x61\x6c\x75\x65"

➜  Ese git:(master) ✗ python3 ese.py malware/sample2.php '"'
\x47L\x4f\x42\x41L\x53
]}<strlen(${${
\x47L\x4f\x42\x41\x4c\x53
```
