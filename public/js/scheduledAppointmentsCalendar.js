document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        displayEventTime: true,
    });

    calendar.render();
    displayScheduledAppointments();

    function displayScheduledAppointments() {
        fetch(`/admin/appointments`)
            .then(
                response => response.json()
            )
            .then(appointments => {
                console.log(appointments);
                const events = appointments.map(appointment => ({
                    id: appointment.consultantId,
                    title: `${appointment.consultant.name} ${appointment.time_slot} with ${appointment.company}`,
                    start: appointment.date,
                }));
                calendar.addEventSource(events);
            })
            .catch(error => console.error(error));
    }
});
