function viewScheduleAdmin(id) {
    addRemoveClass(id);
    removeSection();
    showSection("viewSchedule");
    getAllSchedules();
}
function getAllSchedules() {
    let temp_html = '';
    $.get("php/getAllSchedules.php", function (data, status) {
        if (data != 'false') {
            data = JSON.parse(data);
            let currentTime = new Date();
            for (let i = 0; i < data.length; i++) {
                let temp = data[i];
                let start = new Date(temp.start_date + ' ' + temp.start_time);
                let end = new Date(temp.end_date + ' ' + temp.end_time);
                let scheduleStatus = '<span class="label label-info">Upcoming</span>';
                if (start > currentTime) {
                    scheduleStatus = '<span class="label label-info">Upcoming</span>';
                } else if (start <= currentTime && end >= currentTime) {
                    scheduleStatus = '<span class="label label-success">Ongoing&nbsp;</span>';
                } else if (end < currentTime) {
                    scheduleStatus = '<span class="label label-warning">&nbsp;Passed&nbsp;</span>';
                }
                    temp_html += '<tr class="schedule-row" onclick="viewScheduleModal(' + temp.schedule_id + ')">' +
                        '<td>' + temp.start_date + '</td>' +
                        '<td>' + temp.start_time + '</td>' +
                        '<td>' + temp.end_date + '</td>' +
                        '<td>' + temp.end_time + '</td>' +
                        '<td >' + scheduleStatus + '</td>' +
                        '<td >' + temp.appointments + '</td>' +
                        '<td>' + formatDate(new Date(temp.createdDate)) + '</td>' +
                        '</tr>';

            }
        } else {
            temp_html += '<tr class="schedule-row text-center">No schedules found</tr>';
        }
        $("#view-schedule-body").html(temp_html);
    });
}
