document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        displayEventTime: true,
    });

    calendar.render();
    displayAllAvailabilities();

    function displayAllAvailabilities() {
        const id = getUrlParameter();
        fetch(`/admin/availability/${id}`)
            .then(
                response => response.json()
            )
            .then(availabilities => {
                const events = availabilities.map(availability => ({
                    id: availability.consultantId,
                    title: `${availability.consultant.name} ${availability.start.slice(0, -3)} - ${availability.end.slice(0, -3)}`,
                    start: availability.date,
                }));
                calendar.addEventSource(events);
            })
            .catch(error => console.error(error));
    }

    function getUrlParameter() {
        let path = window.location.pathname;
        let pathSegments = path.split('/');
        return pathSegments[pathSegments.length - 1];
    }
});
