import requests
import json
from bs4 import BeautifulSoup
from getDetails import getSymptoms

base_api = "https://www.vinmec.com"
r = requests.get( base_api + "/vi/benh/")
soup = BeautifulSoup(r.content, "html.parser")

startWithList = [chr(i) for i in range(ord("a"), ord("z") + 1)]
diseases = []
for section in startWithList:
    print("Current section: " + section)
    sectionData = soup.find("section", id=section)
    if sectionData is None:
        continue

    sectionData = sectionData.select("ul > li > a")
    for disease in sectionData:
        print("Current disease: " + disease.string)
        url = base_api + disease["href"]
        diseaseData = {
            "startWith": section,
            "name": disease.string,
            "symptoms": getSymptoms(url),
            "url": url,
        }
        diseases.append(diseaseData)

with open("diseases.json", "w") as f:
    json.dump(diseases, f, indent=4)