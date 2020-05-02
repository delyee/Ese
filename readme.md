### alpha version!

---

#### Why need `--generic`?:
[![asciicast](https://asciinema.org/a/vIKE6xk4eQ3pS7WKkmcD1rmtx.svg)](https://asciinema.org/a/vIKE6xk4eQ3pS7WKkmcD1rmtx)


---
# Example of pattern extraction and writing the rule:

1. Start:
```
➜  Ese git:(master) ✗ python3 ese.py -f malware/sample1_wso.php
```
2. See output:

![output](./screenshots/sample1_wso.php.png)

3. Write example rule:
```
rule f49dd66a179e44e9a0a5a173676a4525: phpshell
{
    meta:
        author = "delyee"
        date = "08.10.2019"
        sha256sum = "1c62a00fe13fbff09ebc16cf408f5d9f53a285fc1014438c2a488e3f6d2b65bc"
    strings:
        $ = "<?php eval(gzinflate(base64_decode('HZzHkuNQdgV"
        $ = "Z///s//AQ=='))); ?>"
    condition:
        all of them
}
```

4. Result:

![result](./screenshots/sample1_wso.php_result.png)

5. Results for other samples:

![result](./screenshots/other_results.png)

---
