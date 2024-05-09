import requests
from bs4 import BeautifulSoup

def getSymptoms(url):
    r = requests.get(url)
    soup = BeautifulSoup(r.content, "html.parser")
    symptomsData = soup.findAll("section")[3].select("div > ul > li > p")
    symptoms = []
    for symptom in symptomsData:
        symptoms.append(symptom.getText())
    return symptoms