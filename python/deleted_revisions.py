#This file is auto-generated. See modules.json and autogenerator.py for details

#!/usr/bin/python3

"""
    deleted_revisions.py

    MediaWiki API Demos
    Demo of `Deletedrevisions` module: Get a list of deleted revisions for Talk:Main Page.

    MIT License
"""

import requests

S = requests.Session()

URL = "https://en.wikipedia.org/w/api.php"

PARAMS = {
    "action": "query",
    "titles": "Talk:Main_Page",
    "prop": "deletedrevisions",
    "drvprop": "user|comment|content",
    "drvslots": "*",
    "format": "json"
}

R = S.get(url=URL, params=PARAMS)
DATA = R.json()

print(DATA)
