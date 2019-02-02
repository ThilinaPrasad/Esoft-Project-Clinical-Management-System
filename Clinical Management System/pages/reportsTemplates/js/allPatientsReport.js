    $.get("php/getAllPatientsDataReport.php", function (data, status) {
        let temp_html = '';
        if (data.length != 0 && data != 'false') {
            data = JSON.parse(data);
            for(let i=0;i<data.length;i++){
                let splited = data[i].bday.split("/");
                let yrs = new Date(new Date() - new Date(splited[2], splited[0], splited[1])) / 1000 / 60 / 60 / 24 / 365;
                let age_y = Math.round(yrs);
                temp_html += '<tr>\n' +
                    '<td style="text-align:left;">'+data[i].fname+' '+data[i].sname+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].gender+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].bday+' ('+age_y+'yrs)</td>\n' +
                    '<td style="text-align:left;">'+data[i].nic+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].street + ", " + data[i].city + ", <br>" + data[i].country + ", " + data[i].zipCode+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].email+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].telephone+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].bloodType+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].weight+'</td>\n' +
                    '<td style="text-align:left;">'+data[i].height+'</td>\n' +

                    '</tr>'
            }
            $("#t-body").html(temp_html);
        } else {
            console.log("Error");
        }
    });


    function getPDFFileButton () {
        // Select which div with id that need to be printed
        // to print body $('body')
        // here printing div with content id $("#content")
        // using html canvas to save as required pdf to image to preserve css
        return html2canvas($('#content'), {
            background: "#ffffff",
            onrendered: function(canvas) {
                var myImage = canvas.toDataURL("image/png");
                // Adjust width and height
                var imgWidth = (canvas.width * 40) / 240;
                var imgHeight = (canvas.height * 40) / 240;
                // jspdf changes
                var pdf = new jsPDF();
                pdf.addImage(myImage, 'JPEG', -10, 0, imgWidth, imgHeight); // 2: 19
                pdf.save('Kenway Medicals(All patient user data).pdf');
            }
        });
    }

    function add(a, b) {
        return a + b;
    }

    function getMonthFromDate(date) {
        let monthNum = date.getMonth();
        let returnVal = '';

        switch(monthNum){
            case 0:
                returnVal = 'January';
                break;
            case 1:
                returnVal = 'February';
                break;
            case 2:
                returnVal = 'March';
                break;
            case 3:
                returnVal = 'April';
                break;
            case 4:
                returnVal = 'May';
                break;
            case 5:
                returnVal = 'June';
                break;
            case 6:
                returnVal = 'July';
                break;
            case 7:
                returnVal = 'August';
                break;
            case 8:
                returnVal = 'September';
                break;
            case 9:
                returnVal = 'October';
                break;
            case 10:
                returnVal = 'November';
                break;
            case 11:
                returnVal = 'December';
                break;

        }

        return returnVal;

    }