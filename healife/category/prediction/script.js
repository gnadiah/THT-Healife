function getData(symptoms) {
    return fetch("http://localhost:9200/tht/_search", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": "Basic " + btoa("elastic:643264")
        },
        body: JSON.stringify({
            "query": {
                "match": {
                    "symptoms": symptoms
                }
            }
        })
    }).then(data => {
        return data.json();
    })
}

function analyzeData(symptoms) {
    let listData = [];
    let finalData = []
    return getData(symptoms).then(data => {
        data.hits.hits.forEach(disease => {
            listData.push({
                name: disease._source.name,
                symptoms: disease._source.symptoms.split("|$|")
            })
        })

        symptoms = symptoms.split(",");

        listData.forEach(disease => {
            let posibility = 0;
            for (let i = 0; i < disease.symptoms.length; i++) {
                for (let j = 0; j < symptoms.length; j++) {
                    if (disease.symptoms[i].toLowerCase().trim().includes(symptoms[j].toLowerCase().trim())) {
                        posibility += 1;
                        break;
                    }
                }
                disease.symptoms[i] = "- " + disease.symptoms[i] + "<br><br>";
                disease.symptoms[i] = disease.symptoms[i].replace("|newline|", "<br>");
            }
            posibility = (posibility / disease.symptoms.length) * 100;

            finalData.push({
                name: disease.name,
                posibility: posibility,
                symptoms: disease.symptoms
            })
        })

        return finalData.sort((a, b) => b.posibility - a.posibility);

    });
}

function predict() {
    symptoms = document.getElementById("symptoms").value;
    analyzeData(symptoms).then(finalData => {
        let predictionData = document.getElementById("predictionData");
        predictionData.innerHTML = "";
        finalData.forEach(disease => {
            predictionData.innerHTML +=
                `<div class="current-illness">
        <div class="details">
          <h3 style="color:rgb(2, 245, 172); font-size:25px;">TÊN BỆNH: ${disease.name}</h3>
          <h3 style="color:rgb(218, 255, 10); font-size:25px;">XÁC SUẤT: ${disease.posibility.toFixed(2)}%</h3>
          <br>
          <div class="current-illness" style="background-color:rgba(206, 38, 97, 0.866);">
            <div class="details">
                <h3 style="color:rgb(255, 255, 255); font-size:22px;">TRIỆU CHỨNG: <br>${disease.symptoms.join("")}</h3>
            </div>
          </div>
        </div>
      </div>
      <br>`
        })
    })
}