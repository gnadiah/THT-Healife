import json
import re
import pandas as pd

diseases = []
with open("diseases.json", "r") as f:
    diseases = json.load(f)

for i in range(len(diseases)):
    if len(diseases[i]["symptoms"]):
        newSymptoms = ""
        for symptom in diseases[i]["symptoms"]:
            if symptom == diseases[i]["symptoms"][-1]:
                newSymptoms += re.sub(" +", " ",symptom.strip())
            else:
                newSymptoms += re.sub(" +", " ",symptom.strip()) + "|$|"
        diseases[i]["symptoms"] = newSymptoms
    else:
        diseases[i]["symptoms"] = ""
    diseases[i]["symptoms"] = re.sub(" +", " ", diseases[i]["symptoms"].strip()).replace("\n", "|newline|")

df = pd.DataFrame(diseases)
df.to_csv("diseases.csv", index=False)